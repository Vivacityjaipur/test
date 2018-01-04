<div class="owl-carousel">
<!-- END HomePage homeImageBackground -->
<?php  if (is_home() || is_front_page()) {
	// check if the repeater field has rows of data
		if( have_rows('hslider') ):
 	// loop through the rows of data
    while ( have_rows('hslider') ) : the_row();
?>

	<div class="homeImageBackground" style="background-image: url(<?php echo the_sub_field('hslider_image'); ?>">
		<div id="page-wrap" class="container">
			<div id="content" class="sixteen columns">
				<div class="homeImageBackground-content">
					<?php echo the_sub_field('hslider_text'); ?>
					<div class="enquire">
						<a href="<?php echo the_sub_field('hslider_button_link'); ?>" <?php echo the_sub_field('hslider_tracking_code'); ?> class="btn-enquire-home"><?php echo the_sub_field('hslider_button_text'); ?></a>
						<!-- <p class="find-print"> -->
							<?php echo the_sub_field('hslider_small_text'); ?>
						<!-- </p> -->
					</div>
				</div>
			</div>
		</div>
	</div>


<?php
	endwhile;
		else :
			// no rows found
			endif;
	}
?>
<!-- END HomePage homeImageBackground -->
</div>
