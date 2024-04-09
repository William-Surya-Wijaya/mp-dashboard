<?php
$vendorsFolder = __DIR__.'/';
$files = scandir($vendorsFolder);

// Mencari dan load semua vendor di dalam directory ini
foreach ($files as $file) {
  if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
    require_once $vendorsFolder . $file;
  }
}