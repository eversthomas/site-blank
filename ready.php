<?php namespace ProcessWire;

if(!defined("PROCESSWIRE")) die();

/** @var ProcessWire $wire */

/**
 * ProcessWire Bootstrap API Ready
 * ===============================
 * This ready.php file is called during ProcessWire bootstrap initialization process.
 * This occurs after the current page has been determined and the API is fully ready
 * to use, but before the current page has started rendering. This file receives a
 * copy of all ProcessWire API variables.
 *
 */

/** @var Scss $scss */
$scss = $this->wire->modules->get('Scss');

// watch all files in /site/templates/scss
$watchFiles = $files->find(
  $config->paths->templates . "styles",
  ['extensions' => 'scss']
);

// set the import path so that relative @import statements work
$scss->compiler()->setImportPaths($config->paths->templates . "styles");

// compile SCSS to CSS if any of the watched files changed
$scss->compileIfChanged(
  // create this file with the content from the uikit docs:
  // https://getuikit.com/docs/sass#how-to-build
  input: $config->paths->templates . "styles/main.scss",
  watch: $watchFiles,
  output: $config->paths->templates . "styles/main.css",
  style: 'compressed',
);
