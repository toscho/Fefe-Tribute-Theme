<?php # -*- coding: utf-8 -*-
/**
 * @package    Fefe
 *
 * The original site has no <meta name=viewport>
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html <?php language_attributes(); ?>>
<title><?php
$current_title = wp_title( '|', FALSE );
print empty ( $current_title ) ? get_bloginfo( 'name' ) : $current_title;
?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
// Stylesheet is inserted per wp_enqueue_style().
wp_head();