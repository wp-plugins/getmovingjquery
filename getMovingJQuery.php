<?php
/*
Plugin Name: getMovingJQuery
Plugin URI: http://saquery.com/wordpress/getMovingJQuery/
Description: get moving JQuery.
Version: 0.1
Author: Stephan Ahlf
Author URI: http://saquery.com/wordpress/getMovingJQuery/
*/
	global $saq;
	$saq = new saq();

	class saq{
		function registerJQuery(){		
			echo '<script type="text/javascript" language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>'."\n";
			echo '<script type="text/javascript" language="javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>'."\n";
			echo '<link rel="StyleSheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" type="text/css" media="screen" />'."\n";
		}
	}

	add_action('wp_head', array('saq', 'registerJQuery'), 0);
?>
