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

$home = $pages->get('/'); // homepage

?><!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8">

		<title><?php echo $page->title; ?></title>
		<meta name="description" content="">

  		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

		<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates; ?>styles/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates; ?>styles/main.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates; ?>styles/osano.css" />
	</head>

	<body id="html-body">
		<header class="site-header">
			<div class="header-inner">
				<h1><?php echo $page->title; // headline ?></h1>
			</div>
			<navigation>
				<?php echo $home->and($home->children)->implode(" / ", "<a href='{url}'>{title}</a>"); ?>
			</navigation>
		</header>

		<main class="site-main">
			<article id="content">
				
			</article>
		</main>

		<aside class="sidebar">
			<?php if($page->hasChildren): ?>
				<ul> 
					<?php echo $page->children->each("<li><a href='{url}'>{title}</a></li>"); // subnav ?>
				</ul>	
			<?php endif; ?>
		</aside>

		<footer class="site-footer">
			<div class="footer-inner">
				<p>Copyright Tom Evers | 2023</p>
			</div>
		</footer>

		<!-- scripts -->
		<script src="<?php echo $config->urls->templates; ?>scripts/main.js"></script>
		<script src="<?php echo $config->urls->templates; ?>scripts/osano.js">></script>
		<script>
			window.cookieconsent.initialise({
			"palette": {
				"popup": {
				"background": "#eb6c44",
				"text": "#ffffff"
				},
				"button": {
				"background": "#f5d948"
				}
			},
			"type": "opt-in",
			"content": {
				"href": "https://www.kybernethik.org/datenschutz/"
			}
			});
		</script>
	</body>
</html>
