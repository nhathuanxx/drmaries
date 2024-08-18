<?php
/*
 * Template Name: Page Team
 */
get_header();
?>

<main class="main-content page-teams">

    <div class="page-doctor">
        <div class="container">
            <div class="doctor-title">
                <?php
                if (pll_current_language('slug') == 'vi') {
                    echo 'Gặp gỡ các bác sĩ của chúng tôi';
                }
                if (pll_current_language('slug') == 'en') {
                    echo 'Meet Our Professionals Doctors';
                }
                if (pll_current_language('slug') == 'zh') {
                    echo '认识我们的专业医生';
                }
                ?>
            </div>
            <div class="teams row">
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
                        <div class=" col-12 col-lg-6">
                            <div class="list-doctors__slider_item row align-items-center justify-content-between">
                                <div class="col-12 col-lg-6">
                                    <div class="list-doctors__slider_item-img">
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
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div ss="list-doctors__slider_item-content">
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
                        </div>
                        <?php
                    endwhile;

                    k2_kinhdo_posts_pagination($query_teams);
                }
                ?>
            </div>
        </div>
    </div>
</main>

<?php require get_template_directory() . '/template-parts/os-partner-logo.php'; ?>
<?php require get_template_directory() . '/template-parts/content-us-now.php'; ?>

<?php get_footer(); ?>

<style>
    #pagetitle {
        display: none;
    }
    .page-doctor {
        padding: 64px 0;
        background-color: #fff;
    }

    .doctor-title {
        font-family: "Space Grotesk", sans-serif;
        font-size: 56px;
        font-weight: 500;
        line-height: 67px;
        text-align: left;
        color: #292929;
        margin-bottom: 72px;
    }

    .page-doctor .teams {
        /* gap: 24px; */
    }

    .list-doctors__slider_item {
        margin-left: inherit;
        margin-right: inherit;
        margin-bottom: 72px;
    }


    .partner-row-header-2,
    .partner-row-header-3,
    #msi-partner-logo-carousel {
        display: none;
    }


    @media screen and (min-width: 768px) and (max-width: 991px) {
        .doctor-title {
            font-size: 40px;
            line-height: 54px;
        }
    }

    @media screen and (max-width: 767) {
        .doctor-title {
            font-size: 28px;
            line-height: 35.73px;
        }
    }
</style>