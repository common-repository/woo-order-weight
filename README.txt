=== Order Weight for WooCommerce ===
Contributors: andreaskarman
Tags: woocommerce, woocommerce order, woocommerce order weight, woocommerce plugin, order, orders, weight, ecommerce, shop
Requires at least: 5.0
Tested up to: 6.5.3
Stable tag: 1.2.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin makes it easy to manage and track the weight of your orders in WooCommerce. It calculates and saves the weight of each order automatically and displays it in the WordPress admin interface.

== Description ==
This WordPress plugin stores the weight of WooCommerce orders and displays the order weight when managing orders.

To make the plugin work as intended, [add weight to your products](https://docs.woothemes.com/document/adding-dimensions-and-weights-to-products-for-shipping/).

= Features =
- Automatically calculates and saves total order weight
- Updates order weight when an order is updated
- Adds weight as a sortable column in admin interfaces
- Extends WooCommerce REST API with weight properties
- Displays order weight in customer dashboard and admin e-mails
- Includes tool to update weight on all orders at once (with WP-CLI support)
- Supports order weight export with [WooCommerce Customer / Order / Coupon Export](https://woocommerce.com/products/ordercustomer-csv-export/)
- Track average order weight in and single order weights in WooCommerce Analytics

= Credits =
The concepts of the plugin came from [this blog post](http://www.remicorson.com/store-and-display-woocommerce-order-total-weight/) by Remi Corson.

= Author =
This plugin is developed and maintained by [Andreas Karman](http://andreaskarman.se).

== Installation ==
= Plugin requirements =

* WordPress 5.0 or greater
* WooCommerce 5.0.0 or greater

= Automatic installation =

To do an automatic install of Order Weight for WooCommerce, log in to your WordPress dashboard, navigate to the Plugins menu and click Add New. Type "Order Weight for WooCommerce" in the search field and click search Plugins. Click "Install Now" on this plugin which should be the first result.

= Manual installation =

To manually install our plugin, you need to first download the plugin and then upload it to your web server via FTP/SFTP. You can find more [detailed instructions in the WordPress Codex](https://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

== Frequently Asked Questions ==
= Where is the plugin settings? =

In the WooCommerce Settings, go to "Advanced" and click the "Order Weight for WooCommerce" tab.

= How can I get the weight for orders created prior to plugin activation? =

If you go the plugin settings, there is a tool to calculate the weight of all orders in your WooCommerce installation. You can also use the WP-CLI command "wp orderweight update" to update all orders.

= Where can I report bugs? =

Bugs can be reported either in the support forum or preferably in the [plugin GitHub repository](https://github.com/andreaskarman/order-weight-woocommerce).

== Screenshots ==
1. Order weight column when managing orders.
2. Order weight when managing a single order.
3. Order weight in the customer dashboard.
4. Bulk action to update order weight.
5. Plugin setting
6. WooCommerce Analytics

== Changelog ==

= 1.2.3 - 2024/10/23 =
* Added missing translations
* Fixed error when adding weight column to orders

= 1.2.2 - 2024/07/08 =
* Declared incompatibility with HPOS

= 1.2.1 - 2023/11/09 =
* Fixed incorrect usage of woocommerce_email_order_meta_fields in the plugin

= 1.2 - 2023/03/29 =
* Added order weight data to WooCommerce Analytics

= 1.1 - 2023/03/14 =
* Added possibility to disable order notes.

= 1.0 - 2023/01/31 =
* Added possibility to add order weight in customer emails

= 0.9 - 2022/12/05 =
* New feature: WP-CLI command added to update all order weights (wp orderweight update)

= 0.8.1 - 2022/12/05 =
* New feature: Adding total order weight to admin e-mails

= 0.8 - 2022/11/24 =
* New feature: Admin tool to update the weight on all orders.

= 0.7 - 2022/11/14 =
* New feature: Custom bulk action to update order weights.

= 0.6.4 - 2022/11/09 =
* Fixed PHP notices when API is called.
* Fixed additional PHP8 compatibility issues.

= 0.6.2 - 2022/10/19 =
* Fixed PHP8 compatibility issue.

= 0.6.1 - 2022/10/03 =
* Added link to plugin settings in "Plugins".

= 0.6 - 2022/09/13 =
* Added feature to display order weight in the customer dashboard.

= 0.5.5 - 2021/12/26 =
* New feature: Added order weight support for WooCommerce Customer / Order / Coupon Export

= 0.5 - 2021/12/17 =
* New feature: Compatibility added to the new WooCommerce Block Checkout
* Bug fix: Fixed sorting error of "Products" by weight

= 0.4.5 - 2021/11/20 =
* New feature: Updating order weight in the WordPress admin when an order is updated.
* New feature: When order weight is updated, a order notifications is added.
* Bug fix: Display error in "Products" weight column

= 0.4.0 - 2021/11/10 =
* Fixed "Order properties should not be accessed directly" error
* Fixed weight and weight unit in API calls not showing

= 0.3.5 - 2016/01/26 =
* Added weight and weight unit to orders in the WooCommerce REST API.
* Changed meta key for order weight (removed underscore prefix).
* Added activation function to rename old meta keys.
* Protected plugin meta keys using is_protected_meta filter.
* Updated the uninstall method with all meta keys.

= 0.3.0 - 2016/01/24 =
* Renamed plugin.
* Added weight column to "Products".

= 0.2.0 - 2015/11/26 =
* Removed metadata when un-installing plugin.
* Added WooCommerce headers to readme.txt.
* Check if WooCommerce is activated before activating plugin.

= 0.1.0 - 2015/11/22 =
* Initial plugin release.
