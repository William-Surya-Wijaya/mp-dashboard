<?php
$controllersFolder = __DIR__.'/';
$files = scandir($controllersFolder);

// Mencari dan load semua vendor di dalam directory ini
foreach ($files as $file) {
  if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
    require_once $controllersFolder . $file;
  }
}