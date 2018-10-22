<?php

/**
 * include external css files
 */

drupal_add_css('https://fonts.googleapis.com/css?family=Open+Sans' , array('group' => CSS_THEME, 'type' => 'external'));


/**
 * include js files
 **/

drupal_add_js('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js' , 'external');

drupal_add_js(drupal_get_path('theme', 'bugattis') . '/js/bootstrap.min.js');

drupal_add_js(drupal_get_path('theme', 'bugattis') . '/js/jquery.backstretch.js');

drupal_add_js(drupal_get_path('theme', 'bugattis') . '/js/custom.js');

drupal_add_js('https://code.jquery.com/jquery-migrate-1.2.1.min.js' , 'external');

drupal_add_js(drupal_get_path('theme', 'bugattis') . '/js/slick.min.js');

drupal_add_js(drupal_get_path('theme', 'bugattis') . '/js/custom-slick.js');



