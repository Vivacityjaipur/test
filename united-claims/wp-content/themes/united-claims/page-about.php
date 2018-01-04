<?php /* Template Name: About */
get_header(); ?>

<div id="page-wrap" class="container">

	<div id="content" class="sixteen columns">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
    <?php
      $args = array(
          'post_type'      => 'page',
          'posts_per_page' => -1,
          'post_parent'    => $post->ID,
          'order'          => 'ASC',
          'orderby'        => 'menu_order'
      );
     $parent = new WP_Query( $args );
      if ( $parent->have_posts() ) :
        while ( $parent->have_posts() ) : $parent->the_post();
          get_template_part( 'framework/inc/about-format/medium/entry', get_post_format() );
        endwhile;
      endif;
    ?>

	</div>

</div>

<?php get_footer(); ?>
