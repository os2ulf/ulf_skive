<?php

/**
 * Implements hook_preprocess_page().
 */
function ulf_skive_preprocess_page(&$variables) {
    // Hamburger icon.
    $variables['hamburger_icon_path'] = $variables['directory'];
}
