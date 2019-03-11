<div class="section_container">
	<div class="row_container clearfix">
		
		<?php if( have_rows('lycoming') ): ?>
		
		<div class="one_half_col">
			
			<?php while( have_rows('lycoming') ): the_row();
			
			$lycominglogo = get_sub_field('lycoming_logo');
			$lycomingengine = get_sub_field('lycoming_engine');
			$size = 'medium'; ?>
	
			<div class="one_half_col">
				<?php echo wp_get_attachment_image( $lycominglogo, $size ); ?>
				<?php echo wp_get_attachment_image( $lycomingengine, $size ); ?>
			</div>
			
			<?php endwhile; ?>
			
		</div>
		
		<?php endif; ?>
		
		<?php if( have_rows('continental') ): ?>
		
		<div class="one_half_col">
			<?php while( have_rows('continental') ): the_row();
			
			$continentallogo = get_sub_field('continental_logo');
			$continentalengine = get_sub_field('continental_engine');
			$size = 'medium'; ?>
			
			<div class="one_half_col">
				<?php echo wp_get_attachment_image( $continentallogo, $size ); ?>
				<?php echo wp_get_attachment_image( $continentalengine, $size ); ?>
			</div>
			
			<?php endwhile; ?>
			
		</div>
		
		<?php endif; ?>
		
	</div>
</div>