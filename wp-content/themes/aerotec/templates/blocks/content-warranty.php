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
	<a href="/resources/warranty/"><div class="one-half bg-img" style="background-image: url(<?php the_field('warranty_img'); ?>);"></div>
		
	</div>
	<?php endif; ?>
</div>