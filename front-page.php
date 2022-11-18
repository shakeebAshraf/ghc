<?php

/**
 * The template for  home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GHC
 */

/* Template Name: Home Page */




get_header();
?>
<div class="banner-section jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7 justify-content-center align-self-center  text-center text-lg-left">
                <h1 class="h1 large-font font-white mb-4">Sales Funnel –
                    </br>Hochwertige Leads </h1>
                <p class="font-white">Genau die Kunden die Sie brauchen</p>
            </div>
            <div class="col-lg-4 col-md-5 justify-content-center align-self-center  text-center">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/bulb-header-icon.webp' ?>" alt="">
            </div>
        </div>
    </div>
</div>

<section class="bg-red">
    <div class="container">
        <div class="row py-5 m-0 text-white">
            <div class="col-lg-9 text-center text-lg-left">
                <h2 class="medium-font text-wrap">IT Projektmanagemnet & E-Commerce</h2>
                <p class="mb-lg-0">Von null auf Hundert. 360°. Bei allen Belangen rund um IT Projektmanagement & E-Commerce. Erfolgreich und effizient.</p>
            </div>
            <div class="col-lg-3 text-center justify-content-center align-self-center">
                <button class="btn theme-primary-button cta-button">In Kontakt kommen</button>
            </div>
        </div>
    </div>
</section>


<div class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h2 class="medium-font">Viele Skills für Ihr IT Projekt / e-Commerce</h2>
                <p class="mb-0">Als IT-Projektmanager mit tiefem technischen und viel Business Know-how kann ich Ihnen vieles auf einmal bieten. Über 30 Jahre Erfahrung. Sparen Sie den Overhead und fragen mich zuerst!</p>
            </div>
        </div>
    </div>
    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 text-center p-2">
                    <div class="bg-gray h-100 p-4">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/it-icon.webp' ?>" alt="IT Project Management">
                        <h3 class="small-font mt-3">IT Projekt management</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 text-center p-2">
                    <div class="bg-gray h-100 p-4">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/filter-icon.webp' ?>" alt="Sales Funnels">
                        <h3 class="small-font mt-3">Sales Funnel</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 text-center p-2">
                    <div class="bg-gray h-100 p-4">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/adwords-icon.webp' ?>" alt="Google Ads- Performance">
                        <h3 class="small-font mt-3">Google Ads – Performance Ads</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 text-center p-2">
                    <div class="bg-gray h-100 p-4">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/startup-icon.webp' ?>" alt="SEO">
                        <h3 class="small-font mt-3 text-wrap">Suchmaschinen-Optimierung</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 text-center p-2">
                    <div class="bg-gray h-100 p-4">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/content-creator-icon.webp' ?>" alt="Digital content creation">
                        <h3 class="small-font mt-3">Digital Content Erstellung</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 text-center p-2">
                    <div class="bg-gray h-100 p-4">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/megaphone-icon.webp' ?>" alt="Affiliate Marketing">
                        <h3 class="small-font mt-3">Affiliate-Marketing</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 text-center p-2">
                    <div class="bg-gray h-100 p-4">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/email-marketing-icon.webp' ?>" alt="Email Marketing">
                        <h3 class="small-font mt-3">Email-Marketing</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 text-center p-2">
                    <div class="bg-gray h-100 p-4">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/web-page-icon.webp' ?>" alt="Landing page">
                        <h3 class="small-font mt-3">Landingpages</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 text-center p-2">
                    <div class="bg-gray h-100 p-4">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/browser-icon.webp' ?>" alt="Web Pages">
                        <h3 class="small-font mt-3">Webseiten</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 text-center p-2">
                    <div class="bg-light h-100 p-4">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/valid-icon.webp' ?>" alt="Payment Solutions">
                        <h4 class="small-font mt-3">Payment-Lösungen</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="bg-red my-5">
    <div class="container">
        <div class="row py-5 m-0 text-white">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="font-medium">Jetzt mit einer kostenlosen Erstberatung starten!
                </h2>
                <p>Für neue Kunden führen wir einen gratis Beratung durch. Wir analysieren Ihre Anliegen und schlagen Ihnen die besten Lösungen vor.</p>
                <button class="btn theme-primary-button cta-button text-center">Jetzt kostenlose Beratung anfordern!</button>
            </div>
        </div>
    </div>
</section>

<section class="mt-5">
    <div class="container">
        <div class="row pb-3">
            <div class="col-lg-9">
                <h2 class="text-dark font-weight-bold">Artikel rund um Online-Marketing und IT-Projekte!</h2>
                <p>Das Online-Marketing Geschäft ist in allen Belangen sehr spannend. Eine gute Basis dafür sind auch Kenntnisse in IT-Projekten. Lesen Sie hier Tipps, News und wichtiges Insiderwissen dazu.</p>
            </div>
            <div class="col-lg-3 text-center text-lg-right justify-content-center align-self-center">
                <a href="<?php echo site_url() . '/blog/' ?>" class="btn theme-primary-button">Zeige alle</a>
            </div>
        </div>
        <div class="row justify-content-between pt-5">
            <?php $the_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3,)); ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card mb-2 h-100 blog-image">
                            <img class="card-img-top" height="185px" src="<?php echo $featured_img_url ?>" alt="" style="object-fit:cover;">
                            <div class="card-body d-flex flex-column">
                                <a href="<?php the_permalink(); ?>" class=" text-dark text-decoration-none">
                                    <h4 class="card-title"><?php the_title(); ?></h4>
                                </a>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class=" btn bg-dark text-white mt-auto">aussicht</a>
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
get_footer(); ?>
<a href="https://www.google.com/maps/place/GHC+GmbH/@47.1729635,8.0979642,17z/data=!4m5!3m4!1s0x47901ff781c4e193:0x483c0b1858bc98d0!8m2!3d47.1729599!4d8.1001529" target="_blank">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/map.webp' ?>" style="min-height: 25vh; width:100%">
</a>
