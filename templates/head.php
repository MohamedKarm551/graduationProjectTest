<?php
ob_start();
/**
 * @var $dir;
 * @var $lang;
 */
?>
<!doctype html>
<html dir="<?=$dir;?>" lang="<?=$lang;?>">
<head>
    <meta charset="utf-8">
    <title><?='Road Map';?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="x-ua-compatible" content="IE=edge">

    <link rel="shortcut icon" href="//<?=f__r("media/images/logo.jpg");?>"/>
    <link rel="canonical" href="<?=$_SERVER["HTTP_HOST"];?>"/>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="//<?=f__r("css/style" . (($dir === "rtl") ? ".rtl" : "") . ".css"); ?>"/>
</head>
    <body>
        <div class="app--wrapper">
            <div class="nav--wrapper">
                <?php require_once __ROOT__."/widgets/nav.php"; ?>
            </div>

