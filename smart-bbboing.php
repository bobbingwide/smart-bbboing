<?php
/*
Plugin Name: smart bbboing
Plugin URI: http://www.oik-plugins.com/smart-bbboing
Description: Localize your website into the bbboing language
Text Domain: smart-bbboing
Domain Path: /languages
Version: 0.1
Author: bobbingwide
Author URI: http://www.bobbingwide.com
License: GPL2

    Copyright 2013 Bobbing Wide (email : herb@bobbingwide.com )

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License version 2,
    as published by the Free Software Foundation.

    You may NOT assume that you can use any other version of the GPL.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    The license for this software can likely be found here:
    http://www.gnu.org/licenses/gpl-2.0.html

*/
  
/** 
 * Implement 'gettext' filter for smart-bbboing
 *
 * @param string - the localized version of the text
 * @param string - the original text
 * @param string - the plugin text domain
 * @return string - the bbboinged text
 */
function smart_bbboing_gettext( $translated, $text, $domain ) {
  $bbboinged = bbboing( $translated );
  return( $bbboinged );  
}

/**
 * Implement "bbboing_loaded" for smart-bbboing
 * 
 * If we're not doing AJAX then make sure "bbboing.inc" is loaded
 * as we'll need it in smart_bbboing_gettext()
 */
function smart_bbboing_bbboing_loaded() {
  bw_trace2();
  if ( defined('DOING_AJAX') && DOING_AJAX ) { 
    // Perhaps we should be testing the client's language! 
  } else {
    if ( is_callable( "oik_require" ) ) {
      oik_require( "bbboing.inc", "bbboing" );
    } else {
      $file = WP_PLUGINS_DIR . "/bbboing/bbboing.inc";
      if ( file_exists( $file ) ) { 
        require_once( $file );
      }  
    }  
    if ( is_callable( "bbboing" ) ) {
      add_filter( "gettext", "smart_bbboing_gettext", 10, 3 );
    }  
  }
}  

/**
 * Start up processing for smart_bbboing
 */
function smart_bbboing_plugin_loaded() {
  add_action( "bbboing_loaded", "smart_bbboing_bbboing_loaded" );
}

smart_bbboing_plugin_loaded();
