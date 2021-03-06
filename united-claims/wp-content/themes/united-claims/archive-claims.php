<?php get_header(); ?>

<div id="page-wrap" class="blog-page blog-medium container">

	<div id="content" class="sidebar-right twelve alt columns">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'framework/inc/claim-format/medium/entry', get_post_format() ); ?>

		<?php endwhile; endif; ?>

		<?php get_template_part( 'framework/inc/nav' ); ?>

	</div>

	<div id="sidebar" class="sidebar-right alt">
		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_footer(); ?>
