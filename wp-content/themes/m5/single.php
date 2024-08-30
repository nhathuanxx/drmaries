<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
$author_id = get_the_author_id();
?>

<div id="primary" class="os-content-area">
	<main id="main" class="site-main container">
	<div class="msi-single-post-title text-center">
					<div class="overlay"></div>
					<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
					<a class="os-similar-btn" href="<?php bloginfo('wpurl'); ?>/tin-tuc"><?php
                    if (pll_current_language('slug') == 'vi') {
                        echo 'Tìm thông tin tương tự';
                    }
                    if (pll_current_language('slug') == 'en') {
                        echo "Find similar information";
                    }
                    if (pll_current_language('slug') == 'zh') {
                        echo '了解我们如何帮助您不仅生存';
                    }
                    ?></a>
				</div>
		<div class="row justify-content-center">
			<div class="col-md-12">

				<div class="post-box-meta-single"> 
                    <p><?php echo get_the_date('d-m-Y'); ?> | <span>Tác giả: <?php 
                    if($author_id == 11) {
                    	echo get_the_author_link();
                    }else {
	                    echo get_the_author_posts_link();
	                }
                	?></span> | Ngày cập nhật: <?php echo get_the_modified_date('d-m-Y'); ?></p>
                </div>

				<?php
				// Start the Loop.
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content/content', 'single');

				endwhile; // End the loop.
				?>
				<?php
				$tags = wp_get_post_tags(get_the_ID());
				if (count($tags) > 0) :
				?>
					<div class="msi-post-tags-related">
						<span class="msi-tag-label">
							<i class="fas fa-tags"></i> :
						</span>
						<?php

						foreach ($tags as $tag) : ?>
							<span class="msi-widget-tags-item">
								<a href="<?php echo get_tag_link($tag->term_id); ?>">#<?php echo $tag->name; ?></a>
							</span>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>

		        <div class="comment clearfix">
		            <?php comments_template( '', true );  ?>
		        </div>
		        
				<?php require get_template_directory() . '/template-parts/related-post.php'; ?>

			</div>


		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
<style>
	#pagetitle {
		display: none;
	}

	.os-content-area {
		background-color: white;
		font-family: 'Be Vietnam Pro', sans-serif;
	}

	.os-content-area .msi-single-post-title {
		width: 100%;
		height: 560px;
		padding: 100px 200px 100px 200px;
		border-radius: 24px;
		opacity: 0px;
		background: #00000066;
		background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/qadefault.png'); ?>');
		background-size: cover;
		background-position: center;
		overflow: hidden;
		position: relative
	}

	.os-content-area .msi-single-post-title .overlay {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(0, 0, 0, 0.4);
	}

	.os-content-area .msi-single-post-title .entry-title {
		font-family: 'Space Grotesk', sans-serif;
		font-size: 56px;
		font-weight: 500;
		position: relative;
		line-height: 67px;
		text-align: center;
		color: var(--ColorBasic-Basic-White, #FFFFFF);

	}

	.os-similar-btn {
		width: fit-content;
		height: 48px;
		padding: 12px 24px 12px 24px;
		gap: 10px;
		border-radius: 100px;
		opacity: 0px;
		background: var(--Alias-Button-Primary-Blue, #00ACEE);
		font-family: 'Be Vietnam Pro', sans-serif;
		font-size: 16px;
		font-weight: 500;
		line-height: 24px;
		text-align: left;
		color: var(--Alias-Text-White, #FFFFFF);
		position: relative;
		top: 64px;
	}

	.os-content-area .entry-content {
		font-family: 'Be Vietnam Pro', sans-serif;
		font-size: 16px;
		font-weight: 400;
		line-height: 24px;
		text-align: left;
		color: var(--Alias-Text-Neutral, #292929);
		margin-top: 72px;


	}

	@media screen and (max-width: 767px) {
		.os-content-area .msi-single-post-title {
			width: 100%;
			height: fit-content;
			padding: 20px 40px;
			height: 180px;
			/* padding: 0px; */
			border-radius: 24px;
			opacity: 0px;
			background: #00000066;
			background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/qadefault.png'); ?>');
			background-size: cover;
			background-position: center;
			overflow: hidden;
			position: relative;
		}

		.os-content-area .msi-single-post-title .entry-title {
			font-family: 'Space Grotesk', sans-serif;
			color: var(--ColorBasic-Basic-White, #FFFFFF);
			font-family: Space Grotesk;
			font-size: 16px;
			font-weight: 500;
			line-height: 20.42px;
			text-align: center;

            margin: 0px;
		}

		.os-similar-btn {
			width: fit-content;
			height: 48px;
			padding: 12px 24px 12px 24px;
			gap: 10px;
			border-radius: 100px;
			opacity: 0px;
			background: var(--Alias-Button-Primary-Blue, #00ACEE);
			font-family: 'Be Vietnam Pro', sans-serif;
			font-size: 16px;
			font-weight: 500;
			line-height: 24px;
			text-align: left;
			color: var(--Alias-Text-White, #FFFFFF);
			position: relative;
			top: 40px;
		}
	}
</style>