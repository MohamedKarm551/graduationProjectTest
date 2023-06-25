<?php
defined('__secret__Constant__') or die('not found!');
/**
 * @var $sub
 */
$where = "path_id = '".$sub."'";
$path = get__path($where)[0];
$topics= get__topic("path_id='".$sub."'");
?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1><?=defined($path["title"]) ? constant($path["title"]) : $path["title"];?></h1>
                <p class="hero-description"><?=$path["description"]?></p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="<?=$path["url"];?>" target="_blank" class="btn-get-started scrollto ">Watch Video</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img " data-aos="zoom-in" data-aos-delay="200">
                <img src="//<?= f__r("media/images/".$path["img_path"]); ?>" class="img-fluid animated web-img rounded-circle" alt="">
            </div>
        </div>
    </div>

</section>


<div class="roadmap-text" style="text-align:left;
direction:ltr" >
    <?=h__v($path["introduction"])?html_entity_decode(htmlspecialchars_decode($path["introduction"])):"<h2>set introduction to D.B</h2>";?>
    <?php
    if($topics) {
        foreach ($topics as $topic) {
        $courses = get__course("topic_id='".$topic["topic_id"]."'");
    ?>
        <section class="main-section">
            <div class="container">
                <h1 class="lang-title"><?=$topic["title"];?></h1>
                <div class="courses-section">
                    <?php foreach ($courses as $course) { ?>
                    <div class="courses-box">
                        <a href="<?=$course["url"]?>" target="_blank">
                            <h2><?=$course["name"]?></h2>
                        </a>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </section>
    <?php } } else {echo "<h2>set topic to D.B</h2>";} ?>

 

</div>