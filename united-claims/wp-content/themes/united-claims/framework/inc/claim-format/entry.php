<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

    <?php if (!is_single() || (is_single() && get_post_meta( get_the_ID(), 'minti_hideimage', true ) == false)) { ?>
        <?php if ( has_post_thumbnail() ) { ?>
        <?php $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'full', true); ?>
        <div class="entry-image" style="background-image: url(<?php echo esc_url($thumb_url[0]); ?>)">
          <div class="entry-title">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <?php } else { ?>
          <h1><?php the_title(); ?></h1>
        <?php  }?>
    <?php } ?>

    <div class="entry-wrap">
        <div class="entry-content">
            <?php if(!is_single()){ ?>
                <?php echo wp_kses_post(minti_custom_excerpt(50)); ?>
            <?php } else { ?>
                <?php the_content(); ?>
            <?php } ?>
        </div>

    </div>

</article><!-- #post -->
