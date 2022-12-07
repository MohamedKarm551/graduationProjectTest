<?php
//ini_set("display_errors", "Off");
error_reporting(E_ALL & ~E_NOTICE);
require_once("db_info.php");
const __secret__Constant__ = true;

const __SITE_NAME__ = "graduation";
const __ROOT__ = __DIR__;
//const __DIST__ = "/dist";
const __CONT__ = __ROOT__."/controller";

$lang = $_COOKIE["lang"] ?? "en";
$dir = ($lang == "en") ? "ltr" : "rtl";
if($lang == "en"){
    require_once(__ROOT__."/languages/en.php");
} elseif ($lang == "ar"){
    require_once(__ROOT__."/languages/ar.php");
} //no else can not be here to prevent file inclusion vulnerability to cookie
