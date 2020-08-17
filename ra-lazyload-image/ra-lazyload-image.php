<?php
/*
Plugin Name: Recent Articles Lazyload Image
Plugin URI: https://github.com/JulianSuringa/plugins/tree/master/ra-lazyload-image
Description: Specefic lazyload image in recent articles
Version: 1.0.0
Author:  Julian SUringa
Author URI: https://github.com/JulianSuringa
*/

/*
   Copyright (C)  2017 KeyCDN

   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License along
   with this program; if not, write to the Free Software Foundation, Inc.,
   51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

/* Check & Quit */
defined('ABSPATH') OR exit;


function ra_lazyload_image_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.1', 'all');
 
  wp_enqueue_script( 'observer', get_template_directory_uri() . '/js/observer.js', array (), 1.1, true);
 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'recent_articles_lazyload_image_scripts' );