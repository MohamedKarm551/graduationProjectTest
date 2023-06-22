<?php defined('__secret__Constant__') or die('not found!'); ?>



<!-- Start Software Section -->
<div class="menu soft" id="menu">
    <div class="container">
        <?php
        $tracks = get__track();
        foreach ($tracks as $track) { ?>
            <h1 class="heading"><?=$track["name"];?></h1>
            <p class="head-text"><?=$track["brief"];?></p>
            <div class="box-container">
                <?php
                    $where = "track_id = '".$track["track_id"]."'";
                    $paths = get__path($where);
                    foreach ($paths as $path) { ?>
                        <div class="box">
                            <img src="//<?= f__r("media/images/".$path["img_path"]); ?>" alt="" />
                            <h3><?=$path["title"]?></h3>
                            <span class="card_btn">
                            <a href="/path/<?=$path['path_id'];?>"><?= l_VIEW_MORE; ?></a>
                        </span>
                        </div>
                    <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>
<!-- End Software Section -->
