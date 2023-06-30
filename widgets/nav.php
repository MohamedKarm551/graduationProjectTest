<?php
defined('__secret__Constant__') or die('not found!');
/**
 * @var $cat
 * @var $sub
 */
?>
<header>
    <div class="container">
        <a href="/" class="logo">
            <img src="//<?= f__r("media/images/azharlogo.png"); ?>" alt="logo">
        </a>
        <nav>
            <label for="bar">
                <a > <img src="https://img.icons8.com/external-royyan-wijaya-detailed-outline-royyan-wijaya/24/null/external-bars-interface-royyan-wijaya-detailed-outline-royyan-wijaya.png" />
                </a>
            </label>
            <input type="checkbox" name="check" id="bar">
            <ul>
                <li><a class="<?= !h__v($cat) ? "active" : ""; ?>" href="/"><?=l_home;?></a></li>
                <li><a class="<?= $cat === "courses" ? "active" : ""; ?>" href="/courses"><?=l_courses;?></a></li>
                <li><a class="<?= $cat === "paths" ? "active" : ""; ?>" href="/paths"><?=l_paths;?></a></li>
                <li><a class="<?= $cat === "videos" ? "active" : ""; ?>" href="/videos"><?=l_videos;?></a></li>
                <li><a class="<?= $cat === "test-your-self" ? "active" : ""; ?>" href="/test-your-self"><?=l_test_yourself;?></a></li>
                <li><a class="<?= $cat === "contact" ? "active" : ""; ?>" href="/contact"><?=l_contact;?></a></li>
                <li>
                    <?php
                    $lang = $_COOKIE["lang"] ?? "en";
                    $location = $cat && $sub ? "/" . $cat . "/" . $sub : ($cat ? "/" . $cat : "/");
                    if($lang === "ar") { ?>
                    <a href="/?lang=en&location=<?=$location;?>"><?=l_english;?></a>
                    <?php } else { ?>
                    <a href="/?lang=ar&location=<?=$location;?>"><?=l_arabic;?></a>
                    <?php } ?>
                </li>
            </ul>
        </nav>
    </div>
</header>