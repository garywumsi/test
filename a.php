<?php
 
// 載入 Google API Autoload
require_once './Google/autoload.php';

$google_json  = './Google/client_secret.json';

	// 設定需要的服務
	$scopes       =
	[
		// Drive
		Google_Service_Drive::DRIVE,
		Google_Service_Drive::DRIVE_APPDATA,
		Google_Service_Drive::DRIVE_APPS_READONLY,
		Google_Service_Drive::DRIVE_FILE,
		Google_Service_Drive::DRIVE_METADATA,
		Google_Service_Drive::DRIVE_METADATA_READONLY,
		Google_Service_Drive::DRIVE_PHOTOS_READONLY,
		Google_Service_Drive::DRIVE_READONLY,
		Google_Service_Drive::DRIVE_SCRIPTS,
	];

	// 建立一個新的 google client
	$client = new Google_Client();
	// 載入載入帳號資料
	$cred = $client->loadServiceAccountJson( $google_json, $scopes );
	// 設定帳號資料
	$client->setAssertionCredentials( $cred );
	// 建立 google drive 服務
	$drive   = new Google_Service_Drive( $client );
	
	print_r($drive);


?>