<?php
/**
 * @var $from_controller
 */
if(!isset($from_controller)){
    require_once('../config.php');
    require_once(__ROOT__."/inc.php");
}
?>
<!doctype html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8">
        <title><?='Not Found!';?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <link rel="shortcut icon" href="//<?=f__r("media/images/icon.png"); ?>"/>
        <link rel="stylesheet" type="text/css" href="//<?=f__r("css/style.css"); ?>"/>
    </head>
    <body class="<?=isset($_COOKIE["dark"]) ? ($_COOKIE["dark"] ? "dark" : "") : ""?>">
        page not found :((
    </body>
</html>
