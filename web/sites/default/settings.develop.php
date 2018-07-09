<?php

# Turn off assets optimized
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

// Set logging level to verbose
$config['system.logging']['error_level'] = 'verbose';

# Disable cache
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';

# Twig debug
$settings['twig_debug'] = TRUE;

// Local file directory configuration
$settings['file_public_path'] = 'sites/default/files';
$settings['file_private_path'] = 'sites/default/files/private';
$config['system.file']['path']['temporary'] = '/tmp';

# kint
$kintClass = DRUPAL_ROOT . '/modules/contrib/devel/kint/kint/Kint.class.php';
if (file_exists($kintClass)) {
  require_once DRUPAL_ROOT . '/modules/contrib/devel/kint/kint/Kint.class.php';
  Kint::$maxLevels = 5;
}

