<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

    <?php if ( has_post_thumbnail() ) { ?>
    <div class="entry-image">
        <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('%s', 'minti'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
            <?php the_post_thumbnail('portfolio'); ?>
        </a>
    </div>
    <?php } ?>

    <div class="entry-wrap">
      <div class="entry-content">
        <?php the_content(); ?>
      </div>

      <div class="entry-title">
      	<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('%s', 'minti'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a> - <span class="city"> <?php the_field('testimonial_city'); ?> </span></h2>
      </div>

    </div>

</article><!-- #post -->

<div class="clear"></div>
