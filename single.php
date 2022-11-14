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
				<div class="col-md-4 col-lg-3 pt-5"><?php echo apply_shortcodes('[ez-toc]'); ?></div>
				<div class="col-md-8 col-lg-6">
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

				<div class="col-md-6 col-lg-3 mx-md-auto pt-lg-5 pt-md-3 text-center">
					<div style="position: sticky; top:40px;">
					<h4>Abonnieren Sie wöchentliche Updates</h4>
					<form class="mt-4">
						<div class="form-group">
							<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email *">
						</div>
						<button type="submit" class="btn btn-dark w-100">Abonnieren</button>
					</form>

					<h5 class="mt-4">Teile diesen Artikel</h5>
					<span>
						<a class="head-text-icon mr-2" href="#" target="_blank"><i class="fab fa-facebook-f fb-icon fa-2x"></i></a>
						<a class="head-text-icon mr-2" href="#" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
						<a class="head-text-icon mr-2" href="#" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
					</span>
				</div>
				</div>
			</div>
		</div>

	<?php
	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
