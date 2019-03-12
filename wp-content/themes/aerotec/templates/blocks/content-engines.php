<div class="section_container featured-engines">
	<div class="row_container clearfix">
		
		<?php if( have_rows('lycoming') ): ?>
		
		<div class="one_half_col">
			
			<?php while( have_rows('lycoming') ): the_row();
			
			$companylogos = get_sub_field('lycoming_logo');
			$lycomingengine = get_sub_field('lycoming_engine');
			$size = 'medium';
	
			if ( $companylogos ) :
			foreach( $companylogos as $companylogo ):
			
			$externallink = get_sub_field('external_link', $companylogo['ID']);
			if ( $externallink ):
			echo wp_get_attachment_image( $companylogo['ID'], $size );
			endif;
			
			endforeach;
			endif;
			
			echo wp_get_attachment_image( $lycomingengine, $size );
			
			endwhile; ?>
			
		</div>
		
		<?php endif; ?>
		
		<?php if( have_rows('continental') ): ?>
		
		<div class="one_half_col">
			<?php while( have_rows('continental') ): the_row();
			
			$continentallogo = get_sub_field('continental_logo');
			$continentalengine = get_sub_field('continental_engine');
			$size = 'medium'; ?>
			
			<?php echo wp_get_attachment_image( $continentallogo, $size ); ?>
			<?php echo wp_get_attachment_image( $continentalengine, $size ); ?>
			
			<?php endwhile; ?>
			
		</div>
		
		<?php endif; ?>
		
	</div>
</div>