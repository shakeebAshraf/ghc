<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GHC
 */

get_header();
?>
<div class="jumbotron jumbotron-fluid">
  <div class="container ">
    <h1 class="h1">Sales Funel - </h1>
    <h1 class="h1">High Quality Leads</h1>
    <p>Exactly the customers you need</p>
  </div>
</div>
<div class="row bg-danger p-5 m-0 text-white">
	<div class="col-lg-8">
		<h1>IT project management & e-commerce</h1>
		<p>From zero to hundred. 360&#176;. For all matters related to project management & e-commerce. Successful and efficient.</p>
	</div>
	<div class="col-lg-4 text-center justify-content-center align-self-center">
		<button class="btn font-weight-bold bg-dark text-white">Get In Touch</button>
	</div>
</div>

<?php
get_footer();
