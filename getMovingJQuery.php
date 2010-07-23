<?php
/*
Plugin Name: getMovingJQuery
Plugin URI: http://saquery.com/wordpress/getMovingJQuery/
Description: get moving JQuery.
Version: 1.0.1
Author: Stephan Ahlf
Author URI: http://saquery.com/wordpress/getMovingJQuery/
*/
	global $saq;
	$saq = new saq();

	add_action('admin_menu', array('saq', 'admin_menu'));
	add_action('wp_head', array('saq', 'wp_head'), 0);
	
	function _saq_option($id, $defaultValue){
		$result = get_option($id);
		if ($result===false){ 
			$result = $defaultValue;
		}
		return $result;
	}

	class saq{
		
		function admin_init() {
			register_setting( 'getMovingJQueryOptions', 'includeJQueryCore' );
			register_setting( 'getMovingJQueryOptions', 'includeJQueryUI' );
			register_setting( 'getMovingJQueryOptions', 'includeJQueryTheme' );
			register_setting( 'getMovingJQueryOptions', 'JQueryCoreVersion' );
			register_setting( 'getMovingJQueryOptions', 'JQueryUIVersion' );
			register_setting( 'getMovingJQueryOptions', 'JQueryUIThemeName' );
		}

		function wp_head(){		
			$cdnURL = 'http://ajax.googleapis.com/ajax/libs/';
			if (get_option('includeJQueryCore')) echo '<script type="text/javascript" language="javascript" src="'.$cdnURL.'jquery/'._saq_option('JQueryCoreVersion','1.4.2').'/jquery.min.js"></script>'."\n";
			if (get_option('includeJQueryUI')) echo '<script type="text/javascript" language="javascript" src="'.$cdnURL.'jqueryui/'._saq_option('JQueryUIVersion','1.8.2').'/jquery-ui.min.js"></script>'."\n";
			if (get_option('includeJQueryTheme')) {
				$theme = strtolower(_saq_option('JQueryUIThemeName','base')); 
				$theme = str_replace(" ","-",$theme); 
				echo '<link rel="StyleSheet" href="'.$cdnURL.'jqueryui/1.8/themes/'.$theme.'/jquery-ui.css" type="text/css" media="screen" />'."\n";
			}
		}
		
		function admin_menu(){
			add_submenu_page('options-general.php', 'getMovingJQuery Options', 'getMovingJQuery', 8, __FILE__,  array('saq', 'options'));
			add_action( 'admin_init', array('saq','admin_init') );
		}

		function options(){
			require_once dirname(__FILE__).'/getMovingJQuery.options.php';
?>
<?php			
		}
	}
?>