<?php

define("ASSETS_PATH",basename(dirname(__DIR__))."/public/assets");
define("WEBROOT", $_SERVER['DOCUMENT_ROOT']."/boutique");
define("ENVIRONNEMENT", "DEV");
define("FILES", WEBROOT."/data");
define("UPLOAD_DIR", WEBROOT.'/public/assets/images/');

if(ENVIRONNEMENT == "DEV"){
    require_once WEBROOT."/config/helpers.config.php";
}else{
    include_once WEBROOT."/config/helpers.config.php";
}
