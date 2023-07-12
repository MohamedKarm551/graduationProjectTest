<?php
ob_start();
require_once("inc.php");

$url = $_GET["url"] ?? "";
if ($url = handle_url($url)) {
    $cat = $url[0] ?? "";
    $sub = $url[1] ?? "";
    if ($cat === "404") {
        require_once(__CONT__ . "/404.php");
        exit;
    }
    require_once(__ROOT__ . "/templates/head.php");

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
        case "test-your-self":
            require_once(__ROOT__ . "/controller/test-your-self.php");
            break;
        default:
            if (has_value($cat)) redirect("/404");
            require_once(__CONT__ . "/home.php");
            break;
    }
    require_once(__ROOT__ . "/templates/foot.php");
} else {
    redirect("/404");
}
