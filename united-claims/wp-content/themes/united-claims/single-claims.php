<?php get_header(); ?>

<div id="page-wrap" class="container">
  <div id="content" class="homepage-boxessidebar-right twelve alt columns">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'framework/inc/claim-format/entry', get_post_format() ); ?>

			<?php if($minti_data['switch_relatedposts'] == 1) { ?>

					<?php //for use in the loop, list 5 post titles related to first tag on current post
					$tags = wp_get_post_tags($post->ID);
					if($tags) {
					?>

					<div id="related-posts">
						<h3><?php _e('Related Posts', 'minti'); ?></h3>
						<ul>
							<?php  $first_tag = $tags[0]->term_id;
							  $args=array(
							    'tag__in' => array($first_tag),
							    'post__not_in' => array($post->ID),
							    'showposts'=>4
							   );
							  $my_query = new WP_Query($args);
							  if( $my_query->have_posts() ) {
							    while ($my_query->have_posts()) : $my_query->the_post(); ?>
							      <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><span><?php the_time(get_option('date_format')); ?></span></li>
							      <?php
							    endwhile;
							    wp_reset_postdata();
							  } ?>
						</ul>
					</div>

					<?php } // end if $tags ?>

			<?php } ?>

		<?php endwhile; endif; ?>
	</div> <!-- end content -->
		<div id="sidebar" class="sidebar-right alt">
	    <?php get_sidebar(); ?>
	  </div>
	</div> <!-- end page-wrap -->

<?php get_footer(); ?>
