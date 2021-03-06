=== Raw HTML ===
Contributors: whiteshadow
Tags: posts, formatting, javascript, html, css, code
Requires at least: 2.2
Tested up to: 2.5.1
Stable tag: 1.0.5

Lets you use raw HTML or any other code in your posts. 

== Description ==

This plugin lets you use raw HTML or any other code in your posts. Wrap a part of your post in special tags (below) to prevent WordPress from converting newlines to HTML paragraphs, escaping apostrophes and so on. Very useful if you need to add a CSS block or JavaScript to your post.

**Using the plugin**

To prevent a part of your post or page from being filtered by WordPress, wrap it in `<!--start_raw-->...<!--end_raw-->` or `[RAW]...[/RAW]` tags. These two versions work exactly the same, but the latter may be handy if you're using the visual editor (not recommended).

*Example :*
`<!--start_raw-->
This 

is 

a 'test'!
<!--end_raw-->`

**Notes**

* I strongly recommend to turn off the visual editor when you want to edit a post that contains raw HTML/JS/CSS. 
* Personally, I prefer the `<!--start_raw-->...<!--end_raw-->` syntax. These tags are formed as HTML comments, which means they won't be visible to your visitors even if you deactivate the Raw HTML plugin. On the other hand. the `[RAW]...[/RAW]` tags would show up.

== Installation ==

To install the plugin follow these steps :

1. Download the raw-html.zip file to your local machine.
1. Unzip the file.
1. Upload the "raw-html" folder to your "/wp-content/plugins/" directory.
1. Activate the plugin through the 'Plugins' menu in WordPress
