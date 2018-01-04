<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

    <?php if (!is_single() || (is_single() && get_post_meta( get_the_ID(), 'minti_hideimage', true ) == false)) { ?>
        <?php if ( has_post_thumbnail() ) { ?>
        <div class="entry-image">
            <?php if(is_single()){ ?>
                <?php $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'full', true); ?>
                <a href="<?php echo esc_url($thumb_url[0]); ?>" title="<?php the_title(); ?>" class="prettyPhoto" rel="bookmark">
                    <?php the_post_thumbnail('blog'); ?>
                </a>
            <?php } else { ?>
                <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('%s', 'minti'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
                    <?php the_post_thumbnail('blog'); ?>
                </a>
            <?php } ?>
        </div>
        <?php } ?>
    <?php } ?>

    <div class="entry-wrap">

        <div class="entry-title">
            <h1><?php the_title(); ?> - <span class="city"> <?php the_field('testimonial_city'); ?> </span></h1>
        </div>

        <div class="entry-content">
          <?php the_field('testimonial_date'); ?>
          <?php the_content(); ?>
        </div>

    </div>

</article><!-- #post -->
