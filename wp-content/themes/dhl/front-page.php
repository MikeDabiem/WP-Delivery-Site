<?php get_header(); ?>

<section class="slider" style="background: url(<?php the_field('banner_background_image') ?>) 50% 50%/cover no-repeat;">
        <div class="wrapper">
            <div class="slider__inner">
                <h1><?php the_field('main_title') ?></h1>
                <p class="slider__inner-text"><?php the_field('main_subtitle') ?></p>
                <p class="slider__inner-wtext"><?php the_field('pluses_1') ?><span>.</span><?php the_field('pluses_2') ?><span>.</span><?php the_field('pluses_3') ?></p>
                <div class="slider__inner-btns">
                    <a href="<?php the_field('banner_button_link_1') ?>" class="btn btn-1"><?php the_field('banner_button_title_1') ?></a>
                    <a href="<?php the_field('banner_button_link_2') ?>" class="btn btn-2"><?php the_field('banner_button_title_2') ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="services-section">
        <div class="wrapper">
            <h2 class="awesome">Awesome Services</h2>
            <div class="services">
                <div class="services-item services-item-1">
                    <div class="services-thumb"><img src="<?php the_field('card1_image') ?>" alt="srv1"></div>
                    <div class="services-name">
                        <h3><?php the_field('card1_title') ?></h3>
                    </div>
                    <div class="services-body">
                        <p><?php the_field('card1_text') ?></p>
                    </div>
                    <div>
                        <a href="<?php the_field('card1_link') ?>" class="services-link">Read More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="services-item services-item-2">
                    <div class="services-thumb"><img src="<?php the_field('card2_image') ?>" alt="srv1"></div>
                    <div class="services-name">
                        <h3><?php the_field('card2_title') ?></h3>
                    </div>
                    <div class="services-body">
                        <p><?php the_field('card2_text') ?></p>
                    </div>
                    <div>
                        <a href="<?php the_field('card2_link') ?>" class="services-link">Read More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="services-item services-item-3">
                    <div class="services-thumb"><img src="<?php the_field('card3_image') ?>" alt="srv1"></div>
                    <div class="services-name">
                        <h3><?php the_field('card3_title') ?></h3>
                    </div>
                    <div class="services-body">
                        <p><?php the_field('card3_text') ?></p>
                    </div>
                    <div>
                        <a href="<?php the_field('card3_link') ?>" class="services-link">Read More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="services-item services-item-4">
                    <div class="services-item-4-name">
                        <h3>DHl Worldwide</h3>
                    </div>
                    <div class="services-item-4-body">
                        <p>When an unknown prot printer type and scra</p>
                    </div>
                    <form action="none" method="get">
                        <div class="services-item-4-select">
                            <div class="select services-item-4-select__inner">
                                <div class="selected">Location</div>
                                <div class="arrow services-item-4-select__arrow"></div>
                            </div>
                            <div class="select__list">
                                <div class="select__item">Location 1</div>
                                <div class="select__item">Location 2</div>
                                <div class="select__item">Location 3</div>
                            </div>
                        </div>
                        <div>
                            <button class="btn services-btn">explore</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="about__bg-video">
            <iframe width="100%" height="100%" src="<?php the_field('video_link') ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
        </div>
        <div class="about__title">
            <h2><?php the_field('about_title') ?></h2>
        </div>
        <div class="wrapper">
            <div class="about__items">
                <div class="about__item">
                    <div class="about__item-img">
                        <img src="<?php the_field('about_card1_image') ?>" alt="">
                    </div>
                    <div class="about__item-text">
                        <h3 class="about__item-title"><?php the_field('about_card1_title') ?></h3>
                        <ul class="about__item-list">
                            <li><?php the_field('about_card1_text1') ?></li>
                            <li><?php the_field('about_card1_text2') ?></li>
                            <li><?php the_field('about_card1_text3') ?></li>
                            <li><?php the_field('about_card1_text4') ?></li>
                        </ul>
                    </div>
                </div>
                <div class="about__item">
                    <div class="about__item-img">
                        <img src="<?php the_field('about_card2_image') ?>" alt="">
                    </div>
                    <div class="about__item-text">
                        <h3 class="about__item-title"><?php the_field('about_card2_title') ?></h3>
                        <ul class="about__item-list">
                            <li><?php the_field('about_card1_text1') ?></li>
                            <li><?php the_field('about_card1_text2') ?></li>
                            <li><?php the_field('about_card1_text3') ?></li>
                            <li><?php the_field('about_card1_text4') ?></li>
                        </ul>
                    </div>
                </div>
                <div class="about__item">
                    <div class="about__item-img">
                        <img src="<?php the_field('about_card3_image') ?>" alt="">
                    </div>
                    <div class="about__item-text">
                        <h3 class="about__item-title"><?php the_field('about_card3_title') ?></h3>
                        <ul class="about__item-list">
                            <li><?php the_field('about_card1_text1') ?></li>
                            <li><?php the_field('about_card1_text2') ?></li>
                            <li><?php the_field('about_card1_text3') ?></li>
                            <li><?php the_field('about_card1_text4') ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="logistics-section">
        <div class="wrapper">
            <div class="logistics">
                <div class="logistics__select">
                    <div class="logistics__select-tabs">
                        <button class="logistics__btn logistics__btn-active">Express</button>
                        <button class="logistics__btn">Logistics</button>
                    </div>
                    <div class="logistics__select-items logistics__show-tab">
                        <div class="logistics__select-item">
                            <div class="select">
                                <div class="selected">Track your shipment</div>
                                <div class="arrow"></div>
                            </div>
                            <div class="select__list">
                                <div class="select__item">Track your shipment 1</div>
                                <div class="select__item">Track your shipment 2</div>
                                <div class="select__item">Track your shipment 3</div>
                            </div>
                        </div>
                        <div class="logistics__select-item">
                            <div class="select">
                                <div class="selected">New login</div>
                                <div class="arrow"></div>
                            </div>
                            <div class="select__list">
                                <div class="select__item">New login 1</div>
                                <div class="select__item">New login 2</div>
                                <div class="select__item">New login 3</div>
                            </div>
                        </div>
                        <div class="logistics__select-item">
                            <div class="select">
                                <div class="selected">Find Dhl point</div>
                                <div class="arrow"></div>
                            </div>
                            <div class="select__list">
                                <div class="select__item">Find Dhl point 1</div>
                                <div class="select__item">Find Dhl point 2</div>
                                <div class="select__item">Find Dhl point 3</div>
                            </div>
                        </div>
                        <div class="logistics__select-item">
                            <div class="select">
                                <div class="selected">find a service</div>
                                <div class="arrow"></div>
                            </div>
                            <div class="select__list">
                                <h3 class="select__list-title">International Services to Another Country</h3>
                                <div class="select__item">Emergency</div>
                                <div class="select__item">Time Critical</div>
                                <div class="select__item">Less Urgent</div>
                            </div>
                        </div>
                    </div>
                    <div class="logistics__select-items">
                        <div class="logistics__select-item">
                            <div class="select">
                                <div class="selected">Track your shipment</div>
                                <div class="arrow"></div>
                            </div>
                            <div class="select__list">
                                <div class="select__item">Emergency</div>
                                <div class="select__item">Time Critical</div>
                                <div class="select__item">Less Urgent</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logistics__img">
                    <div class="logistics__img-border"></div>
                    <img src="<?php the_field('logistics_image') ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="features-section">
        <div class="wrapper">
            <div class="features">
                <div class="features__text">
                    <h2 class="features__text-title"><?php the_field('features_title') ?></h2>
                    <p class="features__text-text"><?php the_field('features_text') ?></p>
                </div>
                <a href="<?php the_field('features_button_link') ?>" class="btn features__button"><?php the_field('features_button_title') ?></a>
            </div>
        </div>
    </section>
    <section class="clients-section">
        <div class="wrapper">
            <div class="clients">
                <div class="clients__item">
                    <img src="<?php the_field('client1_image') ?>" alt="themeforest" class="clients__item-img">
                </div>
                <div class="clients__item">
                    <img src="<?php the_field('client2_image') ?>" alt="photodune" class="clients__item-img">
                </div>
                <div class="clients__item">
                    <img src="<?php the_field('client3_image') ?>" alt="graphicriver" class="clients__item-img">
                </div>
                <div class="clients__item">
                    <img src="<?php the_field('client4_image') ?>" alt="codecanyon" class="clients__item-img">
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
