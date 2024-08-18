<?php
/**
 * Template Name: Page Clinic Address
 *
 * @since 1.0.0
 * @author Kenji
 */

get_header();
$url = get_template_directory_uri();
?>
<div class="page-clinic-address">
    <div class="clinic-nearby-u">
        <div class="container">
            <div class="clinic-nearby-u__header d-flex justify-content-between align-items-center">
                <div class="clinic-nearby-u__header_title">
                    <?php
                    if (pll_current_language('slug') == 'vi') {
                        echo 'Phòng Khám Gần Bạn';
                    }
                    if (pll_current_language('slug') == 'en') {
                        echo 'Clinic NearBy You';
                    }
                    if (pll_current_language('slug') == 'zh') {
                        echo '诊所科';
                    }
                    ?>
                </div>
            </div>
            <div class="clinic-nearby-u__select d-flex justify-content-between align-items-center">
                <span class="clinic-nearby-u__select-city">
                    <select id="city">
                        <option value="">Chọn 1 thành phố</option>
                        <option value="hanoi">Hà Nội</option>
                        <option value="vinh">Vinh</option>
                        <option value="hcm">Tp Hồ Chí Minh</option>
                    </select>
                </span>
            </div>
            <div class="row">
                <?php if (get_field('clinic_nearby_you', pll_current_language('slug'))): ?>
                    <?php while (the_repeater_field('clinic_nearby_you', pll_current_language('slug'))): ?>
                        <div class="clinic-nearby-u-slider col-12 col-sm-12 col-lg-6 col-xl-4">
                            <div class="clinic-nearby-u-slider__item">
                                <a href="#map_clinic" data-map="<?php echo get_sub_field('map_embed') ?>"
                                    class="clinic-nearby-u-slider__item_img">
                                    <figure>
                                        <img src="<?php echo get_sub_field('image') ?>"
                                            alt="<?php echo get_sub_field('name') ?>" />
                                    </figure>
                                </a>
                                <a href="#map_clinic" data-map="<?php echo get_sub_field('map_embed') ?>"
                                    class="clinic-nearby-u-slider__item_content">
                                    <div class="clinic-nearby-u-slider__item_title">
                                        <?php echo get_sub_field('name') ?>
                                    </div>
                                    <div class="clinic-nearby-u-slider__item_subtitle">
                                        <div class="clinic-nearby-u-slider__item_info d-flex align-items-start">
                                            <img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/os/icon-marked.svg"
                                                alt="icon-marked">
                                            <span><?php echo get_sub_field('address') ?></span>
                                        </div>
                                        <div class="clinic-nearby-u-slider__item_info d-flex align-items-start">
                                            <img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/os/icon-time.svg"
                                                alt="icon-marked">
                                            <span>
                                                <?php echo get_sub_field('on_time') ?>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class="clinic-nearby-u-slider__item_action d-flex justify-content-start">
                                    <a href="tel:<?php echo get_sub_field('number_phone') ?>"
                                        class="clinic-nearby-u-slider__item_action-item clinic-nearby-u-slider__item_action-call">
                                        <?php
                                        if (pll_current_language('slug') == 'vi') {
                                            echo 'Gọi điện';
                                        }
                                        if (pll_current_language('slug') == 'en') {
                                            echo 'Call now';
                                        }
                                        if (pll_current_language('slug') == 'zh') {
                                            echo '立即致电';
                                        }
                                        ?>
                                    </a>
                                    <a href="javascript:;"
                                        class="clinic-nearby-u-slider__item_action-item clinic-nearby-u-slider__item_action-book book-calendar">
                                        <?php
                                        if (pll_current_language('slug') == 'vi') {
                                            echo 'Đặt lịch';
                                        }
                                        if (pll_current_language('slug') == 'en') {
                                            echo 'Book now';
                                        }
                                        if (pll_current_language('slug') == 'zh') {
                                            echo '立即预订';
                                        }
                                        ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="page-clinic-address__map" id="map_clinic">
        <div class="container">
            <div class="row">
                <div class="col-12 pl-0">
                    <iframe id="map_frame"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3724.414269783198!2d105.7947488!3d21.0161038!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac9787d4def3%3A0x65205b8781585239!2zQ2h1bmcgY8awIFnDqm4gSMOyYQ!5e0!3m2!1svi!2s!4v1666067932401!5m2!1svi!2s"
                        width="600" height="677" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    <?php require get_template_directory() . '/template-parts/os-partner-logo-2.php'; ?>
    <?php require get_template_directory() . '/template-parts/content-us-now.php'; ?>
</div>
<?php get_footer(); ?>


<style>
    #pagetitle {
        display: none;
    }
    .clinic-nearby-u {
        padding-top: 64px;
        padding-bottom: 72px
    }

    .clinic-nearby-u-slider {
        margin-top: 72px;
    }

    .clinic-nearby-u-slider .clinic-nearby-u-slider__item {
        margin-left: 0px;
        margin-right: 0px;
    }

    @media screen and (min-width: 991px) and (max-width: 1199px) {
        .clinic-nearby-u {
            padding-top: 48px;
            padding-bottom: 48px
        }

        .clinic-nearby-u-slider {
            margin-top: 54px;
        }

        .clinic-nearby-u-slider .clinic-nearby-u-slider__item {
            margin-left: 0px;
            margin-right: 0px;
            padding-left: 5px;
            padding-right: 5px;
        }
    }

    @media screen and (max-width: 991px) {
        .clinic-nearby-u {
            padding-top: 24px;
            padding-bottom: 24px
        }

        .clinic-nearby-u-slider {
            margin-top: 40px;
        }

        .clinic-nearby-u-slider .clinic-nearby-u-slider__item .clinic-nearby-u-slider__item_content .clinic-nearby-u-slider__item_title {
            height: auto;
            max-height: 60px;
        }
    }

    @media screen and (max-width: 768px) {
        /* .clinic-nearby-u-slider .clinic-nearby-u-slider__item .clinic-nearby-u-slider__item_img img {
            width: 100%;
        } */
    }
</style>