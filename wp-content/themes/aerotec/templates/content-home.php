

<div class="landing-area">
	<div class="outer-container">
		<div class="contact-bar">
			<ul>
				<?php if ( get_field('linkedin', 'options') ): ?>
				<li><a href="<?php the_field('linkedin', 'options'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				<?php endif; ?>
				<?php if ( get_field('twitter', 'options') ): ?>
				<li><a href="<?php the_field('twitter', 'options'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<?php endif; ?>
				<?php if ( get_field('facebook', 'options') ): ?>
				<li><a href="<?php the_field('facebook', 'options'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<?php endif; ?>
			</ul>
			<?php if ( get_field('phone_number', 'options') ): ?>
			<p class="phone-number"><a class="click-number" href="tel:+1<?php the_field('phone_number', 'options'); ?>"><span id="phoneNumber"><?php the_field('phone_number', 'options'); ?></span></a></p>
			<?php endif; ?>
			<ul class="cta-buttons">
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
	<div class="hero-slider">
		<?php if( have_rows('image_slider') ):
		while ( have_rows('image_slider') ) : the_row(); 
		
			if ( get_sub_field('slide_background_image') ): ?>
				
		    <div style="background-image: url(<?php the_sub_field('slide_background_image'); ?>);">
				<div class="slider-header-underlay"></div>
				<div class="inner-content">
						
					<?php if ( get_sub_field('slide_content') ): ?>
						
					<h1><?php the_sub_field('slide_content'); ?></h1>
						
					<?php endif; ?>
						
				</div><!-- / inner-content -->
			</div>
				
			<?php endif;
			
		endwhile;
			
		else :
		
		endif; ?>
			
	</div><!-- / hero-slider -->
</div>

<?php if( have_rows('services_section') ):
while ( have_rows('services_section') ) : the_row(); ?>
<div class="services-section clearfix" style="background: url(<?php the_sub_field('service_section_bg_img'); ?>);">
	
	<div class="section-title-container">
		<h1 class="section-title light"><?php the_sub_field('section_title'); ?></h1>
	</div><!-- / section-title-container -->
	
	<div class="inner">
		
		<div class="service-block-container clearfix light">
			
			<?php if( have_rows('service_blocks') ):
			while ( have_rows('service_blocks') ) : the_row(); ?>
			
			<div class="service">
				
				<div class="service-icon">
					<?php 
					$image = get_sub_field('service_icon');
					$size = 'thumbnail';
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
					?>
				</div><!-- / service-icon -->
				
				<?php if ( get_sub_field('service_blurb') ): ?>
				<div class="service-blurb">
					<?php the_sub_field('service_blurb'); ?>
				</div><!-- / service-blurb -->
				<?php endif; ?>
				
			</div><!-- / service -->
			<?php endwhile;
			
			else :
			
			endif; ?>
			
		</div><!-- / service-block-container -->
		
		<div class="buttons-container">
			
			<?php if( have_rows('service_buttons') ): ?>
			
			<ul class="cta-buttons inline">
				<?php while ( have_rows('service_buttons') ) : the_row(); ?>
				<li>
					<a href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php endwhile;
				else : ?>
			</ul>
		
			<?php endif; ?>
		
		</div><!-- / buttons-container -->
		
	</div><!-- / inner -->
	
</div><!-- / services-section -->
<?php endwhile;

else :

endif; ?>

<div class="approved-centres">
	<div class="title-container">
		<h1 class="section-title"><?php esc_html_e('Approved Service Centres'); ?></h1>
	</div>
	<?php echo do_shortcode('[service_centres_map]'); ?>
</div>

<div class="warranty-section clearfix">
	<div class="warranty-badge">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/warranty-badge.svg" />
	</div>
	<?php if ( get_field('warranty_blurb') ): ?>
	<div class="one-half">
		<div class="warranty-blurb-container">
			<?php the_field('warranty_blurb'); ?>
		</div>
	</div>
	<?php endif; ?>
	<?php if ( get_field('warranty_img') ): ?>
	<div class="one-half bg-img" style="background-image: url(<?php the_field('warranty_img'); ?>);">
		
	</div>
	<?php endif; ?>
</div>