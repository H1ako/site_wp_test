<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WP</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="top-bar">
            <div class="section-inner">
                <div class="language">
                    <span>English</span><i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
                <div class="contact">
                    <i class="fa fa-users" aria-hidden="true"></i><span>Contact Center</span>
                </div>
                <div class="profile">
                    <span>Country Profile</span><i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <nav>
            <div class="section-inner">
                <img src="<?= get_template_directory_uri() ?>/Images/logo.png" alt="" class="logo">
                <ul class="navigation">       
                    <li>express</li>
                    <li>Parcel & Ecommerce</li>
                    <li>Logistics</li>
                    <li>mail</li>
                    <li>press</li>
                    <li>about</li>
                </ul>
                <div class="search"><i class="fa fa-search" aria-hidden="true"></i></div>
            </div>
        </nav>
        <div class="main-part">
            <div class="section-inner">
                <div class="about">
                    <h1 class="about__title">We Deliver With Speed</h1>
                    <p class="about__desc">
                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
                    </p>
                    <ul class="about__features">
                        <li>amazing</li>
                        <li>quick</li>
                        <li>24/7 support</li>
                    </ul>
                </div>
                <div class="btns">
                    <button class="btns__more">learn more</button>
                    <button class="btns__dhl">dhl worldwide</button>
                </div>
            </div>
        </div>
    </header>
