<div id="instafeed">
	<div class="grid-sizer"></div>
	<div class="gutter-sizer"></div>
	
	<?php
	$args = 'numberposts=-1'; 
	if ( have_posts($args) ) : 
		while ( have_posts($args) ) : the_post($args); ?>
		<div class="grid-item">
			<div class="grid-inner">
				<div class="card-content">
					<?php if ( has_post_thumbnail() ) { ?>
						<?php echo the_post_thumbnail(); ?>
					<?php } ?>
					<h3><?php the_title(); ?></h3>
					<?php
					if( has_excerpt() ) { 
						the_excerpt(); 
					} else {
						the_content();
					}
					?>
					<?php if ( get_field( 'custom_link' ) ): ?>
						<a class="read-more-link" href="<?php the_field('custom_link'); ?>"><?php _e(' More...'); ?></a>
						<?php elseif ( get_field( 'external_link' ) ): ?>
						<a class="read-more-link" href="<?php the_field('external_link'); ?>"><?php _e(' More...'); ?></a>
						<?php else: ?>
						<a class="read-more-link" href="<?php the_permalink(); ?>"><?php _e(' More...'); ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php endwhile; 
	endif;
	?>
	
</div>