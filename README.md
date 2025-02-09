# Order Weight for WooCommerce #
**Contributors:** andreaskarman

**Tags:** woocommerce, woocommerce order, woocommerce order weight, woocommerce plugin, order, orders, weight, ecommerce, shop

**Requires at least:** 5.0

**Tested up to:** 5.8.1

**Stable tag:** 0.5.5

**License:** GPLv2 or later

**License URI:** http://www.gnu.org/licenses/gpl-2.0.html


This WordPress plugin stores the total weight of WooCommerce orders and displays the order weight when managing orders.

## Description ##
When a new order is created by a customer, the total weight of the order will be stored in the order metadata. For this to work as indented, your physical products needs a weight value.

When managing orders, the weight of each order will be viewable. You can even sort the orders by weight using the added column.

### Credits ###
The concepts of the plugin came from [this blog post](http://www.remicorson.com/store-and-display-woocommerce-order-total-weight/) by Remi Corson.

### Author ###
This plugin is developed and maintained by [Andreas Karman](http://andreaskarman.se).

## Installation ##
### Plugin requirements ###

* WordPress 5.0 or greater
* WooCommerce 5.0.0 or greater

### Automatic installation ###

To do an automatic install of Order Weight for WooCommerce, log in to your WordPress dashboard, navigate to the Plugins menu and click Add New. Type "Order Weight for WooCommerce" in the search field and click search Plugins. Click "Install Now" on this plugin which should be the first result.

### Manual installation ###

To manually install our plugin, you need to first download the plugin and then upload it to your webserver via FTP/SFTP. You can find more [detailed instructions in the WordPress Codex](https://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

## Frequently Asked Questions ##
### Where is the plugin settings? ###

There is no settings available for this plugin. Just activate it and it will do what stated.

### Where can I report bugs? ###

Bugs can be reported either in the support forum or preferably in the [plugin GitHub repository](https://github.com/andreaskarman/order-weight-woocommerce).


## Changelog ##

### 0.4.0 - 2021/11/10 ###
* Fixed "Order properties should not be accessed directly" error
* Fixed weight and weight unit in API calls not showing
### 0.3.5 - 2016/01/26 ###
* Added weight and weight unit to orders in the WooCommerce REST API.
* Changed meta key for order weight (removed underscore prefix).
* Added activation function to rename old meta keys.
* Protected plugin meta keys using is_protected_meta filter.
* Updated the uninstall method with all meta keys.

### 0.3.0 - 2016/01/24 ###
* Renamed plugin.
* Added weight column to "Products".

### 0.2.0 - 2015/11/26 ###
* Removed metadata when un-installing plugin.
* Added WooCommerce headers to readme.txt.
* Check if WooCommerce is activated before activating plugin.

### 0.1.0 - 2015/11/22 ###
* Initial plugin release.
