<?php
/**
 * Plugin Name: SRD WP MAIL SMTP FIXES
 * Description: Adds custom options to WP MAIL SMTP plugin
 * Author: charliecek
 * Author URI: http://charliecek.eu/
 * Version: 0.1
 */
 
add_filter('wp_mail_smtp_custom_options','srd_wp_mail_smtp_custom_options');

function srd_wp_mail_smtp_custom_options($phpmailer) {
  $phpmailer->SMTPOptions = [
    'ssl' => [
      'verify_peer' => false,
      'verify_peer_name' => false
    ]
  ];
  return $phpmailer;
}