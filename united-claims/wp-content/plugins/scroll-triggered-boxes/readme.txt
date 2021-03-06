=== Scroll Triggered Boxes ===
Contributors: Ibericode, DvanKooten, hchouhan, lapzor
Donate link: https://scrolltriggeredboxes.com/#utm_source=wp-plugin-repo&utm_medium=scroll-triggered-boxes&utm_campaign=donate-link
Tags: scroll triggered box, cta, social, pop-up, newsletter, call to action, mailchimp, contact form 7, social media,mc4wp
Requires at least: 3.8
Tested up to: 4.5.2
Stable tag: 2.2.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Flexible call to action boxes, a better alternative to pop-ups.

== Description ==

### Scroll Triggered Boxes

Scroll Triggered Boxes is a *lightweight* plugin for adding flexible call-to-actions to your WordPress site. Boxes can slide or fade in at any point and can contain whatever content you like.

> **This plugin is the predecessor of the [Boxzilla Plugin](https://boxzillaplugin.com/), which you should use instead.**

#### Features

- Create boxes containing whatever content you like: shortcodes, links, custom HTML, anything really.
- Show boxes automatically after scrolling down based on a percentage point or a certain element (like your comment section).
- Show boxes using a button or link.
- Choose the box position: centered or in any corner of the screen.
- Choose between a fading or sliding animation for showing the box.
- Customize the box appearance using a few simple color & dimension controls.
- Only load the box on certain pages, posts, etc.
- Control how long dismissed boxes should stay hidden.
- Control whether boxes should show on small screens.

[Read more about Scroll Triggered Boxes](https://scrolltriggeredboxes.com/#utm_source=wp-plugin-repo&utm_medium=scroll-triggered-boxes&utm_campaign=description).

#### Boxzilla

In May 2016, this plugin was replaced by [Boxzilla](https://wordpress.org/plugins/boxzilla/), which is also available on the WordPress.org plugin repository.

#### Contributing and reporting bugs

You can contribute to this plugin using GitHub: [ibericode/scroll-triggered-boxes](https://github.com/ibericode/scroll-triggered-boxes)

#### Support

Please use the [WordPress.org plugin support forums](https://wordpress.org/support/plugin/scroll-triggered-boxes) for community support where we try to help all users.

If you think you've found a bug, please [report it on GitHub](https://github.com/ibericode/scroll-triggered-boxes/issues).

== Frequently Asked Questions ==

#### Should I use this or Boxzilla?

We are no longer actively pushing out new features to this plugin, so it highly recommended you use the [Boxzilla Plugin](https://wordpress.org/plugins/boxzilla/) instead.


#### What does this plugin do?

Have a look at the [Scroll Triggered Boxes demo site](http://demo.scrolltriggeredboxes.com/#utm_source=wp-plugin-repo&utm_medium=scroll-triggered-boxes&utm_campaign=description).

#### How to display a form in the box?

The plugin is battle-tested with the plugins below but will work with any plugin that uses shortcodes.

- [MailChimp for WordPress](https://wordpress.org/plugins/mailchimp-for-wp/)
- [Contact Form 7](https://wordpress.org/plugins/contact-form-7/)

#### How to display sharing options in the box?

The plugin is tested with the plugins below but will work with any plugin that uses shortcodes.

- [Social Sharing By Danny](https://wordpress.org/plugins/dvk-social-sharing/)
- [Shareaholic](https://wordpress.org/plugins/shareaholic/)
- [Social Media Feather](https://wordpress.org/plugins/social-media-feather/)
- [WP Socializer](https://wordpress.org/plugins/wp-socializer/)
- [Tweet, Like, Google +1 and Share](https://wordpress.org/plugins/only-tweet-like-share-and-google-1/)

#### How do I set more advanced rules for on which pages to show a box?

You can use [conditional tags](https://codex.wordpress.org/Conditional_Tags) to set super-customized rules.

*Example: only show for posts in category 'cars'*
`
is_single() && in_category( 'cars' )
`

*Example: show everywhere except on pages with slug 'contact' and 'checkout'
`
! is_page( array( 'contact', 'checkout' ) )
`

#### Can I have a box to open after clicking a certain link or button?

Sure, just link to the box element.

*Example (box ID is 94 in this example)*
`
<a href="#stb-94">Open Box</a>
`

#### Can I have a box to open right after opening a page?

Sure, just include `stb-` followed by the box ID in the URL.

*Example (box ID is 94 in this example)*
`
http://your-wordpress-site.com/some-page/#stb-94
`

#### How to set more advanced styling rules

If you want more advanced styling, you can use CSS to further style the boxes. Every box gets its own unique #id as well as various CSS classes.

`
.stb-{id} { } /* 1 particular box */
.stb { } /* all boxes */
.stb-close{ } /* the close button of the box */
`

#### I want to disable auto-paragraphs in the box content

All default WordPress filters are added to the `stb_content` filter hook. If you want to remove any of them, add the respectable line to your theme its `functions.php` file.

`
remove_filter( 'stb_box_content', 'wptexturize') ;
remove_filter( 'stb_box_content', 'convert_smilies' );
remove_filter( 'stb_box_content', 'convert_chars' );
remove_filter( 'stb_box_content', 'wpautop' );
remove_filter( 'stb_box_content', 'do_shortcode' );
remove_filter( 'stb_box_content', 'shortcode_unautop' );
`

#### I want to disable closing of the box
`
add_filter( 'stb_box_options', function( $opts ) {
	$opts['unclosable'] = true;
	return $opts;
});
`

== Installation ==

This plugin has been replaced by [Boxzilla](https://wordpress.org/plugins/boxzilla/). It is highly recommended you use that instead.

== Screenshots ==

1. A scroll triggered box with a newsletter sign-up form.
2. Another scroll triggered box, this time with social media sharing options.
3. A differently styled social triggered box.
4. Configuring and customizing your boxes is easy.

== Changelog ==

#### 2.2.3 - May 11, 2016

[Scroll Triggered Boxes is now Boxzilla!](https://boxzillaplugin.com/blog/2016/hello-boxzilla/)

Because of the new name accompanied with some breaking changes, Boxzilla is released as a [new plugin on the WordPress.org plugin repository](https://wordpress.org/plugins/boxzilla/).

While it is highly recommend you start using Boxzilla, you can do so at your own pace. Whenever you're ready to make the switch, please [read through the upgrade guide](https://kb.boxzillaplugin.com/updating-from-scroll-triggered-boxes/) for a full list of changes.


#### 2.2.2 - April 11, 2016

**Fixes**

- Fixes notice on settings page when creating a new box.

**Improvements**

- Fallback for box initialization when other script errors.
- Getting ready for new Exit Intent add-on, to be released soon.
- Use event bubbling for `#stb-103` style links, so link elements loaded over AJAX can also open boxes.


#### 2.2.1 - March 2, 2016

**Fixes**

- "Test mode" setting from individual box pages not saving and throwing a warning.


#### 2.2 - March 2, 2016

**Fixes**

- CSS `initial` keyword compatibility fix for Internet Explorer

**Additions**

- Allow glob-style patterns for matching URL's and referer URL's, eg `*.google.com`.
- Allow matching any condition or all conditions to load a box.

**Improvements**

- Boxes can now be marked "unclosable" by filtering the box options (see FAQ).
- When box is "center" positioned, clicking the overlay now uses an error click margin to avoid unintentionally dismissing a box.
- Close icon can now be removed by passing an empty string to the `stb_box_close_icon` filter.
- "Test mode" setting is now shown on individual box settings pages as well, for convenience.
- When editing a box, an empty box rule is now always shown.


####  2.1.4 - November 19, 2015

**Fixes**

- Do not show box instantly if auto-show is disabled. Fixes an issue with [the premium MailChimp add-on](https://scrolltriggeredboxes.com/plugins/mailchimp).

####  2.1.3 - October 19, 2015

**Fixes**

- (Non-fatal) JS error introduced in version 2.1.2

**Improvements**

- Improved error messages & general textual improvements to admin pages.

####  2.1.2 - October 15, 2015

**Fixes**

- Sample boxes were no longer being created on plugin installation

**Improvements**

- Added "Box ID" column to boxes overview page so it's easier to find your box ID.

**Additions**

- The box cookie is now set after each form submissions, preventing it from showing up again
- When using [MailChimp for WordPress](https://mc4wp.com), the box will now auto-show again after submitting the page.

####  2.1.1 - August 20, 2015

**Fixes**

- Activation error on Multisite.

**Additions**

- Added an "instant" option as the box trigger, which shows the box immediately after loading a page.

####  2.1 - July 8, 2015

**Fixes**

- "If post is" filter with empty value was not working.

**Improvements**

- Added autocomplete search to filter rule values, which autocompletes post, page, category and post type slugs.
- Minor other usability improvements to box filters.

**Additions**

- Added `is_post_in_category` filter rule condition, to target posts that have a certain category.

####  2.0.4 - July 6, 2015

**Fixes**

- Boxes were not showing if any other resource (images, scripts, etc.) on the page failed to load.

**Improvements**

- Extension thumbnails are now clickable.
- Prevent notice for empty string values in box rules.

**Additions**

- The plugin now creates a sample box upon plugin installation.

####  2.0.3 - July 2, 2015

**Fixes**

- The cookie for closing a box was always set to expire at the end of the session

####  2.0.2 - May 18, 2015

**Fixes**

- JavaScript error when loading box editor in HTML mode
- Remove type hint for function that adds metaboxes, as this differs for new (unpublished) boxes

**Improvements**

- Output HTML for boxes at a slightly earlier hook, for better [MailChimp for WordPress](https://mc4wp.com/) compatibility.


####  2.0.1 - May 12, 2015

**Fixes**

- Fix page level targeting no longer working

####  2.0 - May 12, 2015

Major revamp of the plugin, maintaining backwards compatibility.

**Important changes**

- The plugin now comes with several [premium add-on plugins which further enhance the functionality of the plugin](https://scrolltriggeredboxes.com/plugins#utm_source#### wp-plugin-repo&utm_medium=scroll-triggered-boxes&utm_campaignchangelog).
- PHP 5.3 or higher is required.
- "Test mode" is now a global setting.
- Various UX improvements.

If you encounter a bug, please [open an issue on GitHub](https://github.com/ibericode/scroll-triggered-boxes/issues).

####  1.4.4 - April 4, 2015

**Additions**

- Added a PHP version check in preparation for the upcoming [Scroll Triggered Boxes v2.0](https://scrolltriggeredboxes.com/a-new-site/) release.

####  1.4.3 - January 29, 2015

**Improvements**

- Various performance improvements
- Updated all links to use `https` protocol

####  1.4.2 - December 4, 2014

**Fixes**

- Box not automatically appearing if cookie time was set, caused by yesterdays update.

####  1.4.1 - December 3, 2014

**Fixes**

- CSS Height issue breaking SIDR navigation in some themes.

**Improvements**

- If cookie lifetime option is set to 0, existing cookies will be ignored now too.

####  1.4 - November 17, 2014

**Additions**

- Added option to disable box for smaller screen sizes, defaults to box width.

####  1.3.1 - September 4, 2014

**Bugfixes**

- Fixed an issue with rules disappearing when having more than 5 posts.

**Improvements**

- Some textual improvements.

####  1.3 - July 30, 2014

**Improvements**

- Various code improvements
- Minified all assets (scripts and styles)
- You can now contribute to the [Scroll Triggered Boxes plugin on GitHub](https://github.com/ibericode/scroll-triggered-boxes).

**Additions**

- Add "bottom center" and "top center" position options

####  1.2.2 - July 7, 2014

**Additions**

- Added Spanish translations, thanks to [Paul Benitez of Tecnofilos](http://www.tecnofilos.net/)

**Improvements**

- Now using native JS cookies, greatly reducing the script size.
- Added various debugging statements to the script.

####  1.2.1 - May 21, 2014

**Additions**

- You can now use JavaScript functions like `STB.show( 42 )` or `STB.hide( 42 )` to show/hide boxes.

**Improvements**

- Box is now more responsive, it will now never stretch beyond the screen width.
- Various minor code improvements.
- Wrapped remaining strings in translation calls.

####  1.2 - April 18, 2014
* Improved: Plugin is now fully translatable. Fixed various string typo's.
== Upgrade Notice ==

#### 2.1
Added autocomplete to box filters & minor bux fixes for filter rules.
