<?php
// $post_id = wp_insert_post(  wp_slash( [
// 	'post_status'   => 'publish',
// 	'post_type'     => 'service',
// 	'post_author'   => 1,
// 	'ping_status'   => 'closed',
// 	'post_parent'   => 0,
// 	'menu_order'    => 0,
//     'post_date'     => wp_date('Y-m-d H:i:s'),
//     'comment_status'=> 'closed',
//     'post_name'     => 'asdasdadad',
//     'post_title'    => 'ad_title', 
// 	'post_excerpt'  => 'asdasdadad',
//     'post_content'  => 'asdasdadadasdasdadadasdasdadadasdasdadad',
// 	'meta_input'    => [ 'meta_key'=>'meta_value' ],
// ] ) );
?>



<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
    <main>
        <section class="section-services">
            <div class="section-inner">
                <div class="title">
                    <h1 class="bg-title">services</h1>
                    <h1 class="main-title">Awesome services</h1>
                </div>
                <div class="services">
                <?php
                    $services = carbon_get_post_meta(get_the_ID(), 'services');
                    $services_ids = wp_list_pluck($services, 'id');
                    $services_query = new WP_Query( [
                        'post_type' => 'service',
                        'post__in' => $services_ids
                    ] );
                ?>
                <?php if ( $services_query->have_posts() ) : ?>
                    <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                    <?php
                        $service_id = get_the_ID();
                        $service_img_url = get_the_post_thumbnail_url($service_id, 'full');
                    ?>

                    <div class="service">
                        <div class="wrapper">
                            <?php if($service_img_url): ?>
                            <img src="<?=$service_img_url?>" alt="">
                            <?php endif ?>
                            <h2 class="service__title">
                                <?= get_the_title() ?>
                            </h2>
                            <h3 class="service__desc">
                                <?= get_the_excerpt() ?>
                            </h3>
                        </div>
                        <a href="<?=get_permalink($service_id)?>" class="service__btn-more">read more<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>

                    
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
            <div class="video pause" style='background-image: url(<?= wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'video_background'), 'full') ?>)'>
                <div class="content">
                    <h1 class="title">One of the best international service provider</h1>
                    <button class="btn"><i class="fa fa-play" aria-hidden="true"></i></button>
                </div>                
            </div>
        </section>
        <section class="section-logistics">
            <div class="section-inner">
                <div class="features">
                <?php
                $features = carbon_get_post_meta(get_the_ID(), 'features');
                $features_ids = wp_list_pluck($features, 'id');
                $features_query = new WP_Query( [
                    'post_type' => 'feature',
                    'post__in' => $features_ids
                ] );
                ?>
                <?php if ( $features_query->have_posts() ) : ?>
                    <?php while ( $features_query->have_posts() ) : $features_query->the_post(); ?>
                    <?php
                        $feature_id = get_the_ID(); 
                        $feature_img_url = get_the_post_thumbnail_url($feature_id, 'full');
                    ?>
                    <div class="feature">
                        <?php if($feature_img_url): ?>
                        <img src="<?=$feature_img_url?>" alt="">
                        <?php endif ?>
                        <div class="feature__wrapper">
                            <h1 class="feature__wrapper__title"><?= the_title() ?></h1>
                            <ul class="feature__wrapper__features">
                                <?php foreach(carbon_get_post_meta($feature_id, 'feature_attr') as $attr): ?>
                                <li><i class="fa fa-sort-desc" aria-hidden="true"></i><?=$attr['info']?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                    
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
                    <div class='filter-area__img' style='background-image: url(<?=wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'logistics_image'), 'full')?>)'>
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