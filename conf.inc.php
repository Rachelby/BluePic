<?php
date_default_timezone_set('Europe/Paris');
ini_set('display_errors', 'On');
error_reporting(E_ALL);
ini_set("SMTP", "smtp.gmail.com");
ini_set("smtp_port", "25");

define("DS", DIRECTORY_SEPARATOR);
define("PATH_RELATIVE", "/MVC/");
define("PATH_RELATIVE_PATTERN", "\/MVC\/");
define("APP_ID",'153602711910635');
define("APP_SECRET",'4e247d8aea6b756f050003e9687b14a9');

switch ($_SERVER['SERVER_NAME']) {
    default:
        define('HOSTNAME', 'localhost');
        define('DB_HOST', 'mysql');
        define('DB_NAME', 'bluepic');
        define('DB_USER', 'admin');
        define('DB_PWD', 'root');
        define('DB_PORT', '3306');
        define('DB_PREFIXE', '');
        define('DIR', $_SERVER['DOCUMENT_ROOT']);
}
