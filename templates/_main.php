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
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $page->title; ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates; ?>styles/main.css" />
		
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
	                <h2><?= $page->title; ?></h2>
	                <?= $body->body; ?>
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
