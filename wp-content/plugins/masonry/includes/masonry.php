<div id="instafeed">
	<div class="grid-sizer"></div>
	<div class="gutter-sizer"></div>
	
	<?php 
	$loop = new WP_Query( array( 'post_type' => 'services', 'posts_per_page' => -1 ) );
	    if ( $loop->have_posts() ) :
	        while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="grid-item">
				<div class="grid-inner">
					<?php if ( has_post_thumbnail() ) { ?>
					    <?php echo the_post_thumbnail(); ?>
					<?php } ?>
						<div class="card-content">
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
		endif; wp_reset_postdata(); ?>
	
</div>