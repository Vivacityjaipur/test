<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
    <div class="entry-wrap">

        <div class="entry-title">
        	<h2><?php the_field('faq_question'); ?></h2>
        </div>

        <div class="entry-content">
        	<?php the_field('faq_answers'); ?>
        </div>

    </div>

</article><!-- #post -->

<div class="clear"></div>
