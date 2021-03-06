<?php
/** 
 * Functions
 *
 * Smart functions
 *
 * @link NCH
 *
 * @package NCH
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

  include 'config.php';

  /* Define Variables  */
  $GLOBALS['url'] = get_template_directory_uri();
  $GLOBALS['root'] = '10.1.10.96/nch';
  $GLOBALS['docpath'] = $_SERVER['DOCUMENT_ROOT'].'/nch';

  /* Add Styles, Fonts, and Javascript */
  function my_enqueue_style() {
    wp_enqueue_style('webtype', 'http://cloud.webtype.com/css/c7d7a6d5-4e15-4b27-bbae-3849f98e1ac4.css');
    wp_enqueue_style('styles', $GLOBALS['url'].'/prod/styles.css');
    wp_enqueue_script('myfonts', $GLOBALS['url'].'/assets/fonts/nch-myfonts.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('underscore', $GLOBALS['url'].'/prod/underscore.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('scripts-min', $GLOBALS['url'].'/prod/scripts.js', array('jquery'), '1.0.0', true);
  }
  add_action( 'wp_enqueue_scripts', 'my_enqueue_style' );
  // add_theme_support( 'post-thumbnails' );


  /* Remove Admin Login */
  function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }
  add_action('get_header', 'remove_admin_login_header');


  /* remove auto paragraph tag from the-content */
  remove_filter('the_content', 'wpautop');

  
  /**
  * isMobile
  *
  * returns true/false if there is a match for browser. 
  */
  function isMobile() {
    return preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackbe‌​rry|iemobile|bolt|bo‌​ost|cricket|docomo|f‌​one|hiptop|mini|oper‌​a mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|‌​webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
  }

  
  /**
  *
  * test
  *
  * shortcut to test function
  */
  $test = function($var, $mes){
    echo "<script>console.log('".$var.", outputs ".$mes."');</script>";
  }

?>