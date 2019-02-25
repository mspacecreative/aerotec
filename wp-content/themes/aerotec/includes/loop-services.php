<div id="instafeed">
	<div class="grid-sizer"></div>
	<div class="gutter-sizer"></div>
	
	<?php 
	$loop = new WP_Query( array( 'post_type' => 'services', 'posts_per_page' => -1 ) );
	    if ( $loop->have_posts() ) :
	        while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="grid-item">
				<?php if ( get_field('horizontal_icon') ): ?>
				<div class="grid-inner horizontal">
				<?php else : ?>
				<div class="grid-inner">
				<?php endif; ?>
					<?php if ( has_post_thumbnail() ) { ?>
					    <?php echo the_post_thumbnail(); ?>
					<?php } ?>
						<div class="card-content">
							<h3><?php the_title(); ?></h3>
							<?php
							if( has_excerpt() ) { 
								the_excerpt(); 
							}
							?>
							<div class="cta-buttons">
								<a href="<?php the_permalink(); ?>"><?php _e(' More...'); ?></a>
							</div>
						</div>
				</div>
			</div>
			<?php endwhile; 
		endif; wp_reset_postdata();
	?>
	
</div>