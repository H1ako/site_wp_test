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
                    <i class="fa fa-users" aria-hidden="true"></i><span>contact center</span>
                </div>
                <div class="profile">
                    <span>Country Profile</span><i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        
        <nav>
            <div class="section-inner" id='menu'>
                <div class="logo-and-menu">
                    <img src="<?= wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo' ), 'full'); ?>" alt="" class="logo">
                    <div class="menu" id='menu-btn'><i class="fa fa-bars" aria-hidden="true"></i></div>
                </div>
                <!-- <ul>       
                    <li>express</li>
                    <li>Parcel & Ecommerce</li>
                    <li>Logistics</li>
                    <li>mail</li>
                    <li>press</li>
                    <li>about</li>
                </ul> -->
                <?php
                wp_nav_menu( [
                    'theme_location'  => 'menu_main_header',
                    'container'       => null,
                    'menu_class'      => null,
                ] );
                ?>
                <div class="search"><i class="fa fa-search" aria-hidden="true"></i></div>
            </div>
        </nav>
        <div class="main-part" style='background-image: url(<?= wp_get_attachment_image_url(carbon_get_theme_option( 'site_header_bg' ), 'full'); ?>)'>
            <div class="section-inner">
                <div class="about">
                    <h1 class="about__title">We Deliver<br>With Speed</h1>
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
