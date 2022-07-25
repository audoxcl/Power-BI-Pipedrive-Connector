<?php

/* #########################
* This code was developed by:
* Audox Ingeniería SpA.
* website: www.audox.com
* email: info@audox.com
######################### */

include 'auth.php';

function getRecords($object, $params){

    $domain = $params["company_domain"];
    unset($params["company_domain"]);

    $url = 'https://'.$domain.'.pipedrive.com/api/v1/'.$object.'?'.http_build_query($params);
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($output, true);
    
    $records = [];

    if(!empty($result['data'])){
        foreach($result['data'] as $record){
            $records[] = $record;
        }
    }

    if(!empty($result['additional_data']['pagination']['more_items_in_collection'])
        && $result['additional_data']['pagination']['more_items_in_collection'] === true){
        $params["company_domain"] = $domain;
        $params["start"] = $result['additional_data']['pagination']['next_start'];
        $records = array_merge($records, getRecords($object, $params));
    }

    return $records;

}

$headers = getallheaders();
if(function_exists('Auth') && Auth($headers['Authorization']) == false) die(json_encode(array("error_code" => "401", "error_description" => "Unauthorized")));

$params = array(
    "company_domain" => $_REQUEST['company_domain'],
    "api_token" => $_REQUEST['api_token'],
    "start" => $_REQUEST['start'],
    "limit" => $_REQUEST['limit'],
);

if($_REQUEST["action"] == "getRecords") $result = getRecords($_REQUEST['object'], $params);

echo json_encode($result);

?>