<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GHC
 */

?>
<!-- footer start -->
<a id="back-to-top-button"></a>
<footer>



	<div class="bg-light footer-section">
		<div class="container p-5 border-bottom border-danger">
			<div class="mx-auto">
				<div class="row">
					<div class="col-lg-4">
						<div class="text-md-center text-lg-left">
							<?php dynamic_sidebar('first-footer-widget'); ?>
							<a href=""><img class="mr-2" src="<?php echo get_template_directory_uri() . '/assets/images/linkedin.png' ?>" width="48px" alt=""></a>
							<a href="https://www.facebook.com/ghcgmbh/" target="_blank"><img class="mr-2" src="<?php echo get_template_directory_uri() . '/assets/images/facebook.png' ?>" width="48px" alt=""></a>
							<a href=""><img class="mr-2" src="<?php echo get_template_directory_uri() . '/assets/images/instagram.png' ?>" width="48px" alt=""></a>
							<a href=""><img class="mr-2" src="<?php echo get_template_directory_uri() . '/assets/images/twitter.png' ?>" width="48px" alt=""></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
						<?php dynamic_sidebar('second-footer-widget'); ?>
					</div>

					<div class="col-lg-4 col-md-6 mt-4 mt-md-5 mt-lg-0">
						<div>
							<?php dynamic_sidebar('third-footer-widget'); ?>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="py-4">
			<div class="row">
				<div class="col text-center">
					<p class="mb-0">© Copyright <?php echo date("Y"); ?> GHC GmbH. All rights reserved.</p>
				</div>
			</div>
		</div>
	</div>

</footer>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>