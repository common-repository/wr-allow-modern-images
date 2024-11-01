<?php
/*
Plugin Name: WR Allow Modern Images
Plugin URI: https://wordpress.org/plugins/wr-allow-modern-images
Description: Adds support for modern image formats to WordPress.
Version: 1.0.1
Author: Web Raider - RazielKanos
Author URI: https://web-raider.com
License: GPL2
*/

// Add support for modern image formats
function webraiderrk_allow_modern_images( $mime_types ) {
 $mime_types['heic'] = 'image/heic';
 $mime_types['heif'] = 'image/heif';
 $mime_types['heics'] = 'image/heic-sequence';
 $mime_types['heifs'] = 'image/heif-sequence';
 $mime_types['avif'] = 'image/avif';
 $mime_types['avifs'] = 'image/avif-sequence';
 return $mime_types;
}
add_filter( 'upload_mimes', 'webraiderrk_allow_modern_images');
