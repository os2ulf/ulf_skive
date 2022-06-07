<?php

/**
 * Implements hook_preprocess_page().
 */
function ulf_skive_preprocess_page(&$variables) {
    // Hamburger icon.
    $variables['hamburger_icon_path'] = $variables['directory'];
}

function ulf_skive_preprocess_html(&$variables) {
    drupal_add_js(
        '/*<![CDATA[*/
(function() {
var sz = document.createElement(\'script\'); sz.type = \'text/javascript\'; sz.async = true;
sz.src = \'//siteimproveanalytics.com/js/siteanalyze_273649.js\';
var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(sz, s);
})();
/*]]>*/',
        [
            'type' => 'inline',
            'scope' => 'footer',
        ]
    );
}
