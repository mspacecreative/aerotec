<div id="instafeed">
	<div class="grid-sizer"></div>
	<div class="gutter-sizer"></div>
	
	<?php 
	if ( have_posts() ) : 
		while ( have_posts() ) : the_post(); ?>
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
						}
						?>
						<a class="cta-buttons" href="<?php the_permalink(); ?>"><?php _e(' More...'); ?></a>
					</div>
			</div>
		</div>
		<?php endwhile; 
	endif;
	?>
	
</div>