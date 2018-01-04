<?php get_header(); ?>

<div id="page-wrap" class="container">

	<div id="content" class="sixteen columns">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'framework/inc/faq-format/medium/entry', get_post_format() ); ?>

		<?php endwhile; endif; ?>

		<?php get_template_part( 'framework/inc/nav' ); ?>

	</div>


</div>

<?php get_footer(); ?>
