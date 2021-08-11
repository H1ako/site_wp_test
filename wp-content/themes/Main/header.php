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
    <?php if(carbon_get_post_meta(get_the_ID(), 'header-is-toggle')): ?>
    <header>
        <?php if(carbon_get_post_meta(get_the_ID(), 'header-top-bar')): ?>
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
        <?php endif ?>

        <?php if(carbon_get_post_meta(get_the_ID(), 'header-nav')): ?>
        <nav>
            <div class="section-inner" id='menu'>
                <div class="logo-and-menu">
                    <?php if(is_front_page()): ?>
                    <img src="<?= wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo' ), 'full'); ?>" alt="" class="logo">
                    <?php else: ?>
                    <a href='<?=get_home_url() ?>'>
                        <img src="<?= wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo' ), 'full'); ?>" alt="" class="logo">
                    </a>
                        <?php endif ?>
                    <div class="menu" id='menu-btn'><i class="fa fa-bars" aria-hidden="true"></i></div>
                </div>
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
        <?php endif ?>

        <?php if(carbon_get_post_meta(get_the_ID(), 'header-main')): ?>
        <div class="main-part" style='background-image: url(<?= wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'top_background_image'), 'full'); ?>)'>
            <div class="section-inner">
                <div class="about">
                    <h1 class="about__title"><?=carbon_get_post_meta(get_the_ID(), 'top_title')?></h1>
                    <p class="about__desc">
                        <?=carbon_get_post_meta(get_the_ID(), 'top_subtitle')?>
                    </p>
                    <ul class="about__features">
                        <li>amazing</li>
                        <li>quick</li>
                        <li>24/7 support</li>
                    </ul>
                </div>
                <div class="btns">
                    <button class="btns__more"><?=carbon_get_post_meta(get_the_ID(), 'top_first_btn_text')?></button>
                    <button class="btns__dhl"><?=carbon_get_post_meta(get_the_ID(), 'top_second_btn_text')?></button>
                </div>
            </div>
        </div>
        <?php endif ?>
    </header>
    <?php endif ?>
