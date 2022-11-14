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
            <div class="col-lg-8 ">
                <h1 class="h1 large-font font-white mb-4">Sales Funnel –
                    </br>Hochwertige Leads </h1>
                <p class="font-white">Genau die Kunden die Sie brauchen</p>
            </div>
            <div class="col-lg-4">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/bulb-header-icon.webp' ?>" alt="">
            </div>
        </div>
    </div>
</div>

<section class="bg-red">
    <div class="container">
        <div class="row py-5 m-0 text-white">
            <div class="col-lg-9">
                <h2 class="medium-font">IT Projektmanagemnet & E-Commerce</h2>
                <p>Von null auf Hundert. 360°. Bei allen Belangen rund um IT Projektmanagement & E-Commerce. Erfolgreich und effizient.</p>
            </div>
            <div class="col-lg-3 text-center justify-content-center align-self-center">
                <button class="btn theme-primary-button cta-button">Get In Touch</button>
            </div>
        </div>
    </div>
</section>


<div class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h1 class="medium-font">Viele Skills für Ihr IT Projekt / e-Commerce</h1>
                <p>Als IT-Projektmanager mit tiefem technischen und viel Business Know-how kann ich Ihnen vieles auf einmal bieten. Über 30 Jahre Erfahrung. Sparen Sie den Overhead und fragen mich zuerst!</p>
            </div>
        </div>
    </div>
    <section class="py-4">
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
                        <h3 class="small-font mt-3">Suchmaschinen-Optimierung</h3>
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
                <button class="btn theme-primary-button cta-button">Jetzt kostenlose Beratung anfordern!</button>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h1 class="text-dark font-weight-bold">Artikel rund um Online-Marketing und IT-Projekte!
                </h1>
                <p>Das Online-Marketing Geschäft ist in allen Belangen sehr spannend. Eine gute Basis dafür sind auch Kenntnisse in IT-Projekten. Lesen Sie hier Tipps, News und wichtiges Insiderwissen dazu.</p>
            </div>
            <div class="col-lg-3 text-right justify-content-center align-self-center">
                <a href="<?php echo site_url() . '/blog/' ?>" class="btn theme-primary-button">Show All</a>
            </div>
        </div>
        <div class="row justify-content-between">
            <?php $the_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3,)); ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card mb-2 h-100">
                            <img class="card-img-top" src="<?php echo $featured_img_url ?>" alt="">
                            <div class="card-body">
                                <h4 class="card-title"><?php the_title(); ?></h4>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class=" btn bg-dark text-white">View</a>
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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2712.228452852147!2d8.097964215136237!3d47.17296352582623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47901ff781c4e1b1%3A0x224a5fb7fdcdc535!2sJosef-M%C3%BCller-Weg%206%2C%206210%20Sursee%2C%20Switzerland!5e0!3m2!1sen!2s!4v1667548770976!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" onload="this.width=screen.width;this.height=screen.height/2;"></iframe>