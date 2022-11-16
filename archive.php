<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GHC
 */

get_header();
?>

<main id="primary" class="site-main">


	<?php if (have_posts()) : ?>
		<div class="archive-section jumbotron jumbotron-fluid">
			<div class="container py-5 my-5 text-center">
				<h1 class="h1 large-font font-white"><?php the_archive_title();  ?></h1>
			</div>
		</div>
		<div class="container">
			<div class="row justify-content-between mt-5">
			<?php
			/* Start the Loop */
			while (have_posts()) : 
				the_post();
				?>
				<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
				<div class="col-lg-4 col-md-6 mb-5">
                        <div class="card mb-2 h-100 blog-image">
                            <img class="card-img-top" src="<?php echo $featured_img_url ?>" alt="">
                            <div class="card-body d-flex flex-column">
                                <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none">
                                    <h4 class="card-title"><?php the_title(); ?></h4>
                                </a>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn bg-dark text-white mt-auto">Mehr</a>
                            </div>
                        </div>
                    </div>
				<?php

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				// get_template_part('template-parts/content', get_post_type());
			

			endwhile;

			the_posts_navigation();

		else :

			// get_template_part('template-parts/content', 'none');

		endif;
			?>
			</div>
		</div>

</main><!-- #main -->

<?php
get_footer();
