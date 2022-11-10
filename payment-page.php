<?php

/**
 * The template for  payment soulutions page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GHC
 */

/* Template Name: Payment Page */




get_header();
?>
<div class="payment-section jumbotron jumbotron-fluid">
    <div class="container py-5 my-5">
        <div class="text-center">
            <h1 class="h1 large-font font-white mb-4">Payment-Solution | Fraud-Protection</h1>
        </div>
    </div>
</div>

<section class="container my-5">
    <div class="row text-center px-5">
        <h2 class="h2 font-medium mx-auto col-lg-6 mb-4">Payment-Solution integrieren</h2>
        <p class="mx-auto">Die Payment-Solution in Ihrem Online-Shop sind mit entscheidend für den Erfolg Ihrer Unternehmung. Potentielle Kunden sind heute gewohnt, alle erdenklichen Möglichkeiten für die Bezahlung einer Dienstleistung oder für ein Produkt vorzufinden. Werden diese nicht angeboten, schrecken manche Kunden vor dem Abschluss zurück. Deshalb ist es wichtig die gängigsten Zahlungsmöglichkeiten anzubieten.</p>
    </div>

    <div class="row mt-5">
        <div class="col-md-6 justify-content-center align-self-center pr-md-5">
            <h2 class="h2 font-medium">Zahlungslösungen</h2>
            <ul class="m-0 p-0 my-3">
                <li class="list-unstyled">Rechnungszahlung</li>
                <li class="list-unstyled">Kreditkartenzahlung</li>
                <li class="list-unstyled">PayPal</li>
                <li class="list-unstyled">Postfinance Card / E-Payment</li>
                <li class="list-unstyled">Mobile Payment</li>
            </ul>
            <p>Ein wichtiger Bestandteil von Payment-Solution im Internet sind die Risiko-Minimierung und Fraud-Protecion (Betrugs – Erkennung und -Verhinderung). Oft werden Sie bereits in die Zahlungsmodule für die Zahlungslösung im Shop integriert um schon vor der Bestellung für Sicherheit zu sorgen. Auch die rechtliche Seite sollte betrachtet werden, so zum Beispiel die <a href="#" class="text-danger font-weight-bold text-decoration-none">Strong-Customer-Authentication (SCA/PSD2)</a>. Ist die Bestellung erfolgt, kann auch noch ein Zahlungsausfall oder – Verzögerung drohen. Um diese zu verhindern kann man Inkasso-Lösungen nutzen.</p>
        </div>
        <div class="col-md-6 justify-content-center align-self-center pl-md-5">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/payment-solutions.jpg' ?>" alt="">
        </div>
    </div>
</section>

<section class="mt-5">
    <div class="container">
        <div class="row text-center mb-4">
            <h2 class="h2 font-medium mx-auto">Details zu den Zahlungslösungen</h2>
        </div>
        <div class="row">
            <div class="col-md-6 px-5 pt-2">
                <h4>Rechnungszahlung</h4>
                <p>In der Schweiz zahlen sehr viele Kunden immer noch gerne per Rechnung. Bei rund 60 % aller Transaktionen über das Internet, in der Schweiz, wünscht der Kunde eine Lieferung der Ware zusammen mit einer Rechnung und einem Einzahlungsschein. Die meisten Shop-Lösungen bieten gratis Module an, mit denen man diese Payment-Solution im Shop anbieten kann. Das kann man meist selber sehr leicht einrichten. Aber Vorsicht, die Zahlart „per Rechnung“ hat für den Händler oft sehr viele Nachteile und auch hohe Risiken. Im Zweifel können die Kosten und Verluste für diese Payment-Lösung den Vorteil des Mehrumsatz überdecken.</p>
            </div>
            <div class="col-md-6 px-5 pt-2">
                <h4>Kreditkartenzahlung</h4>
                <p>Kreditkartenzahlung erwartet heute eigentlich jeder Kunde in einem Online-Shop. Nach der Rechnungszahlung ist sie die am meisten benutzte Option im Internet um zu bezahlen. Für den Händler ist es etwas aufwändiger diese einzurichten als andere Payment-Solutions. Um Kreditkarten im Online-Shop akzeptieren zu können benötigt man einen Vertrag mit einem „Kreditkarten Acquirer“ und einem „Kreditkarten/Transaktions Provider“ und man benötigt die für den Shop notwendige Software. Kreditkarten Acquirer wickeln die Zahlungen, die im Shop eingehen, mit der Kreditkarten-Firma ab.</p>
                <p>Acquirer, Provider & Software </p>
                <p>Kreditkarten / Transaktions Provider bietet eine technische Lösung über die die Transaktionen aus dem Shop abgewickelt werden. Und die Software für den Shop braucht man um die Daten vom Shop an den Kreditkarten/Transaktions Provider zu übergeben. Der Acquirer und der Kreditkarten/Transaktions Provider können auch ein Unternehmen sein. Der Acquirer und der Provider verlangen meist eine Grundgebühr pro Monat, eine Transaktionsgebühr und eine Gebühr in Prozent von dem Betrag vom Kredikarten-Unternehmen.</p>
            </div>
            <div class="col-md-6 px-5 pt-2">
                <h4>PayPal</h4>
                <p>PayPal ist eine für Kunden sehr interessante Payment-Solution. Kunden können bei PayPal ein Konto eröffnen und eine Kreditkarte hinterlegen. Treffen sie danach auf einen Shop im Internet der Bezahlung über PayPal anbietet, kann der Kunde diese auswählen und ohne noch einmal die Kreditkarten-Daten einzugeben bezahlen. Der Händler erhält die Kreditkarten-Daten des Kunden nicht. Die Bezahlung wird zwischen Händler und PayPal abgewickelt.</p>
                <p>Sichere und einfache Lösung für den Kunden</p>
                <p>Dem Kunden wird der Betrag von PayPal auf die Kreditkarte belastet. Das erspart dem Kunden die Kreditkarten-Daten immer wieder einzugeben und bietet optimalen Datenschutz, denn die Kreditkarten-Daten bleiben nur bei PayPal hinterlegt. Der Händler zahlt pro Betrag eine Gebühr an PayPal, die gleich abgezogen wird. PayPal bietet Kunden auch noch einen Risiko-Schutz.</p>
            </div>
            <div class="col-md-6 px-5 pt-2">
                <h4>Postfinance Card / E-Payment</h4>
                <p>In der Schweiz wird von Online-Shops erwartet, dass man mit der Postfinance Card oder mit Postfinance E-Payment bezahlen kann. Um diese akzeptieren zu können braucht der Händler ein Konto bei der PostFinance, muss die Transaktionen über die PostFinance als Provider abwickeln und er benötigt die entsprechende Software für sein Shop-System. Wie bei Kreditkarten muss man eine Grundgebühr pro Monat und eine Transaktionsgebühr bezahlen.</p>
            </div>
            <div class="col-md-6 px-5 pt-2">
                <h4>Mobile Payment</h4>
                <p>In den letzten Jahren hat sich die Bezahlung über mobile Geräte entwickelt. In Detailgeschäften kann man z.B. sein Handy an ein Terminal halten und darüber bezahlen. Diese Payment-Solution kommt nun langsam auch im Internet zum tragen. Google Pay, Apple Pay oder twint von der Postfinance werden bald in der Schweiz als Zahlart für Webseiten angeboten werden. Das bietet für Händler und Kunden gewisse Vorteile.</p>
                <p>Neue, moderne und sichere Bezahlart</p>
                <p>Der Kunde hinterlegt seine Kreditkarte auf seinem Smartphone und bezahlt damit. Der Händler schliesst mit einem der Anbieter einen Vertrag ab und zahlt, ähnlich wie bei PayPal, nur eine Transaktionsgebühr. Die Software ist leicht einzurichten und andere Kosten entfallen. Google, Apple oder Postfinance übernehmen die Abwicklung mit den Kreditkarten-Unternehmen.</p>
            </div>
        </div>
    </div>
</section>
<section class="my-5 bg-light py-5">
    <div class="container">
        <div class="row text-center mb-4">
            <h2 class="h2 font-medium mx-auto">Details zu Risiko- & Fraud-Prevention/Protection</h2>
        </div>
        <div class="row">
            <div class="col-md-6 px-5 pt-2">
                <h4>Fraud-Prevention/Protection</h4>
                <p>Als Fraud-Prevention oder Fraud-Protection (Fraud=Betrug) bezeichnet man die Betrugsverhinderung oder die Betrugsabwehr im Internet. Wie Sie vielleicht aus der Tagespresse wissen, werden immer wieder Kreditkartendaten gestohlen und für betrügerische Einkäufe über das Internet verwendet. Händler müssen sich vor diesen Machenschaften schützen. Sowohl im eigenen Interesse um nicht betrogen zu werden, aber auch im Interesse ihrer Kunden. Kunden müssen sicher sein, dass ihre Daten in ihrem Shop gut aufgehoben sind. Und damit kein Betrug begangen werden kann. Dazu hat die EU einige Regelwerke eingeführt, die diesen Schutz verbessern helfen (DSGVO, <a href="#" class="text-danger font-weight-bold text-decoration-none">PDS2</a>).</p>
            </div>
            <div class="col-md-6 px-5 pt-2">
                <h4>Risiko-Minimierung</h4>
                <p>Für Online-Händler ist das Risiko Geld durch ihren Online-Shop zu verlieren gross. Die Maschen der Betrüger aber auch kuriose Umstände mit ganz normalen Kunden können zu grossen Problemen führen. Dabei kann ein Zahlungsausfall oder finanzieller Schaden entstehen. Mit geeigneten Methoden kann man diese Risiken minimieren. Für jeden Online-Händler ist es sehr ratsam sich mit diesen Dingen zu beschäftigen und geeigneten Schutz in seine Systeme einzubauen.</p>
            </div>
            <div class="col-md-6 px-5 pt-2">
                <h4>Zahlungsprüfung</h4>
                <p>Der Aufwand von Zahlungsprüfungen darf nicht unterschätzt werden. Wie man weiter oben sieht, gibt es eine Reihe an Zahlungslösungen. Wie soll ein Händler einfach prüfen können, von wem zu welchem Auftrag wann eine Zahlung eingegangen ist? Dabei kann schnell mal eine Zahlung übersehen werden oder man bemerkt den fehlenden Zahlungseingang nicht. Daraus können unliebsame und kostenintensive Situationen entstehen.  Kunden vergessen schon mal die Bestellnummer bei einer Überweisung anzugeben oder sie runden den Betrag auf oder ab. Da hat sogar eine Software oft das Problem eine Zahlung zuzuordnen. Diese Dinge sollten genau geplant und präzise ausgeführt werden.</p>
            </div>
            <div class="col-md-6 px-5 pt-2">
                <h4>Inkasso-Lösungen</h4>
                <p>Ein Händler kann sich heute gegen Zahlungsausfälle durch Partner schützen. Forderungen die von Kunden nicht beglichen werden, können an Inkasso-Unternehmen weiter gegeben werden. Der Händler tritt die Forderung ab und erhält sofort sein Geld. Dieses System kann man entweder automatisiert in seine Software einbauen oder nach einer manuelle Prüfung weiter geben. Manchmal macht es ja auch Sinn mit seinem Kunden zu reden und eine andere Lösung zu finden. Das werden viele Kunden honorieren und später vielleicht zu guten Kunden werden.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="text-center">
            <h2 class="h2 font-medium mx-auto">Unsere Leistungen</h2>
            <h6>Analyse, Besprechung & Beratung, Konzept und Durchführung</h6>
            <p>Wir können Ihnen, aufgrund langjähriger Erfahrung, bei alle den oben genannten Punkten, helfen. In einer Besprechung mit Ihnen analysieren wir Ihre Ist-Situation, den zukünftigen Bedarf oder/und mögliche Verbesserungen. Daraus erstellen wir Ihnen ein Konzept mit Kostenabschätzung. Entspricht dieses Konzept Ihren Vorstellungen können wir es für Sie umsetzen. Dabei besorgen wir die Software, Verträge und schliessen Kooperationen. Sie brauchen  sich um nichts kümmern. Diese Arbeit kann natürlich nur nach Aufwand berechnet werden, da sie zu individuell auf einen Kunden ausgerichtet ist.</p>

        </div>
    </div>
</section>

<section class="bg-red mt-5">
    <div class="container">
        <div class="row py-5 m-0 text-white">
            <div class="col-lg-8 mx-auto text-center">
                <h5 class="font-medium mb-4">Fragen Sie ein detailliertes Gespräch und Offerte bei uns an. Ohne ein Briefing über den Sachverhalt können wir keine klare Strategie entwickeln.</h4>
                    <button class="btn theme-primary-button">In Kontakt kommen</button>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
