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

?><!DOCTYPE html>
<html lang="de">
	<head id="html-head">
	    <!-- Grundlegende Meta-Tags -->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	    
	    <!-- SEO Meta-Tags -->
	    <title><?php echo $page->title; ?></title>
	    <meta name="description" content="Eine präzise Beschreibung der Seite in 150-160 Zeichen">
	    <meta name="author" content="Dein Name/Firmenname">
	    <meta name="robots" content="index, follow">
	    <link rel="canonical" href="https://www.deinewebsite.de/aktuelle-url/">
	    
	    <!-- Open Graph Tags für Social Media -->
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="https://www.deinewebsite.de/aktuelle-url/">
	    <meta property="og:title" content="Seitentitel | Websitename">
	    <meta property="og:description" content="Eine präzise Beschreibung für Social Media">
	    <meta property="og:image" content="https://www.deinewebsite.de/images/og-image.jpg">
	    <meta property="og:image:width" content="1200">
	    <meta property="og:image:height" content="630">
	    
	    <!-- Twitter Card Tags -->
	    <meta name="twitter:card" content="summary_large_image">
	    <meta name="twitter:title" content="Seitentitel | Websitename">
	    <meta name="twitter:description" content="Eine präzise Beschreibung für Twitter">
	    <meta name="twitter:image" content="https://www.deinewebsite.de/images/twitter-image.jpg">
	    
	    <!-- Favicons und App Icons -->
	    <link rel="icon" href="/favicon.ico" sizes="any">
	    <link rel="icon" href="/icon.svg" type="image/svg+xml">
	    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
	    <link rel="manifest" href="/site.webmanifest">
	    <meta name="theme-color" content="#ffffff">
	    
	    <!-- Preloading für kritische Ressourcen -->
	    <link rel="preload" href="/fonts/main-font.woff2" as="font" type="font/woff2" crossorigin>
	    
	    <!-- CSS Einbindung -->
	    <link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates; ?>styles/main.css" />
	    
	    <!-- Unterstützung für ältere Browser -->
	    <!--[if lt IE 9]>
	        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	    <![endif]-->
	    
	    <!-- Schema.org Strukturierte Daten -->
	    <script type="application/ld+json">
	    {
	      "@context": "https://schema.org",
	      "@type": "WebPage",
	      "name": "Seitentitel",
	      "description": "Eine präzise Beschreibung der Seite",
	      "publisher": {
	        "@type": "Organization",
	        "name": "Dein Firmenname",
	        "logo": {
	          "@type": "ImageObject",
	          "url": "https://www.deinewebsite.de/logo.png"
	        }
	      }
	    }
	    </script>
	</head>
	<body id="html-body">
	    <a class="skip-link" href="#main-content">Zum Hauptinhalt springen</a>
	    
	    <header role="banner">
	        <div class="wrapper">
			<h1><?= $page->title; ?></h1>
			<p>page subtitle</p>
	        </div>
	    </header>
	
	    <nav id="main-nav" role="navigation" aria-label="Hauptnavigation">
	        <div class="wrapper">
	            <!-- templatepart navigation -->
	        </div>
	    </nav>
	
	    <main id="main-content" role="main">
	        <div class="wrapper">
	            <article id="content">
	                
	            </article>
	        </div>
	    </main>
	
	    <aside role="complementary">
	        <div class="wrapper">
	            
	        </div>
	    </aside>
	
	    <footer role="contentinfo">
	        <div class="wrapper">
	            
	        </div>
	    </footer>
	<!-- javascript -->
	<script src="<?php echo $config->urls->templates; ?>scripts/main.js"></script>
	</body>
</html>
