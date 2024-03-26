=== Advanced Woo Search ===
Contributors: Mihail Barinov
Donate link: https://www.paypal.com/donate/?hosted_button_id=FDRDNZE6XAKE8
Tags: woocommerce, search, product search, woocommerce search, live search
Requires at least: 4.0
Tested up to: 6.4
Stable tag: 3.01
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Advanced WooCommerce search plugin. Search inside any product field. Support for both AJAX search and search results page.

== Description ==

Advanced Woo Search - powerful search plugin for WooCommerce. Supports **AJAX** search and **search results page** display.

[Plugin home page](https://advanced-woo-search.com/?utm_source=wp-repo&utm_medium=listing&utm_campaign=aws-repo) | [Features List](https://advanced-woo-search.com/features/?utm_source=wp-repo&utm_medium=listing&utm_campaign=aws-repo) | [Docs](https://advanced-woo-search.com/guide/?utm_source=wp-repo&utm_medium=listing&utm_campaign=aws-repo)

## Main Features

* **Products search** - Search across all your WooCommerce products
* **Search in** - Search in product **title**, **content**, **excerpt**, **categories**, **tags**, **ID** and **sku**. Or just in some of them
* **Settings page** - User-friendly settings page with lot of options
* **Shortcode** and **widget** - Use shortcode and widget to place search box anywhere you want
* **Product image** - Each search result contains product image
* **Product price** - Each search result contains product price
* **Terms search** - Search for product categories and tags
* **Smart ordering** - Search results ordered by the priority of source where they were found
* **Fast** - Nothing extra. Just what you need for proper work
* **Stop Words** support to exclude certain words from search.
* Supports **variable products**
* **Search results page** support. Plugin search results will be integrated to your current page layout.
* Automatically synchronize all product data. No need to re-index all content manually after every change.
* **Plurals** support
* **Synonyms** support
* Diacritical marks support
* Google Analytics support
* Seamless integration option for easy replacing your current search form
* **WPML**, **Polylang**, **WooCommerce Multilingual**, **qTranslate**, **GTranslate**, etc. support
* **WPML multi-currency** support
* Page builder plugins support: Gutenberg, Elementor, Beaver Builder, WPBakery, Divi Builder
* Custom Product Tabs for WooCommerce plugin support
* Search Exclude plugin support

## Premium Features

Additional features available only in the PRO plugin version.
	
* Search **results layouts**
* Search **form layouts**
* **Filters**. Switch between tabs to show different search results
* **Unlimited** amount of search form instances
* Search for custom taxonomies and attributes **archive pages**
* Support for **variable products**: show child products, parent product or both in search results.
* Product **attributes** search ( including custom attributes)
* Product **custom taxonomies** search
* Product **custom fields** search
* **Users** search
* **Advanced settings page** with lot of options
* **Exclude/include** specific products by its ids, taxonomies or attributes from search results
* Ability to specify **source of image** for search results: featured image, gallery, product content, product short description or set default image if there is no other images
* **Visibility/stock status option** - choose what catalog visibility and stock status must be for product to displayed in search results
* Show product **categories** and **tags** in search results
* AND or OR search logic
* **Add to cart** button in search results
* Support for [WooCommerce Brands plugin](https://woocommerce.com/products/brands/)
* Support for **Advanced Custom Fields** plugin
* Support for **WCFM - WooCommerce Multivendor Marketplace** plugin
* Support for **Dokan – WooCommerce Multivendor Marketplace** plugin
* Support for **MultiVendorX – Multivendor Marketplace** plugin
* And the [huge list of other integrations](https://advanced-woo-search.com/guide-category/integrations/)

[Features list](https://advanced-woo-search.com/features/?utm_source=wp-repo&utm_medium=listing&utm_campaign=aws-repo)

### More Plugins From Us

Here are some additional plugins that were made with love.

* [Advanced Woo Labels](https://wordpress.org/plugins/advanced-woo-labels/) - advanced labels for WooCommerce products
* [Share This Image](https://wordpress.org/plugins/share-this-image/) - image sharing plugin

### More useful links

* Plugin [homepage](https://advanced-woo-search.com/?utm_source=wp-repo&utm_medium=listing&utm_campaign=aws-repo).
* Plugin [documentation](https://advanced-woo-search.com/guide/?utm_source=wp-repo&utm_medium=listing&utm_campaign=aws-repo).
* Follow Advanced Woo Search on [Twitter](https://twitter.com/WooSearch)

== Installation ==

1. Upload advanced-woo-search to the /wp-content/plugins/ directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place the plugin shortcode [aws_search_form] into your template or post-page or just use build-in widget

== Frequently Asked Questions ==

Please visit our [Advanced Woo Search guide](https://advanced-woo-search.com/guide/?utm_source=wp-repo&utm_medium=listing&utm_campaign=aws-repo) before requesting any support.

= What is Advanced Woo Search? =

Advanced Woo Search as is advanced search plugin for WooCommerce shops. Its packed with many usefull features like:

* Search by product title, content, short description, SKU, tags, categories, ID, custom fields, attributes, taxonomies.
* Support for variable product and its variations.
* Multilingual plugins support.
* Search and display product tags, categories, custom taxonomies.
* and many more...

Please visit [features page](https://advanced-woo-search.com/features/?utm_source=wp-repo&utm_medium=listing&utm_campaign=aws-repo) for full list of available features.

= What are the requirements to use Advanced Woo Search? =

Advanced Woo Search is a plugin for self-hosted WordPress sites, or wordpress.com hosted sites that allow installation of third party plugins.
Plugin requires the following at minimum to work properly:

* WordPress 4.0 or greater
* WooCommerce 3.0.0 or greater
* PHP 5.5 or greater
* MySQL 5.6 or MariaDB 10.0 or greater
* Apache or Nginx server (recommended, but other options may work as well)

= How to insert search form? =

There are several ways you can add plugins search form on your site. The simplest way - is by turning on the **Seamless integration** option from the plugins settings page.

You can also use build-in widget to place plugins search form to your sidebar or any other available widget area.

Or just use shortcode for displaying form inside your post/page:

`[aws_search_form]`

Or insert this function inside php file ( often it used to insert form inside page templates files ):

`echo do_shortcode( '[aws_search_form]' );`

Also please read the guide article about search form placement: [Adding Search Form.](https://advanced-woo-search.com/guide/search-form/?utm_source=wp-repo&utm_medium=listing&utm_campaign=aws-repo)

= What is the steps to make this plugin works on my site? =

In order to start using the plugin search form you need to take following steps:

* **Installation**. Install and activate the plugin. You can follow [these steps](https://advanced-woo-search.com/guide/installation/?utm_source=wp-repo&utm_medium=listing&utm_campaign=aws-repo) if you face any problems.
* **Index plugin table**. Click on the **Reindex table** button inside the plugin settings page and wait till the index process is finished.
* **Set plugin settings**. Leave it to default values or customize some of them.
* **Add search form**. There are several ways you can add a search form to your site. Use the **Seamless integration** option, shortcode, widget or custom php function. Read more in the guide article: [Adding Search Form](https://advanced-woo-search.com/guide/search-form/?utm_source=wp-repo&utm_medium=listing&utm_campaign=aws-repo).
* **Finish!** Now all is set and you can check your search form on the pages where you add it.

= Will this plugin work with my theme? =

Plugin search will works with most of the available WordPress themes. If you faced any problems using the plugin with your theme please [contact support](https://advanced-woo-search.com/contact/?utm_source=wp-repo&utm_medium=listing&utm_campaign=aws-repo).

= Is it integrated with my plugin? =

Advanced Woo Search works with many plugins out-of-the-box. For some of the most popular plugins we manually check proper work of integration features. It is the plugins like **Advanced Custom Fields**, **WPML**, **Polylang**, **Elementor**, **Divi Builder**, **BeRocket AJAX Product Filters**, **FacetWP** and many more.

Please read some guide integrations articles: [Integrations](https://advanced-woo-search.com/guide-category/integrations/?utm_source=wp-repo&utm_medium=listing&utm_campaign=aws-repo).

Note that if some of the plugin is not presented in the list it doesn't mean that it will not work with Advanced Woo Search. Many plugins will just work without any extra effort. But if you find any problem with your plugin and Advanced Woo Search please [contact support team](https://advanced-woo-search.com/contact/?utm_source=wp-repo&utm_medium=listing&utm_campaign=aws-repo).

= Is this plugin compatible with latest version of Woocommerce? =

Yep. This plugin is always compatible with the latest version of Woocommerce?

== Screenshots ==

1. Search from front-end view
1. Search form in sidebar added as widget
2. Plugin settings page. General options
3. Plugin settings page. Search form options
4. Plugin settings page. Search results options

== Changelog ==

[View full changelog](https://advanced-woo-search.com/guide/free-version/?utm_source=wp-repo&utm_medium=listing&utm_campaign=aws-repo)

= 3.01 ( 2024-02-26 ) =
* Update - Tested with WC 8.6
* Update - Indexation for synonyms phrases
* Fix - Bug with search results page integration with Elementor


= 3.00 ( 2024-02-12 ) =
* Add - New option to limit maximal number of search words

= 2.99 ( 2024-02-05 ) =
* Update - Plugin settings page. Set minimal values for some options
* Update - Support for Elessi theme. Fix shop filters
* Dev - Add aws_admin_capability filter

= 2.98 ( 2024-01-22 ) =
* Update - Remove plugin options during uninstall

= 2.97 ( 2024-01-10 ) =
* Update - Notices about plugin integrations
* Update - Tested with WC 8.5
* Update - Integration with Dynamic Content for Elementor plugin
* Fix - FacetWP plugin issue with pagination

= 2.96 ( 2024-01-08 ) =
* Update - SQL query for taxonomies search results. Speed up search for multilingual results
* Update - Woodmart theme support. Fix seamless integration for header

= 2.95 ( 2023-12-25 ) =
* Add - Support for WooCommerce Show Single Variations by Iconic plugin
* Update - Tested with WC 8.4
* Update - Integration with GA4
* Dev - Add awsAnalytics js event

= 2.94 ( 2023-12-12 ) =
* Add - Support for WooCommerce Memberships plugin
* Update - Notices about plugin integrations

= 2.93 ( 2023-11-27 ) =
* Update - WCFM plugin integration. Fix search form on stores list page sidebar
* Update - Tested with WC 8.3
* Fix - Integration with Elessi theme. Fix search form after using shop filters
* Dev - Add aws_index_started action

= 2.92 ( 2023-11-14 ) =
* Add - Support for Hestia theme

= 2.91 ( 2023-10-30 ) =
* Update - Support for Astra theme. Fix broken search form in the header

= 2.90 ( 2023-10-16 ) =
* Update - Tested with WC 8.2
* Fix - Pricing filter for default WooCommerce widgets

= 2.89 ( 2023-09-29 ) =
* Add - Support for Sinatra theme. Enable seamless integration for search form in the header
* Update - Add taxonomies class names inside search results blocks

= 2.88 ( 2023-09-18 ) =
* Add - Support for Kapee theme
* Update - Tested with WC 8.1
* Fix - Fix label search form styles for mobile devices
* Dev - Fix php notice with dynamically created child_theme property
* Dev - Add aws_relevance_parameters filter

= 2.87 ( 2023-09-04 ) =
* Add - Support for WooCommerce Products Visibility plugin
* Update - Support for BeRocket WooCommerce AJAX Products Filter plugin. Fix filters when nice URLs is enabled
* Update - Support for HUSKY plugin. Fix filtering issue for custom taxonomies
* Fix - Display On backorder product stock status when needed
* Dev - Update aws_results_html js hook. Add new property - translate
* Dev - Add aws_search_tax_result_item filter

= 2.86 ( 2023-08-21 ) =
* Update - Tested with WC 8.0
* Update - Integration with WCFM plugin. Speed up SQL queries inside the vendor shop page
* Fix - Attributes filters for search results
* Fix - Search terms tracking for GA4. Update tracking code
* Dev - Update aws_reindex_product action. Allow to use array of IDs as parameter

= 2.85 ( 2023-08-07 ) =
* Update - Special characters scrapping. Replace comma char with space
* Fix - Bug with search form inside WCFM plugin vendor shop page

= 2.84 ( 2023-07-24 ) =
* Add - Support for ShopEngine plugin
* Update - Support for GeneratePress theme
* Update - Tested with WC 7.9
* Dev - Add aws_pre_normalize_string filter


= 2.83 ( 2023-07-10 ) =
* Add - Support for WooCommerce Product Bundles plugin
* Add - Support for Bricks Builder theme
* Fix - Bug with block editor search module
* Fix - Bug when searching for products with multiplication sign

= 2.82 ( 2023-06-26 ) =
* Add - Support for Blocksy theme
* Update - Tested with WC 7.8

= 2.81 ( 2023-06-12 ) =
* Fix - FacetWP plugin issue with pagination

= 2.80 ( 2023-05-29 ) =
* Add - Support for WP Bottom Menu plugin

= 2.79 ( 2023-05-15 ) =
* Add - Support for WooCommerce custom orders tables
* Update - Tested with WC 7.7
* Update - Taxonomies pages search. Fix terms normalization
* Fix - FacetWP plugin integration issue with pagination
* Fix - Relevance score calculation for one letter words

= 2.78 ( 2023-04-28 ) =
* Update - Support for WCFM plugin. Fix search inside vendor shop page
* Update - Support for Elementor popups
* Update - Support for Divi theme
* Update - Support for Google Analytics
* Fix - Escaping of html entities for admin options
* Fix - Bug with WPML plugin that indexed child products

= 2.77 ( 2023-04-17 ) =
* Update - Tested with WC 7.6
* Update - FacetWP plugin integration

= 2.76 ( 2023-04-03 ) =
* Add - New option to execute or not shortcodes inside the product content

= 2.75 ( 2023-03-20 ) =
* Add - Support for Product Filters for WooCommerce plugin
* Update - Tested with WC 7.5
* Fix - Bug with Divi theme integration

= 2.74 ( 2023-03-06 ) =
* Add - WP-CLI support
* Dev - Add aws_force_reindex_product action

= 2.73 ( 2023-02-20 ) =
* Update - Tested with WC 7.4
* Update - FacetWP plugin integration
* Update - WPBakery plugin support

= 2.72 ( 2023-02-06 ) =
* Add - MultiVendorX – WooCommerce Multivendor Marketplace plugin support
* Update - Change relevance score for products title
* Fix - WPML plugin bug when saving settings values

= 2.71 ( 2023-01-23 ) =
* Update - Tested with WC 7.3
* Fix - Integration issue with Advanced Woo Labels plugin
* Fix - Elementor search form widget
* Fix - Index scheduled products

= 2.70 ( 2023-01-09 ) =
* Update - Tested with WC 7.2

= 2.69 ( 2022-12-12 ) =
* Fix - OrderBy value for search results page query

= 2.68 ( 2022-11-28 ) =
* Update - Support for Perfect Brands for WooCommerce plugin
* Update - Stop words list

= 2.67 ( 2022-11-14 ) =
* Update - Tested with WC 7.1
* Update - Flatsome theme support
* Fix - Search results page filtering by product attributes
* Dev - Add aws_sync_index_table filter

= 2.66 ( 2022-10-31 ) =
* Add - Support for XStore theme
* Update - Integration with WooCommerce Product Filter by WooBeWoo plugin
* Update - Hooks for index table products sync

= 2.65 ( 2022-10-17 ) =
* Add - Support for Pustaka theme
* Update - Tested with WC 7.0
* Fix - SQL query for language selection

= 2.64 ( 2022-10-03 ) =
* Update - Minify assets

= 2.63 ( 2022-09-19 ) =
* Add - Archive pages number option
* Update - Tested with WC 6.9
* Fix - SQL query for language selection

= 2.62 ( 2022-09-05 ) =
* Dev - Add aws_create_cache_table action

= 2.61 ( 2022-08-22 ) =
* Update - Tested with WC 6.8
* Update - Custom Product Tabs for WooCommerce plugin integration

= 2.60 ( 2022-08-08 ) =
* Update - Css for media styles
* Update - Admin dashboard notices style
* Update - Admin page text

= 2.59 ( 2022-07-25 ) =
* Add - Support for Vandana theme
* Update - Tested with WC 6.7
* Update - Admin dashboard plugin notices
* Fix - WPML plugin integration bug with taxonomies search
* Fix - Integration bug for WooCommerce Product Filter by WooBeWoo plugin
* Dev - Add aws_ajax_request_params js hook

= 2.58 ( 2022-07-11 ) =
* Fix - Bug with synonyms words indexation

= 2.57 ( 2022-06-27 ) =
* Update - Integration for BeTheme
* Update - Tested with WC 6.6

= 2.56 ( 2022-06-13 ) =
* Fix - Bug with search form shortcodes error when id value is not specified

= 2.55 ( 2022-05-30 ) =
* Add - Support for Savoy theme
* Update - Admin page integration notices
* Update - Search form shortcode parameters
* Fix - Issue with search results caching for certain user roles

= 2.54 ( 2022-05-16 ) =
* Add - Support for Gecko theme
* Update - Tested with WC 6.5
* Update - Admin page integration notices
* Update - Support for Be theme
* Fix - Translations for stock statuses inside search results
* Fix - Error notice for Elementor plugin search module
* Fix - Php error notice about default options values
* Fix - Length of products search results descriptions
* Dev - Fix error with empty search query for results page