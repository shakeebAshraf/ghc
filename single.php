<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package GHC
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	while (have_posts()) : ?>
		<div class="single-blog-section jumbotron jumbotron-fluid" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>');">
			<div class="container py-5 my-5 text-center">
				<h1 class="h1 large-font font-white"><?php the_title(); ?></h1>
			</div>
		</div>
		<div class="container py-5">
			<div class="row">
				<div class="col-md-4 col-lg-3 pt-5">
					<div style="position: sticky; top:40px;">
						<?php echo apply_shortcodes('[ez-toc]'); ?>
						<div class="mt-5">
							<h4>Abonnieren Sie wöchentliche Updates</h4>
							<form class="mt-4">
								<div class="form-group">
									<?php echo do_shortcode('[wpforms id="2581"]'); ?>
								</div>
							</form>

							<h5 class="mt-4">Teile diesen Artikel</h5>
							<span>
								<a class="head-text-icon mr-2" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank"><img class="mr-0" src="<?php echo get_template_directory_uri() . '/assets/images/facebook.png' ?>" width="32px" alt=""></a>
								<a class="head-text-icon mr-2" href="https://twitter.com/intent/tweet?text=<?php the_permalink() ?>" target="_blank"><img class="mr-0" src="<?php echo get_template_directory_uri() . '/assets/images/twitter.png' ?>" width="32px" alt=""></a>
								<a class="head-text-icon mr-2" href="https://www.linkedin.com/cws/share?url=<?php the_permalink() ?>" target="_blank"><img class="mr-0" src="<?php echo get_template_directory_uri() . '/assets/images/linkedin.png' ?>" width="32px" alt=""></a>
								<a class="head-text-icon mr-2" href="https://www.instagram.com/cws/share?url=<?php the_permalink() ?>" target="_blank"><img class="mr-0" src="<?php echo get_template_directory_uri() . '/assets/images/instagram.png' ?>" width="32px" alt=""></a>
							</span>
						</div>
					</div>
				</div>
				<div class="col-md-8 col-lg-9">
					<?php
					the_post();

					get_template_part('template-parts/content', get_post_type());

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'ghc') . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'ghc') . '</span> <span class="nav-title">%title</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;
					?>
				</div>
			</div>
		</div>

	<?php
	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
