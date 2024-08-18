<div class="list-doctors">
    <div class="container">
        <div class="text-center d-flex justify-content-center">
            <div class="list-doctors__head text-center">
                <p class="list-doctors__head_title">
                    Gặp gỡ
                </p>
                <p class="list-doctors__head_title-2">
                    Các chuyên gia của chúng tôi
                </p>
                <p class="list-doctors__head_subtitle">
                    Mọi người yêu thích sản phẩm của chúng tôi và 70% khách hàng của chúng tôi là khách hàng quay lại.
                    Chúng
                    tôi tin rằng cách duy nhất để kinh doanh lâu dài là giúp đỡ mọi người.
                </p>
            </div>
        </div>
        <div class="list-doctors__slider">
            <div class="sun-slider sun-slider--center"
                data-slick='{"slidesToShow": 2, "nextArrow": ".list-doctors__see-more_next", "prevArrow": "", "centerPadding": "20px", "dots": false, "autoplay": false, "infinite": true, "autoplaySpeed": 2000, "responsive": [{"breakpoint": 1200, "settings": {"centerMode": false, "slidesToShow": 1 } } ]}'>
                <?php
                $arg_team = array(
                    'post_type' => 'sha-teams',
                    'posts_per_page' => -1,
                );

                $query_teams = new WP_Query($arg_team);

                if ($query_teams->have_posts()) {
                    while ($query_teams->have_posts()):
                        $query_teams->the_post();
                        $team_id = get_the_ID();
                        ?>
                        <div>
                            <div class="list-doctors__slider_item row align-items-center justify-content-center">
                                <div class="list-doctors__slider_item-img col-12 col-lg-6">
                                    <a href="<?php the_permalink($team_id); ?>">
                                        <!-- <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($team_id), 'full'); ?> -->
                                        <?php
                                        if (has_post_thumbnail($team_id)):
                                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($team_id), 'full');
                                            $image_url = $image[0];
                                        else:
                                            $link = get_bloginfo('wpurl');
                                            $image_url = $link . '/wp-content/themes/m5/assets/images/os/icon-menu-item.svg';
                                        endif;
                                        ?>
                                        <img src="<?php echo $image_url; ?>" alt="<?php echo get_the_title($team_id); ?>" />
                                    </a>
                                </div>
                                <div class="list-doctors__slider_item-content col-12 col-lg-6">
                                    <a href="<?php echo get_permalink($team_id); ?>"
                                        title="<?php echo get_the_title($team_id); ?>">
                                        <div class="list-doctors__slider_item-content_title">
                                            <?php echo get_the_title($team_id); ?>
                                        </div>
                                    </a>
                                    <div class="list-doctors__slider_item-content_subtitle">
                                        <?php echo get_field('descriptions', $team_id); ?>
                                    </div>
                                    <div class="list-doctors__slider_item-content_language_title">
                                        <?php
                                        if (pll_current_language('slug') == 'vi') {
                                            echo 'Ngôn ngữ:';
                                        }
                                        if (pll_current_language('slug') == 'en') {
                                            echo 'Language:';
                                        }
                                        if (pll_current_language('slug') == 'zh') {
                                            echo '语言:';
                                        }
                                        ?>
                                    </div>
                                    <div class="list-doctors__slider_item-content_language">
                                        <div class="list-doctors__slider_item-content_language__item vietnamese">
                                            VietNamese
                                        </div>
                                        <div class="list-doctors__slider_item-content_language__item english">
                                            English
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                }
                ?>
            </div>
        </div>
        <a href="<?php bloginfo('wpurl'); ?>/doi-ngu-msi/"
            class="list-doctors__see-more text-center d-flex justify-content-center align-items-center">
            <div class="list-doctors__see-more_text">
                <?php
                if (pll_current_language('slug') == 'vi') {
                    echo 'Xem tất cả bác sĩ';
                }
                if (pll_current_language('slug') == 'en') {
                    echo 'See all our of doctors';
                }
                if (pll_current_language('slug') == 'zh') {
                    echo '查看我们所有的医生';
                }
                ?>
            </div>
            <img class="list-doctors__see-more_next"
                src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/os/arrow_circle_right.svg"
                alt="arrow_circle_right.svg">
        </a>
    </div>
</div>