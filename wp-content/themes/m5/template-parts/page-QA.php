<?php
/**
 * Template Name: Page Q&A
 *
 * @since 1.0.0
 * @author Kenji
 */

get_header();
$url = get_template_directory_uri();
?>
<div class="page-qa">
    <div class="container">
        <div class="page-qa__banner">
            <div class="page-qa__banner-content">
                <div class="page-qa__banner-title">
                    <?php
                    if (pll_current_language('slug') == 'vi') {
                        echo 'Khám phá thế giới sức khỏe phụ nữ';
                    }
                    if (pll_current_language('slug') == 'en') {
                        echo "Discover the World of Women's Health";
                    }
                    if (pll_current_language('slug') == 'zh') {
                        echo '探索女性健康世界';
                    }
                    ?>
                </div>
                <div class="page-qa__banner-subtitle">
                    <?php
                    if (pll_current_language('slug') == 'vi') {
                        echo 'Khám phá cách chúng tôi có thể trao quyền cho bạn để không chỉ tồn tại mà còn phát triển. Đi sâu hơn vào việc ưu tiên sức khỏe của bạn<br />và thu thập kiến ​​thức cần thiết để đưa ra những quyết định sáng suốt giúp bạn có một lối sống lành mạnh hơn.';
                    }
                    if (pll_current_language('slug') == 'en') {
                        echo "Discover how we can empower you to not just survive, but thrive. Dive deeper into prioritizing your well being<br />and gain the knowledge needed to make informed decisions that will lead to a healthier lifestyle.";
                    }
                    if (pll_current_language('slug') == 'zh') {
                        echo '了解我们如何帮助您不仅生存，而且蓬勃发展。更深入地优先考虑您的健康<br />并获得做出明智决策所需的知识，从而实现更健康的生活方式。';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require get_template_directory() . '/template-parts/os-partner-logo.php'; ?>
<?php require get_template_directory() . '/template-parts/content-us-now.php'; ?>

<?php get_footer(); ?>


<style>
    #pagetitle,
    .partner-row-header-2,
    .partner-row-header-3,
    #msi-partner-logo-carousel {
        display: none;
    }

    .page-qa {
        padding-top: 64px;
        padding-bottom: 160px;
        background-color: #fff;
    }


    .page-qa__banner {
        width: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        height: 339px;
        border-radius: 40px;
        background-image: url('<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/os/qa-banner.png');
    }

    .page-qa__banner-content {
        border-radius: 40px;
        background: linear-gradient(92.84deg, rgba(236, 249, 255, 0.4) -22.65%, #B6E9FF 168.27%);
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .page-qa__banner-title {
        font-family: "Space Grotesk", sans-serif;
        font-size: 56px;
        font-weight: 500;
        line-height: 67px;
        text-align: center;
        color: #0072AB;
    }

    .page-qa__banner-subtitle {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        text-align: center;
        color: #292929;
        margin-top: 24px;
    }

    @media screen and (min-width: 991px) and (max-width: 1199px) {}

    @media screen and (max-width: 991px) {}

    @media screen and (max-width: 768px) {}
</style>