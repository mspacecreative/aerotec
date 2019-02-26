<div class="section_container">
	<div class="row_container clearfix">
		<?php
		$image = get_field('image');
		$size = 'full'; 
		
		if( $image ) { ?>
		<div class="one_half_col static-img">
			<?php echo wp_get_attachment_image( $image, $size ); ?>
		</div>
		<?php } ?>
		<div class="one_half_col">
			<?php the_field('content'); ?>
		</div>
	</div>
</div>