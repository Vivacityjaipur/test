<?php global $minti_data; ?>

<?php if($minti_data['switch_footerwidgets'] == 1 && get_post_meta( get_the_ID(), 'minti_footerwidgets', true ) != 'hide') { ?>
  <?php $footercolumns = (!empty($minti_data['select_footercolumns'])) ? $minti_data['select_footercolumns'] : '4';

    if($footercolumns == '1'){
      $footercolumns_class = 'sixteen';
    } else if($footercolumns == '2'){
      $footercolumns_class = 'eight';
    } else if($footercolumns == '3'){
      $footercolumns_class = 'one-third';
    } else if($footercolumns == '4'){
      $footercolumns_class = 'four';
    }

  ?>

  <footer id="footer">
    <div class="container">
      <div class="<?php echo esc_attr($footercolumns_class); ?> columns"><?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets 1')); ?></div>
      <?php if($footercolumns == '2' || $footercolumns == '3' || $footercolumns == '4') { ?>
      <div class="<?php echo esc_attr($footercolumns_class); ?> columns"><?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets 2')); ?></div>
      <?php } ?>
      <?php if($footercolumns == '3' || $footercolumns == '4') { ?>
      <div class="<?php echo esc_attr($footercolumns_class); ?> columns"><?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets 3')); ?></div>
      <?php } ?>
      <?php if($footercolumns == '4') { ?>
      <div class="<?php echo esc_attr($footercolumns_class); ?> columns"><?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets 4')); ?></div>
      <?php } ?>
    </div>
  </footer>
<?php } ?>

<?php if($minti_data['switch_copyright'] == 1 && get_post_meta( get_the_ID(), 'minti_footercopyright', true ) != 'hide') { ?>
<div id="copyright" class="clearfix">
  <div class="container">

    <div class="sixteen columns">

      <div class="copyright-text copyright-col1">
        <p>© Copyright 2016 United Claims Management Ltd</p>
        <?php wp_nav_menu( array( 'theme_location' => 'footer_navigation' ) ); ?>
      </div>

      <div class="copyright-col2">
        <p>
          We are regulated by the Claims Management Regulator in respect of regulated claims management activities.<br>
          Our registration is recorded on the website <a href="http://www.gov.uk/government/groups/claims-management-regulator">www.gov.uk/government/groups/claims-management-regulator</a> (CRM33416)<br>
          Formerly known as Pensions Claims Centre Limited
        </p>
      </div>

    </div>

  </div>
</div><!-- end copyright -->
<?php } ?>

</div><!-- end wrapall / boxed -->

<?php if($minti_data['switch_backtotop'] == 1) { ?>
<div id="back-to-top"><a href="#"><i class="fa fa-chevron-up"></i></a></div>
<?php } ?>

<?php wp_footer(); ?>

</body>

</html>
