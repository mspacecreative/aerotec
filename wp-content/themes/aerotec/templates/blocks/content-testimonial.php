<!-- TESTIMONIALS SECTION -->
<?php if ( get_field('testimonials_bg_img') ): ?>
<div class="testimonials-container overflow-fix" style="background-image: url(<?php the_field('testimonials_bg_img'); ?>);">
<?php endif; ?>
	<div class="inner">
		<h1 class="section-title light"><?php echo esc_html_e('Testimonials'); ?></h1>
		<?php echo do_shortcode('[testimonials_carousel]'); ?>
		<a class="cta-button" href="#"><?php echo esc_html_e('View all testimonials'); ?></a>
	</div>
</div>
<!-- / TESTIMONIALS SECTION -->