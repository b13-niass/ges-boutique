<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once $_SERVER['DOCUMENT_ROOT']."/boutique"."/config/boostrap.config.php";

require_once  WEBROOT. "/autoload_model.php";

require_once WEBROOT."/router/router.php";
