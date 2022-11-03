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

<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="h1">Sales Funel - </h1>
		<h1 class="h1">High Quality Leads</h1>
		<p>Exactly the customers you need</p>
	</div>
</div>

<section class="bg-danger">
	<div class="container">
		<div class="row py-5 m-0 text-white">
			<div class="col-lg-8">
				<h1>IT project management & e-commerce</h1>
				<p>From zero to hundred. 360&#176;. For all matters related to project management & e-commerce. Successful and efficient.</p>
			</div>
			<div class="col-lg-4 text-center justify-content-center align-self-center">
				<button class="btn font-weight-bold bg-dark text-white">Get In Touch</button>
			</div>
		</div>
	</div>
</section>

<section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-3 text-center p-3">
				<div class="bg-light h-100 p-4">
					<i class="fa-solid fa-laptop-code text-danger display-3"></i>
					<h4 class="font-weight-bold mt-3">IT Project Management</h4>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 text-center p-3">
				<div class="bg-light h-100 p-4">
					<i class="fa-solid fa-filter text-danger display-3"></i>
					<h4 class="font-weight-bold mt-3">Sales Funnels</h4>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 text-center p-3">
				<div class="bg-light h-100 p-4">
					<i class="fa-brands fa-buysellads text-danger display-3"></i>
					<h4 class="font-weight-bold mt-3">Google ads - Performance ads</h4>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 text-center p-3">
				<div class="bg-light h-100 p-4">
					<i class="fa-solid fa-rocket text-danger display-3"></i>
					<h4 class="font-weight-bold mt-3">Search Engine Optimization</h4>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 text-center p-3">
				<div class="bg-light h-100 p-4">
					<i class="fa-solid fa-pen-to-square text-danger display-3"></i>
					<h4 class="font-weight-bold mt-3">Digital Content Creation</h4>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 text-center p-3">
				<div class="bg-light h-100 p-4">
					<i class="fa-solid fa-bullhorn text-danger display-3"></i>
					<h4 class="font-weight-bold mt-3">Affiliate Marketing</h4>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 text-center p-3">
				<div class="bg-light h-100 p-4">
					<i class="fa-solid fa-envelopes-bulk text-danger display-3"></i>
					<h4 class="font-weight-bold mt-3">Email Marketing</h4>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 text-center p-3">
				<div class="bg-light h-100 p-4">
					<i class="fa-solid fa-pager text-danger display-3"></i>
					<h4 class="font-weight-bold mt-3">Landing Pages</h4>
				</div>
			</div>
			<div class="col-12 col-md-6 text-center p-3">
				<div class="bg-light h-100 p-4">
					<i class="fa-solid fa-file-code text-danger display-3"></i>
					<h4 class="font-weight-bold mt-3">Web Pages</h4>
				</div>
			</div>
			<div class="col-12 col-md-6 text-center p-3">
				<div class="bg-light h-100 p-4">
					<i class="fa-solid fa-money-check-dollar text-danger display-3"></i>
					<h4 class="font-weight-bold mt-3">Payment Solutions</h4>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-danger my-5">
	<div class="container">
		<div class="row py-5 m-0 text-white">
			<div class="col-lg-7 mx-auto text-center">
				<h1>Start now with a free initial consultation!</h1>
				<p>For new customers we conduct a free consultation. We analyze your concerns and suggest the best solutions.</p>
				<button class="btn font-weight-bold bg-dark text-white">Request Free Advice Now</button>
			</div>
		</div>
	</div>
</section>

<section class="my-5">
	<div class="container">
		<div class="row">
			<div class="col-9">
				<h1 class="text-dark font-weight-bold">Articles about online marketing and IT projects!</h1>
				<p>The online marketing business is very exciting in all respects. A good basis for this is knowledge of IT projects. Read tips, news and important insider knowledge here.</p>
			</div>
			<div class="col-3 text-right justify-content-center align-self-center">
				<button class="btn font-weight-bold bg-dark text-white">Show All</button>
			</div>
		</div>
		<div class="row justify-content-between">
			<?php $the_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3,)); ?>
			<?php if ($the_query->have_posts()) : ?>
				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
					<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
					<div class="col-lg-4">
						<div class="card mb-2 h-100">
							<img class="card-img-top" src="<?php echo $featured_img_url ?>" alt="">
							<div class="card-body">
								<h4 class="card-title"><?php the_title(); ?></h4>
								<p class="card-text"><?php the_excerpt(); ?></p>
								<a href="#" class=" btn bg-dark text-white">View</a>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p>
					<?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
				</p>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php
get_footer();
