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



 	<div class="bg-light">
 		<div class="container border-bottom border-danger">
 			<div class="pt-5 mx-auto">
 				<div class="row">
 					<div class="col-lg-4 col-md-12 col-sm-12 pb-5">
 						<div class="text-center text-lg-left">
							<?php dynamic_sidebar( 'first-footer-widget' ); ?>
							<img class="mr-2" src="<?php echo get_template_directory_uri() . '/assets/images/linkedin.png' ?>" width="48px" alt="">
							<img class="mr-2" src="<?php echo get_template_directory_uri() . '/assets/images/facebook.png' ?>" width="48px" alt="">
							<img class="mr-2" src="<?php echo get_template_directory_uri() . '/assets/images/instagram.png' ?>" width="48px" alt="">
							<img class="mr-2" src="<?php echo get_template_directory_uri() . '/assets/images/twitter.png' ?>" width="48px" alt="">
 						</div>
 					</div>
 					<div class="col-lg-4 col-md-6 col-sm-6 mb-5">
					 <?php dynamic_sidebar( 'second-footer-widget' ); ?>
 					</div>

 					<div class="col-lg-4 col-md-6 col-sm-6">
 						<div>
						 <?php dynamic_sidebar( 'third-footer-widget' ); ?>
 						</div>
 					</div>

 				</div>
 			</div>
 		</div>
		
		 <div class="pt-3">
 				<div class="row">
 					<div class="col text-center">
 						<p class="p">© Copyright <?php echo date("Y"); ?> GHC GmbH. All rights reserved.</p>
 					</div>
 				</div>
 			</div>
 	</div>

 </footer>

 
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>