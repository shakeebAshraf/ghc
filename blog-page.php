<?php

/**
 * The template for  blog page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GHC
 */

/* Template Name: Blog Page */




get_header();
?>
<div class="blog-section jumbotron jumbotron-fluid">
    <div class="container py-5 my-5 text-center">
        <h1 class="h1 large-font font-white">Blogs</h1>
    </div>
</div>

<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h1 class="text-dark font-weight-bold">Articles about online marketing and IT projects!</h1>
                <p>The online marketing business is very exciting in all respects. A good basis for this is knowledge of IT projects. Read tips, news and important insider knowledge here.</p>
            </div>
            <div class="col-lg-3 text-right justify-content-center align-self-center">
                <button class="btn theme-primary-button">Show All</button>
            </div>
        </div>
        <div class="row justify-content-between">
            <?php $the_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 6,)); ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                    <div class="col-lg-4 mb-4">
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
    <div class="text-center mt-4">
                <button class="btn theme-primary-button">Show More</button>
            </div>
</section>
<?php
get_footer(); ?>
