<?php namespace ProcessWire;

// Optional main output file, called after rendering page’s template file. 
// This is defined by $config->appendTemplateFile in /site/config.php, and
// is typically used to define and output markup common among most pages.
// 	
// When the Markup Regions feature is used, template files can prepend, append,
// replace or delete any element defined here that has an "id" attribute. 
// https://processwire.com/docs/front-end/output/markup-regions/
	
/** @var Page $page */
/** @var Pages $pages */
/** @var Config $config */
	
$home = $pages->get('/'); /** @var HomePage $home */

?><!doctype html>
<html lang="de" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">

    <title><?php echo $page->title; ?></title>
    <meta name="description" content="Kurzer, prägnanter Beschreibungstext dieser Seite (max. ~155 Zeichen).">
    <link rel="canonical" href="https://www.beispiel.de/aktueller-pfad/">

    <!-- Social Previews -->
    <meta property="og:site_name" content="Markenname">
    <meta property="og:title" content="<?php echo $page->title; ?>">
    <meta property="og:description" content="Kurzer, prägnanter Beschreibungstext dieser Seite.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.beispiel.de/aktueller-pfad/">
    <meta property="og:image" content="https://www.beispiel.de/assets/og/og-bild.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $page->title; ?>">
    <meta name="twitter:description" content="Kurzer, prägnanter Beschreibungstext dieser Seite.">
    <meta name="twitter:image" content="https://www.beispiel.de/assets/og/og-bild.jpg">

    <!-- Favicons/Manifest (Platzhalter) -->
    <link rel="icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Strukturierte Daten: WebSite (nur dieser Block) -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "Markenname",
            "url": "https://www.beispiel.de/",
            "inLanguage": "de-DE",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://www.beispiel.de/suche?q={suchbegriff}",
                "query-input": "required name=suchbegriff"
            }
        }
    </script>

    <!-- Externe Styles (du befüllst sie) -->
    <link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates; ?>styles/main.css" />

    <!-- Unterstützung für ältere Browser -->
    <!--[if lt IE 9]>
	        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	    <![endif]-->

    <!-- <meta name="robots" content="noindex,nofollow"> für Staging -->
</head>

<body data-entity="page">

    <!-- Skip-Link -->
    <a href="#main" class="skip-link">Zum Inhalt springen</a>

    <header pw-id="header-home" role="banner" id="seitenkopf" data-section="header">
        <div class="brand">
            <a href="/" rel="home">Markenname</a>
        </div>
        <!-- Header bleibt schlank; Hauptnavigation folgt separat -->
    </header>

    <!-- Hauptnavigation separat (leichter zu stylen) -->
    <nav aria-label="Hauptnavigation" id="hauptnavigation" data-section="primary-nav">
        <ul>
            <li><a href="/start" aria-current="page">Start</a></li>
            <li><a href="/leistungen">Leistungen</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/kontakt">Kontakt</a></li>
        </ul>
    </nav>

    <!-- Optional: Brotkrumen (nur anzeigen, wenn vorhanden) -->
    <nav aria-label="Brotkrumen" id="breadcrumbs" hidden>
        <ol>
            <li><a href="/">Startseite</a></li>
            <li><a href="/kategorie/">Kategorie</a></li>
            <li aria-current="page">Seitentitel</li>
        </ol>
    </nav>

    <main id="main" data-section="main">
        <article pw-id="main" typeof="Article" id="inhalt" data-entity="article">

        </article>
    </main>

    <footer id="seitenfuss" data-section="footer">
        <section aria-labelledby="kontakt">
            <h2 id="kontakt">Kontakt</h2>
            <address>
                Organisationsname · Musterstraße 1 · 12345 Musterstadt<br>
                <a href="tel:+491234567890">+49 123 4567890</a> ·
                <a href="mailto:info@beispiel.de">info@beispiel.de</a>
            </address>
        </section>

        <nav aria-label="Footer-Navigation">
            <ul>
                <li><a href="/impressum">Impressum</a></li>
                <li><a href="/datenschutz">Datenschutz</a></li>
                <li><a href="/barrierefreiheit">Erklärung zur Barrierefreiheit</a></li>
                <li><a href="/sitemap">Sitemap</a></li>
            </ul>
        </nav>

        <p><small>&copy; <span id="jahr">2025</span> Markenname. Alle Rechte vorbehalten.</small></p>
    </footer>

    <!-- Platzhalter für Consent/Analytics – erst nach Einwilligung laden -->
    <!-- <script src="/assets/js/analytics.js" type="module" defer data-consent="analytics"></script> -->

    <!-- Deine JS-Datei -->
    <script src="<?php echo $config->urls->templates; ?>scripts/main.js"></script>
    <script>
        // Mini-Helper: Jahr aktualisieren (PE-Fallback: statischer Wert im Markup)
        document.getElementById('jahr').textContent = new Date().getFullYear();
    </script>
</body>

</html>
