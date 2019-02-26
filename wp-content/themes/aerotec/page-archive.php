<?php 
/* Template Name: Archive Page */
get_header(); ?>

<?php
$narrow =  get_field('narrow_column', 'options');
$nodrawing = get_field('no_drawing', 'options');
if ( $narrow ): ?>
<div id="main-content" class="narrow">
<?php elseif ( $nodrawing ): ?>
<div id="main-content" class="no-drawing">
<?php else : ?>
<div id="main-content">
<?php endif; ?>
	<div class="container">
		<div id="content-area" class="clearfix">
			<div class="section-title-container boxed">
				<?php 
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); 

						the_content();

					}
				}
				?>
		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php

get_footer();
