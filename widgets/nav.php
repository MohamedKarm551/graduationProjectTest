<?php
defined('__secret__Constant__') or die('not found!');
/**
 * @var $cat
 */
?>

<!-- <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="//<?= f__r("media/images/logo.jpg"); ?>" class="w-25 ms-5 rounded-circle" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link me-3 <?= !h__v($cat) ? "active" : ""; ?>" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-3 <?= $cat === "paths" ? "active" : ""; ?>" href="/paths">Paths</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-3 <?= $cat === "books" ? "active" : ""; ?>" href="#">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-3 <?= $cat === "other" ? "active" : ""; ?>" href="/quality">Quality</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-5 pe-5 <?= $cat === "contact" ? "active" : ""; ?>" href="/contact">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->
<header>
    <div class="container">
        <a href="#" class="logo">
            <img src="//<?= f__r("media/images/azharlogo.png"); ?>" alt="logo">
        </a>
        <nav>
            <!-- <i class="fas fa-bars toggle-menu"></i> -->
            <!-- <label for="bar"><i class="fas fa-bars toggle-menu"></i></label> -->
            <label for="bar">

                <!-- <i class="fa-solid fa-bars"></i></i> -->
                <a href="/"> <img src="https://img.icons8.com/external-royyan-wijaya-detailed-outline-royyan-wijaya/24/null/external-bars-interface-royyan-wijaya-detailed-outline-royyan-wijaya.png" />
                </a>
            </label>
            <input type="checkbox" name="check" id="bar">
            <ul>
                <li><a class="<?= !h__v($cat) ? "active" : ""; ?>" href="/">Home</a></li>
                <li><a class="<?= $cat === "courses" ? "active" : ""; ?>" href="/courses">Courses</a></li>
                <li><a class="<?= $cat === "paths" ? "active" : ""; ?>" href="/paths">Paths</a></li>
                <li><a class="<?= $cat === "videos" ? "active" : ""; ?>" href="/videos">Videos</a></li>

                <!-- <li><a class="<?= $cat === "quality" ? "active" : ""; ?>" href="/quality">quality</a></li> -->
                <li><a class="<?= $cat === "contact" ? "active" : ""; ?>" href="/contact">Contact</a></li>
                <li><a href="/test-your-self">test you self</a></li>
            </ul>

        </nav>
    </div>
</header>