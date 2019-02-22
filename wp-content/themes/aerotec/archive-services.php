<?php get_header(); ?>

<div id="main-content">
	<div class="container">
		<div id="content-area" class="clearfix">
			<div class="section-title-container boxed">
				<h1 class="section-title"><?php echo post_type_archive_title( '', false ); ?></h1>
			</div>
			<?php get_template_part('includes/loop-services'); ?>
		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php

get_footer();
