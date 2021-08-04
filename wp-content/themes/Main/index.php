<?php get_header(); ?>
    <main>
        <section class="section-services">
            <div class="section-inner">
                <div class="title">
                    <h1 class="bg-title">services</h1>
                    <h1 class="main_title">Awesome services</h1>
                </div>
                <div class="services">
                    <div class="service">
                        <img src="" alt="">
                        <h2 class="service__title">Express services</h2>
                        <h3 class="service__desc">
                            When an unknown printer took a galley of type and scrambled it to make a type specimen.
                        </h3>
                        <a href="" class="service__btn-more">read more</a>
                    </div>
                    <div class="worldwide">
                        <h2 class="worldwide__title">dhi worldwide</h2>
                        <h3 class="worldwide__desc">
                            When an unknown prot printer type and scra
                        </h3>
                        <select class="worldwide__location">
                            <option value="" selected hidden>Location</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-video">
            <div class="video">
                <h1 class="title">One of the best international service provider</h1>
            </div>
        </section>
        <section class="section-logistics">
            <div class="section-inner">
                <div class="features">
                    <div class="feature">
                        <img src="<?= get_template_directory_uri() ?>/Images/feature_img.png" alt="">
                        <h1 class="feature__title">Aerospace Provider</h1>
                        <ul class="feature__features">
                            <li>When an unknown printer took.</li>
                            <li>Make a type specimen book.</li>
                            <li>It has survived.</li>
                            <li>Airlines unknown specimen.</li>
                        </ul>
                    </div>
                </div>
                <div class="filter-area">
                    <div class="filter">
                        <div class="filter__subject">
                            <button>express</button>
                            <button>logistics</button>
                        </div>
                        <form action="" class="filter__form">
                            <label for="filter-snipmnet">
                                <select id='filter-snipmnet' class="filter__form--snipment">
                                    <option selected hidden>Track your shipment</option>
                                </select>
                            </label>
                            <label for="filter-login">
                                <select id='filter-login' class="filter__form--login">
                                    <option selected hidden>New Login</option>
                                </select>
                            </label>
                            <label for="filter-dhl">
                                <select id='filter-dhl' class="filter__form--dhl">
                                    <option selected hidden>find dhl point</option>
                                </select>
                            </label>
                            <label for="filter-service">
                                <div id='filter-service' class="filter__form--service">
                                    <div class='wrapper'>
                                        <h1 class="title">International Services to Another Country</h1>
                                        <ul>
                                            <li>Emergancy</li>
                                            <li>Time critical</li>
                                            <li>less urgent</li>
                                        </ul>
                                    </div>
                                </div>
                            </label>
                        </form>
                    </div>
                    <div class='filter-area__img'>
                        <img src="<?= get_template_directory_uri() ?>/Images/logo.png" alt="">
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
                <div class="partner">
                    <img src="<?= get_template_directory_uri() ?>/Images/partner_img.png" alt="">
                </div>
            </div>
        </section>
    </main>
<?php get_footer() ?>