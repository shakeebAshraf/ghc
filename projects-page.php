<?php

/**
 * The template for  projects page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GHC
 */

/* Template Name: Projects Page */




get_header();
?>
<div class="project-section jumbotron jumbotron-fluid">
    <div class="container my-5 py-5">
        <div class="text-center">
            <h1 class="h1 large-font font-white mb-4">Projekte</h1>
        </div>
    </div>
</div>

<section class="container my-5">
    <div class="text-md-center">
        <h2 class="medium-font pb-3">Projekte zur Nachhaltigkeit und Aufklärung</h2>
        <p class="mx-md-5 mb-0">Neben unserer Haupttätigkeit, dem <a href="https://www.ghc-gmbh.ch/suchmaschinen-optimierung-seo/" class="medium-italic text-decoration-none" target="_blank">Online-Marketing</a>, beschäftigen wir uns mit weiteren Projekten. Ein Thema dabei ist die nachhaltige Mobilität. Mit carmart.ch haben wir dafür einen Blog eingerichtet der über die „Neue Mobilität“ berichtet. In unregelmässigen Abständen berichten wir auf diesem Blog über interessante Entwicklungen zu dem Thema. Gleichzeitig sind wir Firmen-Mitglied im Elektromobilclub Schweiz. Zusammen mit Mitgliedern des Clubs organisieren wir Events und Treffen. So z.B. das monatliche Treffen für Elektroauto-Besitzer und die es werden wollen in Oftringen. Weitere Aktivitäten dazu sind geplant und werden auf carmart.ch veröffentlicht. Über weitere Blogs informieren wir zudem über Aufklärung zu aktuellen Entwicklungen. Zum Beispiel der Disruption in vielen Industriebereichen oder Trends aus aller Welt.</p>
    </div>

    <div class="row mt-5">
        <div class="col-md-6 pr-md-4">
            <div class="mb-5 p-3 bg-light">
                <div class="bg-danger px-3 pt-3">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/carmart.jpg' ?>" class="w-100" alt="">
                </div>
                <h4 class="mt-3">Projekt carmart.ch – Berichte zu New Mobility</h4>
                <p class="mb-0"><a href="https://www.carmart.ch/" target="_blank" class="medium-italic text-decoration-none">carmart.ch</a> berichtet seit dem Jahr 2003 ausführlich über <span class="font-weight-bold">Ereignisse</span>, <span class="font-weight-bold">Neuheiten</span> und <span class="font-weight-bold">Nachrichten</span> aus dem <span class="font-weight-bold">Mobilitätsmarkt</span>. Neben Neuvorstellungen, dem Markt und seinen Entwicklungen werden auch Erfahrungsberichte und Fahrberichte über Fahrzeuge aller Art veröffentlicht. Bei der Betrachtung des Marktes nehmen wir eher den Blick aus Sicht des Kunden, Verbrauchers und Betroffenem ein und legen auch Schwerpunkte auf wirtschaftliche und umweltbezogene Themen.</p>
            </div>
            <div class="mt-4 p-3 bg-light">
                <div class="bg-danger px-3 pt-3">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/schuband.jpg' ?>" class="w-100" alt="">
                </div>
                <h4 class="mt-3">Projekt schuhband.ch – Schnürsenkel und Zubehör</h4>
                <p class="mb-0">In unserem Online-Shop <a href="https://www.schuhband.ch/" target="_blank" class="medium-italic text-decoration-none">schuhband.ch</a> verkaufen wir online Schnürsenkel, Schuhspanner oder anderes Schuh-Zubehör. Auf die Idee zu diesem Shop sind wir im Rahmen eines Recherche-Projektes gestossen. Wir haben die verschiedenen Grundbedürfnisse untersucht und analysiert wie viele durch Online-Shops abgedeckt sind. Dabei sind wir darauf gestossen, dass es praktisch keinen reinen Online-Shop für Schuhzubehör in der Schweiz gab. Mittlerweile machen uns das natürlich einige nach. Dennoch sind wir der mit der spitzesten Ausrichtung im Markt.</p>
            </div>
        </div>
        <div class="col-md-6 pl-md-4 mt-5 mt-md-0">
            <div class="mb-5 p-3 bg-light">
                <div class="bg-danger px-3 pt-3">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/outview.jpg' ?>" class="w-100" alt="">
                </div>
                <h4 class="mt-3">Projekt outview.ch – Artikel über Disruption</h4>
                <p class="mb-0">Durch die immer stärkere Vernetzung, Globalisierung und Digitalisierung werden zunehmend Projekte und Produkte möglich, die herkömmliche ersetzen werden. Dabei tritt oft ein extremer wirtschaftlicher Vorteil auf, der die Transformation erheblich zu beschleunigen hilft. Auf der einen Seite bietet das enorme Vorteile für alle von uns, zerstört aber auch herkömmliche, alte Strukturen mit all seinen Folgen. Ein Beispiel ist die Elektromobilität bzw. die neuen Mobilitätssysteme. Sie werden die klassische Autoindustrie ersetzen, viele Arbeitskräfte freisetzen und das Leben vieler Menschen verändern. Gleichzeitig schaffen sie neu, aber andere Arbeitsplätze, helfen die Umwelt zu schonen und das Leben für viele einfacherer, sicherer und angenehmer zu gestalten. Auf <a href="https://www.outview.ch/" target="_blank" class="medium-italic text-decoration-none">outview.ch</a> berichten wir über alle Aspekte rund um solche Disruptionen.</p>
            </div>
            <div class="mt-4 p-3 bg-light">
                <div class="bg-danger px-3 pt-3">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/handfans.jpg' ?>" class="w-100" alt="">
                </div>
                <h4 class="mt-3">Projekt hand-fans.ch – Kühle Brise ohne Elektrosmog</h4>
                <p class="mb-0">Unser Handfächer-Shop <a href="https://www.hand-fans.ch/" target="_blank" class="medium-italic text-decoration-none">hand-fans.ch</a> war unser aller erster Online-Shop in der Schweiz. Er erblickte das Licht der Welt bereits im Jahre 2007. Für einen absoluten Beginner-Show-Case suchten wir nach einem Artikel den wir in einem Online-Shop präsentieren konnten. Da es an dem Tag recht heiss und schwül war, kam uns der Gedanke einen Shop für Handfächer zu erstellen. Eigentlich füllten wir den Shop nur mit fiktiven Handfächer-Artikeln um den Shop unseren Kunden präsentieren zu können. Es ging ja eigentlich nur darum unser Können unter Beweis zu stellen. Wider erwarten bestellten auf einmal Kunden Handfächer. Nun gebot es unsere Ehre auch zu liefern. Und so entwickelte sich ein reges Handfächer – Geschäft über diesen Shop.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-red mt-5">
    <div class="container">
        <div class="row py-5 m-0 text-white">
            <div class="text-center">
                <h2 class="font-medium">Online-Shops – Show-Cases wurden zu Selbstläufern</h2>
                <p>Am Anfang unserer Tätigkeit, im Online-Marketing und eCommerce, wollten wir unseren Kunden beweisen wie gut wir sind. Deshalb schufen wir eigene Online-Shops und begannen sie zu vermarkten. Aus Show-Cases wurden Erfolge, so dass wir uns entschlossen haben diese weiter zu führen. Hier stellen wir sie Ihnen vor.</p>
                <button class="btn theme-primary-button cta-button">in Kontakt kommen</button>
            </div>
        </div>
    </div>
</section>

<?php
get_footer(); ?>