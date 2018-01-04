<?php global $minti_data; ?>
<div id="topbar" class="header-v2 clearfix">
	<div class="container">

		<div class="sixteen columns">

			<div class="topbar-col1">
				<ul>
					<li><i class="fa fa-phone"></i><a href="tel:0114 263 0003">0114 263 0003</a></li>
					<li><i class="fa fa-envelope-o"></i> <a href="mailto:enquiries@unitedclaims.co.uk">enquiries@unitedclaims.co.uk</a></li>
				</ul>
			</div>

			<div class="topbar-col2">
				<p><i class="fa fa-info"></i> We aim to help you gain compensation for mis-sold financial products</p>
			</div>

		</div>

	</div>
</div>

	<header id="header" class="header header-v1 clearfix">

		<div class="container">

			<div id="logo-navigation" class="sixteen columns">

				<div id="logo" class="logo">
					<?php if( (is_home() || is_front_page()) && ($minti_data['media_logo']['url'] != "")) { ?>
						<a href="<?php echo esc_url(home_url()); ?>/"><img src="<?php echo get_stylesheet_directory_uri();?>/images/United-Claims-Management-blue.svg" alt="<?php esc_html(bloginfo('name')); ?>" class="logo_standard" /></a>
						<a href="<?php echo esc_url(home_url()); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/United-Claims-Management-blue.svg" alt="<?php esc_html(bloginfo('name')); ?>" class="logo_transparent" /></a>
						<a href="<?php echo esc_url(home_url()); ?>/"><img src="<?php echo 	get_stylesheet_directory_uri(); ?>/images/United-Claims-Management-blue.svg" width="<?php echo esc_attr($minti_data['media_logo']['width']); ?>" height="<?php echo esc_attr($minti_data['media_logo']['height']); ?>" alt="<?php esc_html(bloginfo('name')); ?>" class="logo_retina" /></a>
						<a href="<?php echo esc_url(home_url()); ?>/"><img src="<?php echo 	get_stylesheet_directory_uri(); ?>/images/United-Claims-Management-blue.svg" width="<?php echo esc_attr($minti_data['media_logo_transparent']['width']); ?>" height="<?php echo esc_attr($minti_data['media_logo_transparent']['height']); ?>" alt="<?php esc_html(bloginfo('name')); ?>" class="logo_retina_transparent" /></a>
					<?php } elseif ((!is_home() || !is_front_page()) && ($minti_data['media_logo']['url'] != "")) {?>
						<a href="<?php echo esc_url(home_url()); ?>/"><img src="<?php echo get_stylesheet_directory_uri();?>/images/United-Claims-Management.svg" alt="<?php esc_html(bloginfo('name')); ?>" class="logo_standard" /></a>
						<?php if($minti_data['media_logo_transparent']['url'] != '') { ?><a href="<?php echo esc_url(home_url()); ?>/"><img src="<?php echo get_stylesheet_directory_uri();?>/images/United-Claims-Management.svg" alt="<?php esc_html(bloginfo('name')); ?>" class="logo_transparent" /></a><?php } ?>
						<?php if($minti_data['media_logo_retina']['url'] != '') { ?><a href="<?php echo esc_url(home_url()); ?>/"><img src="<?php echo get_stylesheet_directory_uri();?>/images/United-Claims-Management.svg" width="<?php echo esc_attr($minti_data['media_logo']['width']); ?>" height="<?php echo esc_attr($minti_data['media_logo']['height']); ?>" alt="<?php esc_html(bloginfo('name')); ?>" class="logo_retina" /></a><?php } ?>
						<?php if($minti_data['media_logo_retina_transparent']['url'] != '') { ?><a href="<?php echo esc_url(home_url()); ?>/"><img src="<?php echo get_stylesheet_directory_uri();?>/images/United-Claims-Management.svg" width="<?php echo esc_attr($minti_data['media_logo_transparent']['width']); ?>" height="<?php echo esc_attr($minti_data['media_logo_transparent']['height']); ?>" alt="<?php esc_html(bloginfo('name')); ?>" class="logo_retina_transparent" /></a><?php } ?>
					<?php } else { ?>
						<a href="<?php echo esc_url(home_url()); ?>/"><?php esc_html(bloginfo('name')); ?></a>
					<?php } ?>
				</div>

				<div id="navigation" class="clearfix">
					<div class="header-icons">
					<?php if($minti_data['switch_searchform'] != 0 || $minti_data['switch_shoppingicon'] != 0) { ?>
						<div class="header-icons-divider"></div>
					<?php } ?>
					<?php if($minti_data['switch_searchform'] == 1) { ?>
						<a href="#" id="search-btn"><i class="icon-minti-search"></i></a>
					<?php } ?>

					<?php if (class_exists('Woocommerce')) { ?>
						<?php if($minti_data['switch_shoppingicon'] == 1) { ?>
						<?php global $woocommerce; ?>
						<span class="cart-popup">
						<a href="<?php echo esc_url($woocommerce->cart->get_cart_url()); ?>" id="shopping-btn" class="cart-contents"><i class="icon-minti-cart"></i><?php if ( sizeof( $woocommerce->cart->cart_contents ) != 0 ) { ?><span><?php echo esc_html($woocommerce->cart->cart_contents_count); ?></span><?php } ?></a>
						</span>
						<?php } ?>
					<?php } ?>
					</div>

					<?php
						if(has_nav_menu('main_navigation')) {
							wp_nav_menu( array(
								 'theme_location' => 'main_navigation',
								 'container' =>false,
								 'menu_id' => 'nav',
								 'echo' => true,
								 'menu_class' => 'menu',
								 'before' => '',
								 'after' => '',
								 'link_before' => '',
								 'link_after' => '',
								 'depth' => 0
								)
							);
						}
						else {
							echo '<ul><li><a href=""><strong>NO MENU ASSIGNED</strong> <span>Go To Appearance > Menus and create a Menu</span></a></li></ul>';
						}
					?>
				</div>

			</div>

			<?php if($minti_data['switch_searchform'] == 1) { ?>
			<div id="search-top" class="sixteen columns clearfix">
				<form action="<?php echo esc_url(home_url()) ?>" method="GET">
		      		<input type="text" name="s" value="" placeholder="<?php echo __('To Search start typing...', 'minti') ?>" autocomplete="off" />
				</form>
				<a href="#" id="close-search-btn"><i class="icon-minti-close"></i></a>
			</div>
			<?php } ?>

			<?php if (class_exists('Woocommerce')) { ?>
			<?php global $woocommerce; ?>
			<?php if ( sizeof( $woocommerce->cart->cart_contents ) != 0 ) { ?>
				<?php if ( version_compare( WOOCOMMERCE_VERSION, "2.0.0" ) >= 0 ) { the_widget( 'WC_Widget_Cart', 'title= ' ); } ?>
			<?php } ?>
		<?php } ?>

		</div>

	</header>

<div id="mobile-header" class="mobile-header-v1">
	<div class="container">
		<div class="sixteen columns">
			<div id="mobile-logo" class="logo">
				<?php if( (is_home() || is_front_page()) && ($minti_data['media_logo']['url'] != "")) { ?>
					<a href="<?php echo esc_url(home_url()); ?>/"><img src="<?php echo get_stylesheet_directory_uri();?>/images/United-Claims-Management.svg" alt="<?php esc_html(bloginfo('name')); ?>" class="logo_standard" /></a>
					<a href="<?php echo esc_url(home_url()); ?>/"><img src="<?php echo get_stylesheet_directory_uri();?>/images/United-Claims-Management.svg" width="<?php echo esc_attr($minti_data['media_logo']['width']); ?>" height="<?php echo esc_attr($minti_data['media_logo']['height']); ?>" alt="<?php esc_html(bloginfo('name')); ?>" class="logo_retina" /></a>
				<?php } elseif ((!is_home() || !is_front_page()) && ($minti_data['media_logo']['url'] != "")) { ?>
					<a href="<?php echo esc_url(home_url()); ?>/"><img src="<?php echo get_stylesheet_directory_uri();?>/images/United-Claims-Management.svg" alt="<?php esc_html(bloginfo('name')); ?>" class="logo_standard" /></a>
					<a href="<?php echo esc_url(home_url()); ?>/"><img src="<?php echo get_stylesheet_directory_uri();?>/images/United-Claims-Management.svg" width="<?php echo esc_attr($minti_data['media_logo']['width']); ?>" height="<?php echo esc_attr($minti_data['media_logo']['height']); ?>" alt="<?php esc_html(bloginfo('name')); ?>" class="logo_retina" /></a>
				<?php } else { ?>
					<a href="<?php echo esc_url(home_url()); ?>/"><?php esc_html(bloginfo('name')); ?></a>
				<?php } ?>
			</div>
			<a href="#" id="mobile-navigation-btn"><i class="fa fa-bars"></i></a>
			<?php if (class_exists('Woocommerce')) { ?>
				<?php if($minti_data['switch_shoppingicon'] == 1) { ?>
					<?php global $woocommerce; ?>
					<a href="<?php echo esc_url($woocommerce->cart->get_cart_url()); ?>" id="mobile-shopping-btn" ><i class="icon-minti-cart"></i></a>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
</div>

<div id="mobile-navigation">
	<div class="container">
		<div class="sixteen columns">
			<?php wp_nav_menu(array('theme_location' => 'main_navigation', 'menu_id' => 'mobile-nav')); ?>

			<?php if($minti_data['switch_searchformmobile'] == 1) { ?>
			<form action="<?php echo esc_url(home_url()) ?>" method="GET">
	      		<input type="text" name="s" value="" placeholder="<?php echo __('Search..', 'minti') ?>"  autocomplete="off" />
			</form>
			<?php } ?>
		</div>
	</div>
</div>
