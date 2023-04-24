<?php
defined("__secret__Constant__") or die('No Such File!');

$lang = $_GET["lang"] ?? "";
//$location = $_GET["location"] ?? "";

if($lang === "ar" || $lang === "en"){
    setcookie("lang", $lang, time()+ 31556926 ,'/');
    r__();
}



require_once __ROOT__."/templates/home.php";


