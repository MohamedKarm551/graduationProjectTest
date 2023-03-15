<?php
ob_start();
require_once("inc.php");

$url = $_GET["url"] ?? "";
if ($url = h__u($url)) {
    $cat = $url[0] ?? "";
    $sub = $url[1] ?? "";
    //handle the redirect to 404 page
    if ($cat === "404") {
        require_once(__CONT__ . "/404.php");
        exit;
    }
    require_once(__ROOT__ . "/templates/head.php");
    /*$critical_cats = ["projects","clients","employees","settings"];
    if(in_array($cat,$critical_cats)){
        if(!$SESS->logged_in){
            r__("/login");
        } else {
            if(!$SESS->is_admin) {
                r__("/404");
            } else {
                if($cat!=="employees"&&$cat!=="settings"&&$SESS->app_version==="hr") r__("/404");
            }
        }
    }*/
    switch ($cat) {
        case "paths":
            require_once(__ROOT__ . "/templates/paths.php");
            break;
        case "courses":
            require_once(__ROOT__ . "/templates/courses.php");
            break;
        case "path":
            require_once(__ROOT__ . "/controller/path.php");
            break;
        case "videos":
            require_once(__ROOT__ . "/controller/videos.php");
            break;
        case "contact":
            require_once(__ROOT__ . "/templates/contact.php");
            break;
        case "quality":
            require_once(__ROOT__ . "/controller/quality.php");
            break;
        default:
            if (h__v($cat)) r__("/404");
            require_once(__CONT__ . "/home.php");
            break;
    }
    require_once(__ROOT__ . "/templates/foot.php");
} else {
    r__("/404");
}
