<?php
if (!defined('ABSPATH')) {
    exit;
}

if (!defined('TABAIX_SEO_STANDALONE_FEATURES_LOADED')) {
    define('TABAIX_SEO_STANDALONE_FEATURES_LOADED', true);
}

if (!defined('TABAIX_SEO_PLUGIN_ROOT')) {
    define('TABAIX_SEO_PLUGIN_ROOT', dirname(__DIR__));
}

if (!defined('TABAIX_SEO_PLUGIN_FILE')) {
    define('TABAIX_SEO_PLUGIN_FILE', TABAIX_SEO_PLUGIN_ROOT . '/tabaix-seo-optimizer.php');
}

if (!defined('TABAIX_SEO_PLUGIN_DIR')) {
    define('TABAIX_SEO_PLUGIN_DIR', TABAIX_SEO_PLUGIN_ROOT . '/');
}

if (!defined('TABAIX_SEO_PLUGIN_URL')) {
    define('TABAIX_SEO_PLUGIN_URL', plugins_url('', TABAIX_SEO_PLUGIN_FILE));
}

$standalone_tabaix_seo_includes = [
    'includes/class-tabaix-seo-settings.php',
    'includes/class-tabaix-seo-api.php',
    'includes/class-tabaix-seo-content-generator.php',
    'includes/class-tabaix-seo-seo-optimizer.php',
    'includes/class-tabaix-seo-image-generator.php',
    'includes/class-tabaix-seo-analytics.php',
    'includes/class-tabaix-seo-comment-moderator.php',
    'includes/class-tabaix-seo-recommendations.php',
    'includes/class-tabaix-seo-seo-meta.php',
    'includes/class-tabaix-seo-alt-text.php',
    'includes/class-tabaix-seo-internal-links.php',
    'includes/class-tabaix-seo-editor-links.php',
    'includes/class-tabaix-seo-chatbot.php',
    'includes/class-tabaix-seo-ajax.php',
    'includes/class-tabaix-seo-admin.php',
    'includes/class-tabaix-seo-toc.php',
    'includes/class-tabaix-seo-pros-cons.php',
    'includes/class-tabaix-seo-imagetight.php',
    'includes/class-tabaix-seo-head-deduplicator.php',
    'includes/class-tabaix-seo-social-share.php',
    'includes/class-tabaix-seo-seo-translator.php',
];

foreach ($standalone_tabaix_seo_includes as $standalone_tabaix_seo_file) {
    $standalone_tabaix_seo_path = TABAIX_SEO_PLUGIN_ROOT . '/' . $standalone_tabaix_seo_file;
    if (file_exists($standalone_tabaix_seo_path)) {
        require_once $standalone_tabaix_seo_path;
    }
}
