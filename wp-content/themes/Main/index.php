<?php

use function PHPSTORM_META\type;

get_header(); ?>
    <main>
        <section class="section-services">
            <div class="section-inner">
                <div class="title">
                    <h1 class="bg-title">services</h1>
                    <h1 class="main-title">Awesome services</h1>
                </div>
                <div class="services">
                    <div class="service">
                        <div class="wrapper">
                            <img src="<?=get_template_directory_uri()?>/Images/service_img.png" alt="">
                            <h2 class="service__title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, fugit?</h2>
                            <h3 class="service__desc">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat omnis vero asperiores! Error molestiae eos, dolorem corporis perspiciatis at facere! Sapiente eum, quam ipsum dolor minima commodi fugiat reprehenderit laborum molestiae illum cum porro soluta magni id ea harum labore expedita dolores nobis, corrupti ad quaerat qui deleniti praesentium! Perspiciatis.
                            </h3>
                        </div>
                        <a href="" class="service__btn-more">read more<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                    </div>
                    <div class="service">
                        <div class="wrapper">
                            <img src="<?=get_template_directory_uri()?>/Images/service_img.png" alt="">
                            <h2 class="service__title">Express services</h2>
                            <h3 class="service__desc">
                                When an unknown printer took a galley of type and scrambled it to make a type specimen.
                            </h3>
                        </div>
                        <a href="" class="service__btn-more">read more<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                    </div>
                    <div class="service">
                        <div class="wrapper">
                            <img src="<?=get_template_directory_uri()?>/Images/service_img.png" alt="">
                            <h2 class="service__title">Express services</h2>
                            <h3 class="service__desc">
                                When an unknown printer took a galley of type and scrambled it to make a type specimen.
                            </h3>
                        </div>
                        <a href="" class="service__btn-more">read more<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                    </div>
                    <div class="worldwide">
                        <div class="section-inner">
                            <h2 class="worldwide__title">DHI worldwide</h2>
                            <h3 class="worldwide__desc">
                                When an unknown prot printer type and scra
                            </h3>
                            <div class="worldwide__location" id='select_location'>
                                <div class="loc_main" id="loc_main">
                                    <div class="loc_main__text" id="loc_text">Location</div>
                                    <div class="loc_main__items">
                                        <div class="loc_item">Moscow</div>
                                        <div class="loc_item">Tokyo</div>
                                        <div class="loc_item">London</div>
                                    </div>
                                </div>
                                <label for="loc_main"><i class="fa fa-sort-desc" aria-hidden="true"></i></label>
                            </div>
                            <a href="" class="worldwide__explore">explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-video">
            <div class="video pause" style='background-image: url(<?= wp_get_attachment_image_url(carbon_get_theme_option('site_video_bg'), 'full') ?>)'>
                <div class="content">
                    <h1 class="title">One of the best international service provider</h1>
                    <button class="btn"><i class="fa fa-play" aria-hidden="true"></i></button>
                </div>                
            </div>
        </section>
        <section class="section-logistics">
            <div class="section-inner">
                <div class="features">
                    <div class="feature">
                        <img src="<?= get_template_directory_uri() ?>/Images/feature_img.png" alt="">
                        <div class="feature__wrapper">
                            <h1 class="feature__wrapper__title">Aerospace Provider</h1>
                            <ul class="feature__wrapper__features">
                                <li><i class="fa fa-sort-desc" aria-hidden="true"></i>When an unknown printer took.</li>
                                <li><i class="fa fa-sort-desc" aria-hidden="true"></i>Make a type specimen book.</li>
                                <li><i class="fa fa-sort-desc" aria-hidden="true"></i>It has survived.</li>
                                <li><i class="fa fa-sort-desc" aria-hidden="true"></i>Airlines unknown specimen.</li>
                            </ul>
                        </div>
                    </div>
                                        
                    <div class="feature">
                        <img src="<?= get_template_directory_uri() ?>/Images/feature_img.png" alt="">
                        <div class="feature__wrapper">
                            <h1 class="feature__wrapper__title">Aerospace Provider</h1>
                            <ul class="feature__wrapper__features">
                                <li><i class="fa fa-sort-desc" aria-hidden="true"></i>When an unknown printer took.</li>
                                <li><i class="fa fa-sort-desc" aria-hidden="true"></i>Make a type specimen book.</li>
                                <li><i class="fa fa-sort-desc" aria-hidden="true"></i>It has survived.</li>
                                <li><i class="fa fa-sort-desc" aria-hidden="true"></i>Airlines unknown specimen.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="feature">
                        <img src="<?= get_template_directory_uri() ?>/Images/feature_img.png" alt="">
                        <div class="feature__wrapper">
                            <h1 class="feature__wrapper__title">Aerospace Provider</h1>
                            <ul class="feature__wrapper__features">
                                <li><i class="fa fa-sort-desc" aria-hidden="true"></i>When an unknown printer took.</li>
                                <li><i class="fa fa-sort-desc" aria-hidden="true"></i>Make a type specimen book.</li>
                                <li><i class="fa fa-sort-desc" aria-hidden="true"></i>It has survived.</li>
                                <li><i class="fa fa-sort-desc" aria-hidden="true"></i>Airlines unknown specimen.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="filter-area">
                    <div class="filter">
                        <div class="filter__subject">
                            <button class="active">express</button>
                            <button>logistics</button>
                        </div>
                        <div class="filter__form">
                            <div class="filter__form--part">
                                <div class="filter__form--part_main" id="filter__form--part-1">
                                    <div class="filter__form--part_main__text" id="filter__form--part-1--text">track your shipment</div>
                                    <div class="filter__form--part_main__content">
                                        <h1>International Services to Another Country</h1>
                                        <ul>
                                        <li><i class="fa fa-sort-desc" aria-hidden="true"></i>Emergancy</li>
                                            <li><i class="fa fa-sort-desc" aria-hidden="true"></i>time critical</li>
                                            <li><i class="fa fa-sort-desc" aria-hidden="true"></i>less urgent</li>
                                        </ul>
                                    </div>
                                </div>
                                <label for="filter__form--part-1"><i class="fa fa-sort-desc" aria-hidden="true"></i></label>
                            </div>

                            <div class="filter__form--part">
                                <div class="filter__form--part_main" id="filter__form--part-2">
                                    <div class="filter__form--part_main__text" id="filter__form--part-2--text">new login</div>
                                    <div class="filter__form--part_main__content">
                                        <h1>International Services to Another Country</h1>
                                        <ul>
                                        <li><i class="fa fa-sort-desc" aria-hidden="true"></i>Emergancy</li>
                                            <li><i class="fa fa-sort-desc" aria-hidden="true"></i>time critical</li>
                                            <li><i class="fa fa-sort-desc" aria-hidden="true"></i>less urgent</li>
                                        </ul>
                                    </div>
                                </div>
                                <label for="filter__form--part-2"><i class="fa fa-sort-desc" aria-hidden="true"></i></label>
                            </div>

                            <div class="filter__form--part">
                                <div class="filter__form--part_main" id="filter__form--part-3">
                                    <div class="filter__form--part_main__text" id="filter__form--part-3--text">Find DHL point</div>
                                    <div class="filter__form--part_main__content">
                                        <h1>International Services to Another Country</h1>
                                        <ul>
                                        <li><i class="fa fa-sort-desc" aria-hidden="true"></i>Emergancy</li>
                                            <li><i class="fa fa-sort-desc" aria-hidden="true"></i>time critical</li>
                                            <li><i class="fa fa-sort-desc" aria-hidden="true"></i>less urgent</li>
                                        </ul>
                                    </div>
                                </div>
                                <label for="filter__form--part-3"><i class="fa fa-sort-desc" aria-hidden="true"></i></label>
                            </div>

                            <div class="filter__form--part">
                                <div class="filter__form--part_main" id="filter__form--part-4">
                                    <div class="filter__form--part_main__text" id="filter__form--part-4--text">Find a service</div>
                                    <div class="filter__form--part_main__content">
                                        <h1>International Services to Another Country</h1>
                                        <ul>
                                            <li><i class="fa fa-sort-desc" aria-hidden="true"></i>Emergancy</li>
                                            <li><i class="fa fa-sort-desc" aria-hidden="true"></i>time critical</li>
                                            <li><i class="fa fa-sort-desc" aria-hidden="true"></i>less urgent</li>
                                        </ul>
                                    </div>
                                </div>
                                <label for="filter__form--part-4"><i class="fa fa-sort-desc" aria-hidden="true"></i></label>
                            </div>
                        </div>
                    </div>
                    <div class='filter-area__img' style='background-image: url(<?=wp_get_attachment_image_url(carbon_get_theme_option('site_logistics_image'), 'full')?>)'>
                        <img src="<?= wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo' ), 'full'); ?>" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class='section-slogan'>
            <div class="section-inner">
                <div class="wrapper">
                    <h1 class="title">Excellence. Simply delivered.</h1>
                    <p class="desc">
                        International express deliveries; global freight forwarding by air, sea, road and rail; warehousing solutions from packaging, to repairs, to storage; mail deliveries worldwide; and other customized logistic services – with everything DHL does, we help connect people and improve their lives.
                    </p>
                </div>
                <a href="" class="more">learn more</a>
            </div>
        </section>
        <section class='section-partners'>
            <div class="section-inner">
            <?php $partners = carbon_get_theme_option('site_partners');
            if ($partners) foreach ($partners as $partner): ?>
                <div class="partner">
                    <img src="<?= wp_get_attachment_image_url($partner, 'full') ?>" alt="Partner">
                </div>
            <?php endforeach; ?>

                
            </div>
        </section>
    </main>
<?php get_footer() ?>