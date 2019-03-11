<div class="section_container">
	<div class="row_container clearfix">
		<div class="one_half_col">
			<?php
			$lycominglogo = get_field('lycoming_logo');
			$lycomingengine = get_field('lycoming_engine');
			$size = 'medium'; 
			
			if( $lycominglogo == 'true' && $lycomingengine == 'true' ) { ?>
			<div class="one_half_col">
				<?php echo wp_get_attachment_image( $lycominglogo, $size ); ?>
				<?php echo wp_get_attachment_image( $lycomingengine, $size ); ?>
			</div>
			<?php } ?>
		</div>
		<div class="one_half_col">
			<?php
			$continentallogo = get_field('continental_logo');
			$continentalengine = get_field('continental_engine');
			$size = 'medium'; 
			
			if( $continentallogo == 'true' && $continentalengine == 'true' ) { ?>
			<div class="one_half_col">
				<?php echo wp_get_attachment_image( $continentallogo, $size ); ?>
				<?php echo wp_get_attachment_image( $continentalengine, $size ); ?>
			</div>
			<?php } ?>
		</div>
	</div>
</div>