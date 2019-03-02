<?php
/*
 * Plugin Name: Matt's Sticky Top Menu
 * Plugin URI: http://mspacecreative.com
 * Description: Sticky top menu, appears after scroll
 * Version: 1.0
 * Author: Matt Cyr
 * Author URI: http://mspacecreative.com
 */
 
 function sticky_menu() {
 	wp_enqueue_style( 'sticky-css', plugin_dir_url( __FILE__ ) . 'css/sticky.css', array(), null );
 	wp_enqueue_script( 'sticky-script', plugin_dir_url( __FILE__ ) . 'js/mobile.js', array( 'jquery' ), '1.0', true );
 }
 
 function stickymenuPlugin() {
 	ob_start(); ?>
 <div class="stickymenu">
 	<div class="stickymenu-inner clearfix">
 		<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
 		<a href="<?php echo home_url(); ?>">
 			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/ae-logo.svg" />
 		</a>
 		<ul class="contact-menu">
 			<?php if ( get_field('phone_number', 'options') ): ?>
 			<li><a class="click-number" href="tel:+1<?php the_field('phone_number', 'options'); ?>"><span><?php the_field('phone_number', 'options'); ?></span></a></li>
 			<?php endif; ?>
 			<?php if ( get_field('email_button', 'options') ): ?>
 			<li>
 				<a href="mailto:<?php the_field('email_button', 'options'); ?>"><?php echo esc_html_e('Email Us'); ?></a>
 			</li>
 			<?php endif; ?>
 			<?php if ( get_field('quote_button', 'options') ): ?>
 			<li>
 				<a href="<?php the_field('quote_button', 'options'); ?>"><?php echo esc_html_e('Request a quote'); ?></a>
 			</li>
 			<?php endif; ?>
 		</ul>
 	</div>
 </div>
 <?php echo ob_get_clean();
 }
 
function stickymenuPluginBottom() {
 	ob_start(); ?>
 <div class="stickymenu-mobile">
 	<ul>
 		<?php if ( get_field('phone_number', 'options') ): ?>
 		<li><a class="click-number" href="tel:+1<?php the_field('phone_number', 'options'); ?>"><span id="phoneNumber"><?php esc_html_e('Call'); ?></span></a></li>
 		<?php endif; ?>
 		<?php if ( get_field('email_button', 'options') ): ?>
 		<li>
 			<a href="mailto:<?php the_field('email_button', 'options'); ?>"><?php echo esc_html_e('Email'); ?></a>
 		</li>
 		<?php endif; ?>
 		<?php if ( get_field('quote_button', 'options') ): ?>
 		<li>
 			<a href="<?php the_field('quote_button', 'options'); ?>"><?php echo esc_html_e('Request a quote'); ?></a>
 		</li>
 		<?php endif; ?>
 	</ul>
 </div>
 <?php echo ob_get_clean();
 }
 
add_action( 'wp_head', 'stickymenuPlugin' );
add_action( 'wp_head', 'stickymenuPluginBottom' );
add_action( 'wp_enqueue_scripts', 'sticky_menu' );