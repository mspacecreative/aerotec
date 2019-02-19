<div class="section_container gallery-block">
	<div class="row_container">
		<div class="photo-gallery">
			<?php 
			$images = get_field('photo_gallery');
			$size = 'full';
						
			if( $images ):
			foreach( $images as $image ): ?>
			<div>
				<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
			</div> 
			<?php endforeach;
			endif; ?>
		</div>
	</div>
</div>