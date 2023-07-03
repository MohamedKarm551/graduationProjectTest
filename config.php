<?php
//ini_set("display_errors", "Off");
error_reporting(E_ALL & ~E_NOTICE);
require_once("db_info.php");
const __secret__Constant__ = true;

const __SITE_NAME__ = "graduation";
const __ROOT__ = __DIR__;
const __WIDGETS__ = __ROOT__."/widgets/";
//const __DIST__ = "/dist";

if(isset($_GET["lang"]) && isset($_GET["location"])) {
    $lang = $_GET["lang"];
    $location = $_GET["location"];
    setcookie("lang", $lang, time()+ 31556926 ,"/");
    header('Location: '.$location);
}

const __CONT__ = __ROOT__."/controller";
$lang = $_COOKIE["lang"] ?? "en";
$dir = ($lang == "en") ? "ltr" : "rtl";
if($lang == "en"){
    require_once(__ROOT__."/languages/en.php");
} elseif ($lang == "ar"){
    require_once(__ROOT__."/languages/ar.php");
}
