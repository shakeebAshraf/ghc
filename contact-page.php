<?php

/**
 * The template for Contact page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GHC
 */

/* Template Name: Contact Page */




get_header();
?>
<div class="contact-section jumbotron jumbotron-fluid">
    <div class="container py-5 my-5">
        <div class="text-center">
            <h1 class="h1 large-font font-white mb-4">Impressum</h1>
        </div>
    </div>
</div>

<section class="container py-5">
    <div class="text-md-center">
        <h2 class="text-medium col-lg-6 px-0 mx-md-auto pb-3">Impressum der GHC GmbH – Ihr Online Marketing Partner!</h2>
        <p class="mx-auto mb-0">Wenn Sie weitere Fragen haben und Beratung wünschen, hinterlassen Sie bitte Ihre Daten und wir werden uns so schnell wie möglich mit Ihnen in Verbindung setzen.</p>
    </div>
    <div class="row my-5">
        <div class="col-md-6 justify-content-center align-self-center pr-md-5">
            <h2 class="h2 font-medium text-danger">In Kontakt kommen</h2>
            <h5 class="mb-3">Bei uns für jede Anfrage</h5>
            <!-- <?php echo apply_shortcodes('[contact-form-7 id="2483" title="Ohne Titel"]'); ?> -->
            <?php echo do_shortcode('[wpforms id="2578"]') ?>
        </div>
        <div class="col-md-6 justify-content-center align-self-center pl-md-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d907283.5894120138!2d6.990469598856887!3d47.23065352331595!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47901ff781c4e193%3A0x483c0b1858bc98d0!2sGHC%20GmbH!5e0!3m2!1sen!2s!4v1668670628041!5m2!1sen!2s" style="border:0;-webkit-filter: grayscale(100%);filter: grayscale(100%);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" onload="this.width=screen.width;this.height=screen.height/2;"></iframe>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6 pr-md-5">
            <p><span class="font-weight-bold">Adresse: </span> GHC GmbHJosef-Müller-Weg 66210 Sursee</p>
            <p><span class="font-weight-bold">HR-Nummer: </span> CH-100.4.801.253-5</p>
            <p><span class="font-weight-bold">MwSt.-Nummer: </span> CHE-379.703.451 MWST</p>
            <p><span class="font-weight-bold">UID: </span> CHE-379.703.451</p>
            <p><span class="font-weight-bold">D-U-N-S® Nummer: </span> 48-011-4026</p>
        </div>
        <div class="col-md-6 pr-md-5">
            <p><span class="font-weight-bold">Phone: </span> +41 62 791 14 13</p>
            <p><span class="font-weight-bold">Fax: </span> +41 44 575 30 83</p>
            <p class="mb-0"><span class="font-weight-bold">Email: </span> gh @ ghc-gmbh.ch</p>
        </div>
    </div>

    <div class="text-center mt-5">
        <h4>Unterstützt durch</h4>
        <a href="https://stadtbranche.ch/thema-online-marketing" target="_blank" class="medium-italic text-decoration-none">StadtBranche.ch Online-marketing Schweiz</a>
    </div>
</section>
<?php
get_footer();
?>