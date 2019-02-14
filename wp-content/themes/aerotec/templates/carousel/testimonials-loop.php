<div class="testimonials-slider">
<?php 
$loop = new WP_Query( array( 'post_type' => 'testimonials', 'posts_per_page', -1 ) );
    if ( $loop->have_posts() ) : ?>
    
        <?php while ( $loop->have_posts() ) : $loop->the_post();
        $id = get_the_ID(); ?>

		<div>
		 	<h4 class="light"><?php the_field('company_name', $id); esc_html_e(', '); the_field('company_location', $id); ?></h4>
		 	<span class="light"><?php echo get_post_field('post_content', $post_id); ?></span>
		 	<h5 class="light"><?php the_title(); esc_html_e(', '); the_field('authors_position', $id); ?></h5>
		</div>

		<?php endwhile; 
	endif;
wp_reset_postdata(); ?>
</div>