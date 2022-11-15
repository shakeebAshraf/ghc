<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GHC
 */

get_header();
?>
		<div class="archive-section jumbotron jumbotron-fluid">
			<div class="container py-5 my-5 text-center">
				<h1 class="h1 large-font font-white"><?php the_title();?></h1>
			</div>
		</div>
		<div class="container py-5">
		<?php the_content(); ?>
		</div>



<?php
get_footer();
