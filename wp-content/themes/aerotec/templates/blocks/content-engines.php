<div class="section_container">
	<div class="row_container clearfix">
		<?php if( have_rows('lycoming') ):
		while( have_rows('lycoming') ): the_row(); ?>
		<div class="one_half_col">
			<?php
			$lycominglogo = get_sub_field('lycoming_logo');
			$lycomingengine = get_sub_field('lycoming_engine');
			$size = 'medium'; 
			
			if( $lycominglogo == 'true' && $lycomingengine == 'true' ) { ?>
			<div class="one_half_col">
				<?php echo wp_get_attachment_image( $lycominglogo, $size ); ?>
				<?php echo wp_get_attachment_image( $lycomingengine, $size ); ?>
			</div>
			<?php } ?>
		</div>
		<?php 
		endwhile;
		endif; ?>
		
		<?php if( have_rows('continental') ):
		while( have_rows('continental') ): the_row(); ?>
		<div class="one_half_col">
			<?php
			$continentallogo = get_sub_field('continental_logo');
			$continentalengine = get_sub_field('continental_engine');
			$size = 'medium'; 
			
			if( $continentallogo == 'true' && $continentalengine == 'true' ) { ?>
			<div class="one_half_col">
				<?php echo wp_get_attachment_image( $continentallogo, $size ); ?>
				<?php echo wp_get_attachment_image( $continentalengine, $size ); ?>
			</div>
			<?php } ?>
		</div>
		<?php 
		endwhile;
		endif; ?>
	</div>
</div>