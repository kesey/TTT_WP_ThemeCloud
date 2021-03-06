=== Addon Widgets For Elementor ===

Contributors: WPDevHQ   
Tags: elementor, pagebuilder, page builder, page builder template, page builder templates, woocommerce, template builder, builder templates   
Requires at least: 4.4  
Tested up to: 4.7.2  
Stable tag: 1.0.4  
License: GPLv3  
License URI: https://www.gnu.org/licenses/gpl-3.0.html   

Adds Native Custom Wordpress Widgets that are specifically designed to be used in conjunction with the Elementor Page Builder

== Description ==
Native WordPress widgets specifically designed for use with the [Elementor Page Builder](https://wordpress.org/plugins/elementor/)

Initial version contains 6(+2) widgets - more to come.
* 1: WooCommerce Product Categories
* 2: WooCommerce Recent Products   
* 3: WooCommerce Best Selling Products   
* 4: WooCommerce Featured Products   
* 5: WooCommerce On Sale Products   
* 6: WooComemrce Popular Products

* 7: New: EAW: Elementor Recent Posts
* 8: New: EAW: Elementor Posts By Category
	
== Themes ==
Minimal support is included for almost any theme therefore leaving most of the desing to be carried out in the themes themselves.   
The plugin does however inherit some design spects of the current theme.

If you are a theme author you are encouraged to test the plugin making necessary adjustments and providing design options where necessary.

If you find any issues with your particula theme not playing nice with the templates please let us know so that we can do our best
to accommodate you.

== Installation ==
* These instructions assumes you already have a WordPress site and the Elementor plugin installed and activated.

1. Install using the WordPress built-in Plugin installer, or Extract the zip file and drop the contents in the `wp-content/plugins/` directory of your WordPress installation.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Go to Pages > Add New
4. Select the desired template from the Page Attributes section
4. Press the 'Edit with Elementor' button.
5. Scroll down the left pane to the WordPress section and you should see the new widgets that you can drag and drop on to your page.

== Frequently Asked Questions ==

Why is it after draging the required widget, making the necessary adjustments to settings and save the layout goes all wonky?

There is a known bug/conflict with WooCommerce assets not being loaded upon saving the edits, however refreshing the page puts things back to normal.
See this [issue #495](https://github.com/pojome/elementor/issues/495) for current status.

== Screenshots ==

1. Widgets Panel

2. Editor View

3. Frontend View Products And Posts

4. Frontend view posts with custom title.

== Changelog ==
= 1.0.4 =
* Name change due to stipulation on Elementor's Terms and Conditions
* Adjustments made to plugin and author urls

= 1.0.3 =
* FIXED: Fatal error clash with Storefront on checking if WooCommerce is active.

= 1.0.2 =
* New: Recent Posts By Category
* Tweaks: CSS adjustments so that widget title when set does not break column layout

= 1.0.1 =
* New: Recent Posts Widget

= 1.0.0 =
* Initial release.

Copyright: WPDevHQ http://www.wpdevhq.com