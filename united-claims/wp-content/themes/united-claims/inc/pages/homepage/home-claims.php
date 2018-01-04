<div id="page-wrap" class="container">
  <div id="content" class="homepage-boxessidebar-right twelve alt columns">

    <div class="content-boxes">
      <?php
          // WP_Query arguments
          $args = array (
          	'post_type'              => array( 'claims' ),
          	'meta_query'             => array(
          		array(
          			'key'       => 'show_claim_homepage',
          			'value'     => '1',
          			'compare'   => '==',
          		),
          	),
          );
          // The Query
          $claims = new WP_Query( $args );

          // The Loop
          if ( $claims->have_posts() ) {
          	while ( $claims->have_posts() ) {
          		$claims->the_post(); ?>
              <div class="box customimg">
              <?php echo get_the_post_thumbnail( $post_id, 'medium', array( 'class' => 'aligncenter' ) ); ?>
                <h3 class="box_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="box_description">
                  <?php the_excerpt(); ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="box_read-more">See more about this type of claim</a>
              </div>
        <?php }
          } else {
          	echo "No claims selected to show on the HomePage";
          }
          // Restore original Post Data
          wp_reset_postdata();
      ?>
    </div>

    <div class="content-boxes">
      <?php if( have_rows('homepage_quick_links_content') ): ?>
        <?php while( have_rows('homepage_quick_links_content') ): the_row();
          // vars

          $title = get_sub_field('quicklink_title');
      		$content = get_sub_field('quicklink_content');
      		$link = get_sub_field('quicklink_link');
          $link_name = get_sub_field('quick_link_name');
      		?>
          <div class="box no-bg ">
          <?php echo get_the_post_thumbnail( $post_id, 'medium', array( 'class' => 'aligncenter' ) ); ?>
            <h3 class="box_title">
              <a href="<?php echo $link; ?>">
                <?php echo $title; ?>
              </a>
            </h3>
            <p class="box_description">
              <?php echo $content; ?>
            </p>
            <a href="<?php echo $link; ?>" class="box_read-more"><?php echo $link_name; ?></a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

      <!-- <div class="box no-bg">
        <h3 class="box_title">How We Get Paid</h3>
        <p class="box_description">
          We get paid entirely on results. Your compensation will be paid direct into our client account. We will then pay you the remainder of your compensation after our fees have been deducted.
        </p>
        <a href="#" class="box_read-more">Read more on how we get paid</a>
      </div>

      <div class="box no-bg">
        <h3 class="box_title">Frequently Asked Questions</h3>
        <p class="box_description">
          The world of finance can often be a complicated place filled with convoluted terms that throw people off. Take a look at our easy to understand F.A.Q for some answers on commonly asked questions.
        </p>
        <a href="#" class="box_read-more">Take a look at our F.A.Q</a>
      </div>

      <div class="box no-bg">
        <h3 class="box_title">Testimonials</h3>
        <p class="box_description">
          At United Claims Management, we know how important trust is. We do everything we can to fulfil the expectations of our clients, and hopefully gain compensation for mis-sold financial products on their behalf.
        </p>
        <a href="#" class="box_read-more">See what our clients had to say</a>
      </div> -->
    </div>


  </div> <!-- end content -->

 