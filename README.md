# Power BI Pipedrive Connector

## Description

The purpose of this connector is to access Pipedrive data from Power BI so you can create more advanced reports.

This connector can also be used to extract data from Pipedrive with any other purpose, i.e. you can extract data to load it into a database.

## Instructions

1. Copy files to your server so you can access it via url like:
https://yourdomain.com/Power-BI-Pipedrive-Connector/index.php
2. Edit file auth.php to restrict access to this connector giving authorization only to valid tokens.
3. Start your Power BI report using our template available at:
https://github.com/audoxcl/Power-BI-Examples/blob/main/Pipedrive.pbix

In Power BI Desktop you should set all these parameters (in the Power Query Editor window):

1. **url:** the url where the connector is installed.
2. **token:** the token used to use the connector. See auth.php file to change the way this token is validated. The token 'FREETOKEN' will work until you edit auth.php file. Also, you can add multiple tokens in auth.php file.
3. **domain:** the Pipedrive domain for your company. This domain is also used in Power BI report to create the url link to each record inside your Pipedrive account. The domain is located in your Pipedrive account in 'Company Settings' -> General -> 'Company domain'.
4. **pipedrive_token:** the token to access Pipedrive data. This token is located in your Pipedrive account in 'Personal preferences' -> API.

### Detailed Instructions

https://www.audox.com/tools/power-bi-pipedrive-connector/

### YouTube Playlist Tutorials

https://www.youtube.com/playlist?list=PLI3w6pdNV1sQfDFH3mKRbjYWH0zZjxEMX

This connector might be limited due to Pipedrive API rate limitations.

## Paid Version

Don't want to struggle with installation and updates? You can consider our paid version here:
https://rapidapi.com/audox-ingenieria-spa-audox-ingenieria-spa-default/api/power-bi-pipedrive-connector/pricing

## Contact Us:

- info@audox.com
- www.audox.com
- www.audox.mx
- www.audox.es
- www.audox.cl
