<?php

// CUSTOMIZE POST META DATA
if ( ! function_exists( 'et_divi_post_meta' ) ) :
function et_divi_post_meta() {
	$postinfo = is_single() ? et_get_option( 'divi_postinfo2' ) : et_get_option( 'divi_postinfo1' );

	if ( $postinfo ) :
		echo '<p class="post-meta">';
		echo _e('Posted '); echo et_pb_postinfo_meta( $postinfo, et_get_option( 'divi_date_format', 'M j, Y' ), esc_html__( '0 comments', 'Divi' ), esc_html__( '1 comment', 'Divi' ), '% ' . esc_html__( 'comments', 'Divi' ) );
		echo '</p>';
	endif;
}
endif;

// THUMBNAIL SIZING
if (function_exists('add_theme_support'))
{
    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size( 'headshot', 205, 205, array( 'center', 'center' ) );
    add_image_size( 'sponsorlogo', 300, 205, array( 'center', 'center' ) );
}
 
function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'headshot' => __( 'Head Shot' ),
        'sponsorlogo' => __( 'Sponsor Logo' ),
    ) );
}

/* MAIN STYLESHEET */
function my_theme_enqueue_styles() {

	$parent_style = 'parent-style';
	
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ));
	
	wp_enqueue_style( 'slick-style', get_stylesheet_directory_uri() . '/css/slick.css', array(), null );
	wp_enqueue_style('slick-style');
	
	wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/css/slick-theme.css', array(), null );
	wp_enqueue_style('slick-theme');
	
	wp_enqueue_script( 'slick-script', get_stylesheet_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script('slick-script');
	
	wp_register_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
	wp_enqueue_script('scripts');
	
	/*wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto', array(), '1.0', 'all');
	wp_enqueue_style('google-fonts');*/
	
	wp_register_style('typekit', 'https://use.typekit.net/gfo2vxu.css', array(), '1.0', 'all');
	wp_enqueue_style('typekit');
	
	
	wp_register_script('fontawesome', 'https://use.fontawesome.com/6ccd600e51.js', array('jquery'), null, true);
	wp_enqueue_script('fontawesome');
}

function footer_scripts() {
	
	wp_register_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
	wp_enqueue_script('scripts');
	
	wp_register_script('animate', get_stylesheet_directory_uri() . '/js/css3-animate-it.js', array('jquery'), null, true);
	wp_enqueue_script('animate');
	
	wp_register_script('fontawesome', 'https://use.fontawesome.com/6ccd600e51.js', array('jquery'), null, true);
	wp_enqueue_script('fontawesome');
	
	wp_register_script('para-script', get_stylesheet_directory_uri() . '/js/dzsparallaxer/dzsparallaxer.js', array('jquery'), null, true);
	wp_enqueue_script('para-script');
	
	wp_register_script('polyclip', get_stylesheet_directory_uri() . '/js/polyclip.js', array('jquery'), null, true);
	wp_enqueue_script('polyclip');
}

/* ACF OPTIONS PAGE */
if( function_exists('acf_add_options_sub_page') ) {

	acf_add_options_sub_page('Footer');
	acf_add_options_sub_page('Call-out Box');
	acf_add_options_sub_page('Contact Box');
	
}

function remove_FooterArea6() {
	unregister_sidebar('sidebar-6');
	unregister_sidebar('sidebar-7');
}

// ARTISTS LOOP SHORTCODE
function artistsLoop() {
	ob_start();
		get_template_part('includes/loops/loop-artists');
	return ob_get_clean();
}

function artistsLoopFull() {
	ob_start();
		get_template_part('includes/loops/loop-artists-full');
	return ob_get_clean();
}

function comediansLoopFull() {
	ob_start();
		get_template_part('includes/loops/loop-comedians-full');
	return ob_get_clean();
}

// SERVICES CENTRES MAP
function serviceCentresMap() {
	ob_start();
		get_template_part('templates/maps/service-centres-map');
	return ob_get_clean();
}

// SPONSOR LOGO ON HOME PAGE
function sponsorLogos() {
	ob_start();
		get_template_part('includes/sponsor-logos-home');
	return ob_get_clean();
}

// TESTIMONIALS ON HOME PAGE
function testimonialsHome() {
	ob_start();
		get_template_part('templates/carousel/testimonials-loop');
	return ob_get_clean();
}

// SPONSOR LOGOS IN FOOTER
function sponsorLogosFooter() {
	ob_start();
		get_template_part('includes/sponsor-logos-footer');
	return ob_get_clean();
}

// SPONSOR LOGOS ON SPONSOR PAGE
function sponsorPageLogos() {
	ob_start();
		get_template_part('includes/sponsor-page-logos');
	return ob_get_clean();
}

// MAILCHIMP FORM
function mailChimpForm() {
	ob_start();
		get_template_part('includes/forms/mailchimp_form');
	return ob_get_clean();
}

// CUSTOM STYLES TO TINY MCE
function wpb_mce_buttons_2($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}

// HOME PAGE SLIDER
function heroSlider() {
	ob_start();
		get_template_part('templates/hero-slider');
	return ob_get_clean();
}

function my_mce_before_init_insert_formats( $init_array ) {
 
    $style_formats = array(  

        array(  
            'title' => 'White CTA Button',  
            'block' => 'a',  
            'classes' => 'cta_button_light',
            'wrapper' => true,
             
        ),  
        array(  
            'title' => 'Green CTA Button',  
            'block' => 'a',  
            'classes' => 'cta_button',
            'wrapper' => true,
        ),
    );  
    $init_array['style_formats'] = json_encode( $style_formats );  
     
    return $init_array;  
   
}

add_action('acf/init', 'my_acf_init');
function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		/*// register hero slider block
		acf_register_block(array(
			'name'				=> 'heroslider',
			'title'				=> __('Hero Slider'),
			'description'		=> __('Home page carousel'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="792px" height="612px" viewBox="0 0 792 612" enable-background="new 0 0 792 612" xml:space="preserve">
			<path d="M625.5,497.25v19.125c0,31.688-25.688,57.375-57.375,57.375h-459c-31.688,0-57.375-25.688-57.375-57.375v-306  c0-31.688,25.688-57.375,57.375-57.375h19.125v57.375h-11.953c-3.961,0-7.172,3.211-7.172,7.172v291.656  c0,3.961,3.211,7.172,7.172,7.172h444.656c3.961,0,7.172-3.211,7.172-7.172V497.25H625.5z M675.703,95.625H231.047  c-3.961,0-7.172,3.211-7.172,7.172v291.656c0,3.961,3.211,7.172,7.172,7.172h444.656c3.961,0,7.172-3.211,7.172-7.172V102.797  C682.875,98.836,679.664,95.625,675.703,95.625z M682.875,38.25c31.688,0,57.375,25.688,57.375,57.375v306  c0,31.688-25.688,57.375-57.375,57.375h-459c-31.688,0-57.375-25.688-57.375-57.375v-306c0-31.688,25.688-57.375,57.375-57.375  H682.875z M367.312,172.125c0,26.406-21.407,47.812-47.812,47.812s-47.812-21.407-47.812-47.812s21.407-47.812,47.812-47.812  S367.312,145.719,367.312,172.125z M281.25,286.875l47.233-47.233c5.601-5.601,14.683-5.601,20.286,0L396,286.875l123.732-123.733  c5.602-5.601,14.684-5.601,20.286,0l85.481,85.483v95.625H281.25V286.875z"/>
			</svg>',
			'keywords'			=> array( 'heroslider', 'carousel' ),
		));
		
		// register contact box block
		acf_register_block(array(
			'name'				=> 'contact-bar',
			'title'				=> __('Contact Bar'),
			'description'		=> __('Social media and contact buttons'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="792px" height="612px" viewBox="0 0 792 612" enable-background="new 0 0 792 612" xml:space="preserve">
			<path d="M687.656,461.63c32.871-32.394,52.594-73.034,52.594-117.38c0-95.625-91.441-174.635-210.614-188.74
				C491.983,86.66,403.53,38.25,300.375,38.25C163.034,38.25,51.75,123.834,51.75,229.5c0,44.227,19.723,84.867,52.594,117.38
				c-18.288,36.696-44.585,65.145-45.063,65.622c-7.53,8.009-9.682,19.723-5.259,29.883c4.303,10.16,14.344,16.734,25.341,16.734
				c63.949,0,115.586-24.145,149.653-46.378c10.997,2.511,22.353,4.423,33.947,5.857C300.495,487.209,388.589,535.5,491.625,535.5
				c24.862,0,48.769-2.869,71.479-8.128c34.066,22.113,85.585,46.378,149.653,46.378c10.997,0,20.918-6.574,25.341-16.734
				c4.303-10.16,2.271-21.874-5.26-29.883C732.361,526.774,705.944,498.326,687.656,461.63z M218.138,351.303l-20.44,13.268
				c-16.854,10.877-34.066,19.483-51.518,25.58c3.228-5.618,6.455-11.595,9.562-17.691l18.527-37.174L144.626,306
				c-16.137-16.017-35.501-42.194-35.501-76.5c0-72.556,87.616-133.875,191.25-133.875s191.25,61.319,191.25,133.875
				s-87.616,133.875-191.25,133.875c-19.723,0-39.445-2.271-58.57-6.693L218.138,351.303L218.138,351.303z M647.374,420.75
				l-29.524,29.166l18.527,37.174c3.108,6.096,6.336,12.072,9.562,17.69c-17.451-6.096-34.664-14.702-51.518-25.579l-20.439-13.269
				l-23.787,5.499c-19.125,4.422-38.848,6.693-58.57,6.693c-64.547,0-122.161-24.025-156.944-59.407
				C455.766,405.809,549,326.201,549,229.5c0-4.064-0.479-8.009-0.837-11.953c76.979,17.332,134.712,67.894,134.712,126.703
				C682.875,378.556,663.511,404.732,647.374,420.75z"/>
			</svg>',
			'keywords'			=> array( 'contact', 'social media' ),
		));
		
		// register services section block
		acf_register_block(array(
			'name'				=> 'services',
			'title'				=> __('Services Block'),
			'description'		=> __('List of services'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'services', 'offerings' ),
		));
		
		// register approved service centres map block
		acf_register_block(array(
			'name'				=> 'services-map',
			'title'				=> __('Approved Services Map Block'),
			'description'		=> __('Shows map of approved service centres'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'google map', 'service centres' ),
		));*/
		
		// register approved service centres map block
		acf_register_block(array(
			'name'				=> 'home',
			'title'				=> __('Home page sections'),
			'description'		=> __('Edit and organize home page content'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'home page', 'content' ),
		));
		
		acf_register_block(array(
			'name'				=> 'testimonial',
			'title'				=> __('Testimonial Block'),
			'description'		=> __('Add and edit customer testimonials'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'home page', 'content' ),
		));
		
		acf_register_block(array(
			'name'				=> 'affiliations',
			'title'				=> __('Affiliations Block'),
			'description'		=> __('Add affiliation logos and links'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'home page', 'content' ),
		));
	}
}

function my_acf_block_render_callback( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/templates/blocks/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/templates/blocks/content-{$slug}.php") );
	}
}

// ACTIONS, OPTIONS AND FILTERS
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
add_action('init', 'footer_scripts');
add_option( 'my_default_pic', get_stylesheet_directory_uri() . '/img/wood-frame-bg.jpg', '', 'yes' );
add_action( 'widgets_init', 'posts_sidebar' );
add_action( 'widgets_init', 'remove_FooterArea6', 11 );

// SHORTCODES
add_shortcode( 'artists_list', 'artistsLoop' );
add_shortcode( 'artists_list_full', 'artistsLoopFull' );
add_shortcode( 'comedian_list', 'comediansLoopFull' );
add_shortcode( 'sponsor_logos_home', 'sponsorLogos' );
add_shortcode( 'sponsor_page_logos', 'sponsorPageLogos' );
add_shortcode( 'mailchimp_form', 'mailChimpForm' );
add_shortcode( 'sponsor_logos_footer', 'sponsorLogosFooter' );
add_shortcode( 'hero_slider', 'heroSlider' );
add_shortcode( 'service_centres_map', 'serviceCentresMap' );
add_shortcode( 'testimonials_carousel', 'testimonialsHome' );

// CUSTOM THUMBNAIL IN BACKEND
add_filter( 'image_size_names_choose', 'my_custom_sizes' );
// CUSTOM STYLES IN TINY MCE
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );