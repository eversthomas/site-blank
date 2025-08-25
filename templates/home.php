<?php namespace ProcessWire;

// Template file for “home” template used by the homepage
// ------------------------------------------------------
// The #content div in this file will replace the #content div in _main.php
// when the Markup Regions feature is enabled, as it is by default. 
// You can also append to (or prepend to) the #content div, and much more. 
// See the Markup Regions documentation:
// https://processwire.com/docs/front-end/output/markup-regions/

?>

<div pw-id="header-home">
	header der Startseite
</div>

<div pw-id="main">
	<header>
		<h2><?= $page->title; ?></h2>
		<p class="summary">Ein kurzer Einleitungssatz, der den Inhalt klar zusammenfasst.</p>
	</header>

	<section aria-labelledby="abschnitt-1" data-section="content-block">
		<?= $page->body; ?>
	</section>

	<footer>
		<p>Zuletzt aktualisiert am <time datetime="2025-08-25">25. August 2025</time>.</p>
	</footer>
</div>	
