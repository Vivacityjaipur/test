<?php get_header(); ?>

<div id="page-wrap" class="container">

	<div id="content" class="homepage-boxessidebar-right twelve alt columns">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'framework/inc/testimonials-format/entry', get_post_format() ); ?>

			<?php if($minti_data['switch_sharebox'] == 1) { ?>
				<?php get_template_part( 'framework/inc/sharebox' ); ?>
			<?php } ?>

		<?php endwhile; endif; ?>

	</div>

	<?php if($sidebar != 'no-sidebar'){ ?>
	<div id="sidebar" class="<?php echo esc_attr($sidebarorientation); ?> alt">
		<?php get_sidebar(); ?>
	</div>
	<?php } ?>

</div>

<?php get_footer(); ?>
