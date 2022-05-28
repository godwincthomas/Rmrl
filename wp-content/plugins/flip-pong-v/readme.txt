=== Flip Pong V ===
Authors: tambourdeville
Contributors:
Authors URI: http://www.tambourdeville.net/en
Plugin URI: http://tambourdeville.net/en/?page_id=256
Donate link: http://tambourdeville.net/en/?page_id=270
Version: 1.4.2
Tags: book, books, effect, flip, flipbook, flipbooks, html5, image, images, livre, page, pages, turn, reader
Requires at least: 3.3.1
Tested up to: 3.5
Stable tag: 1.4.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

HTML5 Flipbook (no flash), easy to integrate: easy image adding and ordering (for pages), entirely sizable.

== Description ==

This is the ultimate HTML5 flipbook: Every page is made of one image, with a nice flipping pages effect.
You can flip pages with the mouse as a real book, or use left/right buttons.
The admin pannel helps you to insert, remove and order your pages.
You also choose dimensions of  each flipbook.
You can enable a shadow around the flipbook.
YOU NEED AT LEAST PHP 5.3 WITH THE VERSION 1.4 !

== Installation ==

YOU NEED AT LEAST PHP 5.3 WITH THE VERSION 1.4 !
1. Upload the folder "Flip Pong V" to the "/wp-content/plugins/" directory (if you don't install it through the dashboard).
2. Activate the plugin through the 'Plugins' menu in WordPress
3. In the admin pannel, a button "Flipbooks" has now appeared
4. Click on it and create Flipbooks !

== Frequently Asked Questions ==

= How do I create a flipbook? =
On a "flibook" edit page, enter a name for your flipbook, choose the size, choose if you want shadow around.
Then click on the "Add Media" button. Add all images you want to create your flipbook.
Once uploaded, click on "create a gallery" on the left panel. 
Click on "Create a new gallery". 
That's all! You can save your post and see the result.

= How do I modify a flipbook? =
On your flipbook edit page, you can change parameters as size or shadow.
To modify images/pages, click on the "Edit Gallery" button, in the content. Here you can add images to your book.

= I have the following error message : "Wrong parameter count for strstr()"
It's because your PHP version is too old. Update it by editing your .htaccess file
You need at least PHP 5.3.

= No images appear on my flipbook ? =
Be careful to have only [gallery ids="xxx, xxx ,xxx"] in your post.
Remove every other attributes like [gallery columns="y"] or [gallery links=""]
Just the shortcode [gallery] with no ids won't work.

== Changelog ==

= 1.0 =
Initial Release

= 1.0.1 =
*bugfix: new name of function for custom post type

= 1.1 =
bugfix

= 1.2 =
Class "flippong" added.
Function "check_version" added.
Function "copy_file_flippong" added. No need to copy the file "single_flip-pong" anymore.
Improvement about how the plugin interracts with WP

= 1.3 =
This version is now compatble with WordPress 3.5
Change the css for a better display.
Images order is now defined with the "title" attribute.

= 1.4 =
You can now add/delete/reorder images in your flipbooks directly with the gallery pannel.

== Upgrade Notice ==
= 1.2 =
You may save your flipbook(s) before upgrading to 1.2: this version is not compatible with the previous one.

= 1.4 =
You need at least PHP 5.3.

= 1.4.1 =
You need at least PHP 5.3.