<?php defined('__secret__Constant__') or die('not found!'); ?>



<!-- Start Software Section -->
<div class="menu soft" id="menu">
    <div class="container">
        <?php
        $tracks = get__track();
        foreach ($tracks as $track) { ?>
            <h1 class="heading"><?=$track["name"];?></h1>
            <p class="head-text"><?=$track["brief"];?></p>
        <?php } ?>
        <div class="box-container">
            <?php
            foreach ($tracks as $track) {
                $where = "track_id = '".$track["track_id"]."'";
                $paths = get__path($where);
                foreach ($paths as $path) { ?>
                    <div class="box">
                        <img src="//<?= f__r("media/images/".$path["img_path"]); ?>" alt="" />
                        <h3><?=$path["title"]?></h3>
                        <span class="card_btn">
                            <a href="/path"><?= l_VIEW_MORE; ?></a>
                        </span>
                    </div>
                <?php } } ?>
        </div>
    </div>
</div>
<!-- End Software Section -->

<!-- Start Hardware Section  -->
<div class="menu" id="menu">
    <div class="container">
        <h1 class="heading">
            <!-- Hard<span>ware</span> -->
            <?= l_hardware_headline; ?>
        </h1>
        <p class="head-text">
        <?= l_hardware_definition; ?>
        </p>
        <div class="box-container">
            
            <div class="box">
                <img src="//<?= f__r("media/images/Embedded.jpg"); ?>" alt="" />
                <h3><?= l_embedded_system; ?></h3>

                <!-- <a href="#" class="bttn">view more &rarr;</a> -->
                <span class="card_btn"><a href="/path"><?= l_VIEW_MORE; ?></a></span>
            </div>
            <div class="box">
                <img src="//<?= f__r("media/images/Electronics.jpg"); ?>" alt="" />
                <h3><?= l_Electronics; ?></h3>

                <!-- <a href="#" class="bttn">view more &rarr;</a> -->
                <span class="card_btn"><a href="/path"><?= l_VIEW_MORE; ?></a></span>
            </div>
            
        </div>
    </div>
</div>
<!-- End Hardware Section -->

<!-- Start Network Section  -->
<div class="menu" id="menu">
    <div class="container">
        <h1 class="heading">
            <?= l_Network_headline; ?>
        </h1>
        <p class="head-text">
        <?= l_Network_definition; ?>
        </p>
        <div class="box-container">
        <div class="box">
                <img src="//<?= f__r("media/images/network.jpg"); ?>" alt="" />
                <h3><?= l_Network_paths; ?></h3>

                <!-- <a href="#" class="bttn">view more &rarr;</a> -->
                <span class="card_btn"><a href="/path"><?= l_VIEW_MORE; ?></a></span>
            </div>
        </div>
    </div>
</div>
<!-- End Network Section -->

<!-- Start Control Section  -->
<div class="menu" id="menu">
    <div class="container">
        <h1 class="heading">
            <?= l_Control_headline; ?>
        </h1>
        <p class="head-text">
        <?= l_Control_definition; ?>
        </p>
        <div class="box-container">
        <div class="box">
                <img src="//<?= f__r("media/images/control.jpg"); ?>" alt="" />
                <h3><?= l_Control_Systems; ?></h3>

                <!-- <a href="#" class="bttn">view more &rarr;</a> -->
                <span class="card_btn"><a href="/path"><?= l_VIEW_MORE; ?></a></span>
            </div>
        </div>
    </div>
</div>
<!-- End Control Section -->