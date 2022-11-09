<?php

/**
 * The template for  about page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GHC
 */

/* Template Name: About Page */




get_header();
?>
<div class="about-section jumbotron jumbotron-fluid">
    <div class="container py-5 my-5">
        <div class="text-center">
            <h1 class="h1 large-font font-white mb-4">About Us</h1>
        </div>
    </div>
</div>

<section class="container my-5">
    <div class="row">
        <div class="col-md-6 justify-content-center align-self-center my-4 pr-md-5">
            <h2 class="h2 font-medium">Full Service Agency for Websites, SEO & eCommerce</h1>
                <p>GHC GmbH is an online marketing agency and a consulting company specializing in the field of eCommerce. Our company headquarters are in beautiful Sursee, in the middle of Switzerland. We support companies on their way to eCommerce. From the first hour to continuous support and marketing.</p>
        </div>
        <div class="col-md-6 justify-content-center align-self-center my-4 pl-md-5">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/ab1.jpg' ?>" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 justify-content-center align-self-center my-4 pr-md-5">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/ab2.jpg' ?>" alt="">
        </div>
        <div class="col-md-6 justify-content-center align-self-center my-4 pl-md-5">
            <h2 class="h2 font-medium">What We Do?</h2>
            <p>We can advise and support companies that want to expand their business activities online in all matters right from the start. We can help companies with existing online marketing to optimize it. We can draw on many years of experience in the areas of information technology (IT), eCommerce, business administration, marketing, online marketing, public relations and entrepreneurship. The core of our work are concepts and implementation of the online marketing of customer products via online shops and the entire range of marketing channels, including technical implementation.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 justify-content-center align-self-center my-4 pr-md-5">
            <h2 class="h2 font-medium">What We Create?</h2>
            <p>In practice, this means the creation of business concepts, business plans, selection of suitable software/online shops including installation, setup, connections to suitable ERP solutions. The aim is to find an optimal business process for the customer, with which he can market his products online and at the same time carry out the fulfillment. In other words, depicts a complete business process. In addition, after the process has been set up, we support the economic, marketing-oriented and technical optimization with the aim of profitability for the customer.</p>
        </div>
        <div class="col-md-6 justify-content-center align-self-center my-4 pl-md-5">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/ab3.jpg' ?>" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 justify-content-center align-self-center my-4 pr-md-5">
            <h2 class="h2 font-medium">Founder and CEO</h2>
            <p class="font-weight-bold">Marketing has always been my passion.</p>
            <p>Gordian Hense completed his studies at the Munich University of Applied Sciences in 1987 in the field of industrial engineering with a diploma. The main subject of the course was marketing.</p>
            <p>Since that time I have worked in many areas, but always related to marketing, in many positions and industries. I've been self-employed in Switzerland since 2007, and since 2016 I've been CEO of GHC GmbH in the field of online / eCommerce marketing. I appreciate the rapid development, the opportunity to achieve great success and to work with nice and great people.</p>
            <p>In 1992 I set up my first online shop with FileMaker (database), Lasso (LassoSoft, script language) and a hosting provider in Seattle "ForestNet" USA and sold software about it at the time. There were no hosting providers in Europe then, and PHP and MySQL were also in their infancy. That left a deep impression on me and showed me the possibilities of the internet.</p>
            <p>Know-how – Industry experience in health, optics, metal construction, mechanical engineering, chemicals, automotive, IT industry, logistics, marketing and more.</p>
        </div>
        <div class="col-md-6 justify-content-center align-self-center my-4 pl-md-5">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/ceo.jpg' ?>" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>Today I look after customers 360 degrees in eCommerce and online marketing, whether it&apos;s about the shopping solution, hosting or payment solutions. I see myself as a competent all-round consultant, coach and project manager.</p>
            <p class="font-weight-bold">However, the central topic is online marketing, eCommerce and conversion and lead generation through <span class="text-danger">search engine optimization (SEO)</span> ,<span class="text-danger"> Google Ads &amp; Performance Ads (SEA)</span> .</p>
            <p>For the various projects, I work together with experienced, top-class, selected partners.</p>
            <p class="font-weight-bold">“We are only at 10% of the possibilities that the Internet offers. Let&apos;s do it.&quot;</p>
        </div>
    </div>
</section>
<?php
get_footer();
