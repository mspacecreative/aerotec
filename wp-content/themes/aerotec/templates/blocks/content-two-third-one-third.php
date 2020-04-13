<?php 
$bgcolor = get_field('background_colour');
if ( $bgcolor == 'lightgrey' ): ?>
<div class="section_container light_grey_bg extra-top-bottom-padding">
<?php elseif ( $bgcolor == 'lightgold' ): ?>
<div class="section_container light_gold_bg extra-top-bottom-padding">
<?php elseif ( $bgcolor == 'lightblue' ): ?>
<div class="section_container light_blue_bg extra-top-bottom-padding">
<?php else : ?>
<div class="section_container">
<?php endif;

$padding = get_field('section_padding');
$margin = get_field('section_margin');
$blockanchor = get_field('block_id');
$width = get_field('two_third_one_third_content_width');
$flex = get_field('two_third_one_third_vertical_alignment');

if ( $flex == 'bottom' ):

	if ( $blockanchor && $padding == 'top' && $margin == 'top' ): ?>
	<div class="max-width-1280">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-lg bottom-md top-padding top-margin">
		
			<?php include('includes/two-third-one-third-loop.php'); ?>
		
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-padding top-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div class="row_container">
		<div class="row gutter_space_3 between-lg between-md width-800 clear bottom-padding bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-padding bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear bottom-padding top-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-bottom-padding top-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-bottom-padding bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-bottom-padding top-bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-padding top-bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear bottom-padding top-bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'top'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-padding bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'bottom'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear bottom-padding bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'both'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-bottom-padding bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $margin == 'top'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $margin == 'bottom'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $margin == 'both'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-padding top-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-padding bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear bottom-padding bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-bottom-padding top-bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-bottom-padding top-bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-padding bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-padding bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-padding top-bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-padding top-bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-padding top-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear bottom-padding top-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-padding top-bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear bottom-padding top-bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-bottom-padding top-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-bottom-padding top-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-bottom-padding bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-bottom-padding bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-padding bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear bottom-padding bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-padding bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-padding bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-bottom-padding bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-bottom-padding bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-bottom-margin bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php else : ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear bottom-lg bottom-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	<?php endif;
	
elseif ( $flex == 'center' ):
	
	if ( $blockanchor && $padding == 'top' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear middle-lg middle-md top-padding top-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-padding top-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear bottom-padding bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-padding bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear bottom-padding top-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-bottom-padding top-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-bottom-padding bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-bottom-padding top-bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-padding top-bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear bottom-padding top-bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'top'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-padding middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'bottom'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear bottom-padding middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'both'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-bottom-padding middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $margin == 'top'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $margin == 'bottom'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $margin == 'both'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-padding top-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-padding bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear bottom-padding bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-bottom-padding top-bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-bottom-padding top-bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-padding bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-padding bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-padding top-bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-padding top-bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-padding top-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear bottom-padding top-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-padding top-bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear bottom-padding top-bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-bottom-padding top-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-bottom-padding top-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-bottom-padding bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-bottom-padding bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-padding middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear bottom-padding middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-padding middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-padding middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-bottom-padding middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-bottom-padding middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-bottom-margin middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php else : ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear middle-lg middle-md">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	<?php endif;
	
elseif ( $flex == 'top' ) :
	
	if ( $blockanchor && $padding == 'top' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-padding top-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-padding top-margin display-flex">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div class="row_container">
		<div class="row gutter_space_3 between-lg between-md width-800 clear bottom-padding bottom-margin display-flex">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-padding bottom-margin display-flex">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear bottom-padding top-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-bottom-padding top-margin display-flex">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-bottom-padding bottom-margin display-flex">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-bottom-padding top-bottom-margin">
		
		<?php include('includes/two-third-one-third-loop.php'); ?>
		
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-padding top-bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear bottom-padding top-bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'top'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-padding">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'bottom'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear bottom-padding">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'both'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-bottom-padding">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $margin == 'top'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $margin == 'bottom'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $margin == 'both'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-padding top-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-padding bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear bottom-padding bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-bottom-padding top-bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-bottom-padding top-bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-padding bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-padding bottom-margin">
		
		<?php include('includes/two-third-one-third-loop.php'); ?>
		
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-padding top-bottom-margin">
		
		<?php include('includes/two-third-one-third-loop.php'); ?>
		
		</div>
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-padding top-bottom-margin">
		
		<?php include('includes/two-third-one-third-loop.php'); ?>
		
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-padding top-margin">
		
		<?php include('includes/two-third-one-third-loop.php'); ?>
		
		</div>
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear bottom-padding top-margin">
				
			<?php include('includes/two-third-one-third-loop.php'); ?>
				
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-padding top-bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'both' ): ?>
	<div class="row_container">
		<div class="row gutter_space_3 between-lg between-md clear bottom-padding top-bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-bottom-padding top-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-bottom-padding top-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-bottom-padding bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-bottom-padding bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-padding">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear bottom-padding">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-padding">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-padding">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-bottom-padding">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-bottom-padding">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php else : ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear display-flex">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	<?php endif;
	
else :
	
	if ( $blockanchor && $padding == 'top' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-padding top-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-padding top-margin display-flex">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div class="row_container">
		<div class="row gutter_space_3 between-lg between-md width-800 clear bottom-padding bottom-margin display-flex">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-padding bottom-margin display-flex">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear bottom-padding top-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-bottom-padding top-margin display-flex">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-bottom-padding bottom-margin display-flex">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'both' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-bottom-padding top-bottom-margin">
		
		<?php include('includes/two-third-one-third-loop.php'); ?>
		
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'top' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-padding top-bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'bottom' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear bottom-padding top-bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'top'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-padding">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'bottom'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear bottom-padding">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $padding == 'both'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-bottom-padding">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $margin == 'top'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $margin == 'bottom'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $width && $margin == 'both'): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md width-800 clear top-bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-padding top-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-padding bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear bottom-padding bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-bottom-padding top-bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-bottom-padding top-bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-padding bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-padding bottom-margin">
		
		<?php include('includes/two-third-one-third-loop.php'); ?>
		
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-padding top-bottom-margin">
		
		<?php include('includes/two-third-one-third-loop.php'); ?>
		
		</div>
	</div>
	
	<?php elseif ( $padding == 'top' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-padding top-bottom-margin">
		
		<?php include('includes/two-third-one-third-loop.php'); ?>
		
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-padding top-margin">
		
		<?php include('includes/two-third-one-third-loop.php'); ?>
		
		</div>
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear bottom-padding top-margin">
				
			<?php include('includes/two-third-one-third-loop.php'); ?>
				
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-padding top-bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'bottom' && $margin == 'both' ): ?>
	<div class="row_container">
		<div class="row gutter_space_3 between-lg between-md clear bottom-padding top-bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-bottom-padding top-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-bottom-padding top-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-bottom-padding bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'both' && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-bottom-padding bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-padding">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear bottom-padding">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-padding">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-padding">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $padding == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-bottom-padding">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $padding == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-bottom-padding">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $margin == 'bottom' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $margin == 'top' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_3 between-lg between-md clear top-bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php elseif ( $margin == 'both' ): ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear top-bottom-margin">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	
	<?php else : ?>
	<div class="row_container">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<div class="row gutter_space_3 between-lg between-md clear display-flex">
			
			<?php include('includes/two-third-one-third-loop.php'); ?>
			
		</div>
	</div>
	<?php endif;

endif; ?>
</div>