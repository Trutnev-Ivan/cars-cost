<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/kernel/modules/main/include.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/kernel/configs.php";

global $APPLICATION, $DB;



$APPLICATION = Application::getInstance();
$DB = DataBase::getInstance($dbHost, $dbLogin, $dbPassword, $dbName);

$SITE_TEMPLATE = $DB->query("SELECT VALUE FROM configs WHERE PARAM='SITE_TEMPLATE'")->fetch()["VALUE"];
$SITE_TEMPLATE_PATH = "/kernel/templates/" . $SITE_TEMPLATE;

require_once $_SERVER["DOCUMENT_ROOT"]. $SITE_TEMPLATE_PATH . "/header.php";