=== Plugin Name ===
Contributors: saquery.com
Donate link: http://saquery.com/wordpress/getmovingjquery
Tags: JQuery
Requires at least: 2.9.2
Tested up to: 3.0.1
Stable tag: 1.0.3.2

This WordPress Plugin provides a very easy way to load the well known jQuery and jQuery UI Javascript library with the basic CSS theme from Google CDN.
It is cool to write Blog Posts about JQuery and include some ready to work <a href="http://saquery.com/jquery-template-plugin/" target="_blank" >JQuery sample code</a>.

== Description ==

This WordPress Plugin provides a very easy way to load the well known jQuery and jQuery UI Javascript library with the basic CSS theme from Google CDN.
It is cool to write Blog Posts about JQuery and include some ready to work <a href="http://saquery.com/jquery-template-plugin/" target="_blank" >JQuery sample code</a>.

== Changelog ==

<ul>
	<strong style="color:red;">1.0.3.2</strong>
	<li>
		Fixed a compatibility issue with Wordpress 3 while calling add_submenu_page.
	</li>
</ul>
<ul>
	<strong style="color:red;">1.0.3.1</strong>
	<li>
		Improved Plugin Sample Page at <a href="http://saquery.com/jquery-template-plugin/" title="Permalink: jQuery.tmp – A jQuery Template Plugin">http://saquery.com/jquery-template-plugin/ -jQuery.tmp – A jQuery Template Plugin</a>
	</li>
</ul>

<ul>
	<strong style="color:red;">1.0.3 hotfix</strong>
	<li>
		jQuery runs in noconflict mode in Wordpress backend. <br />
		For that reason getMovingJQuery script inclusions are now only invoked if (is_admin()===false).
	</li>
</ul>

<ul>
<strong>1.0.2</strong>
<li>Inclusion of jQuery Core Library is now optional.</li>
<li>Inclusion of jQuery UI Library is now optional.</li>
<li>Inclusion of jQuery CSS is now optional.</li>
<li>Version of jQuery Core Library is now configurable.</li>
<li>Version of jQuery UI Library is now configurable.</li>
<li>Themename of jQuery CSS Theme is now configurable.</li>
<li>User can choose CSS Theme from dropdownbox.</li>
</ul> 

<ul>
<strong>0.0.1</strong>
<li>Initial import.</li>
</ul>

== Installation ==

This section describes how to install the plugin and get it working.

   1. Upload getmovingjquery.php to the /wp-content/plugins/getmovingjquery/ directory.
   2. Activate the plugin through the ‘Plugins’ menu in WordPress
   3. Activate inclusion of jQuery in the <a href="http://wordpress.org/extend/plugins/getmovingjquery/screenshots/">administration panel</a>. 
   You need to save you settings! jQuery will not autmaticly included after plugin activation.
   
   <strong>Done! You are now ready to make use of jQuery and jQuery UI</strong>.

== Frequently Asked Questions ==

= None =

None.

== Screenshots ==

1. Administration