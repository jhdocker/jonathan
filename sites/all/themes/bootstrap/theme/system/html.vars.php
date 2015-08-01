<?php
/**
 * @file
 * html.vars.php
 *
 * @see html.tpl.php
 */

/**
 * Implements hook_preprocess_html().
 */
function bootstrap_preprocess_html(&$variables) {
  switch (theme_get_setting('bootstrap_navbar_position')) {
    case 'fixed-top':
      $variables['classes_array'][] = 'navbar-is-fixed-top';
      break;

    case 'fixed-bottom':
      $variables['classes_array'][] = 'navbar-is-fixed-bottom';
      break;

    case 'static-top':
      $variables['classes_array'][] = 'navbar-is-static-top';
      break;
  }
  drupal_add_css('http://fonts.googleapis.com/css?family=Roboto+Slab:200,400,700', array('type' => 'external'));
  drupal_add_css('http://fonts.googleapis.com/css?family=Montserrat:700', array('type' => 'external'));
 
}
