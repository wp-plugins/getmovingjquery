<?php
/*
Plugin Name: getMovingJQuery
Plugin URI: http://saquery.com/wordpress/getMovingJQuery/
Description: get moving JQuery.
Version: 1.0.2
Author: Stephan Ahlf
Author URI: http://saquery.com/wordpress/getMovingJQuery/
*/
	global $saq;
	$saq = new saq();

	
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
			if (get_option('includeJQueryCore')) {
				$v = _saq_option('JQueryCoreVersion','1.4.2');
				$u = $cdnURL.'jquery/'.$v.'/jquery.min.js';
				wp_deregister_script( 'jquery' );
				wp_register_script( 'jquery', $u, array(), $v, false);
				wp_enqueue_script('jqueryui');
				
			}
			if (get_option('includeJQueryUI')) {
				$v_ui = _saq_option('JQueryUIVersion','1.8.2');
				$u = $cdnURL.'jqueryui/'.$v_ui.'/jquery-ui.min.js';

				wp_deregister_script( 'jqueryui' );
				wp_register_script( 'jqueryui', $u, array('jquery'), $v_ui, false);
				wp_enqueue_script('jqueryui');

			}			
			if (get_option('includeJQueryTheme')) {
				$theme = strtolower(_saq_option('JQueryUIThemeName','base')); 
				$theme = str_replace(" ","-",$theme); 
				$u = $cdnURL.'jqueryui/'.$v_ui.'/themes/'.$theme.'/jquery-ui.css';
				wp_deregister_style( 'jquery-ui-css' );
				wp_register_style( 'jquery-ui-css', $u, false, $v_ui, 'screen' );
				wp_enqueue_style('jquery-ui-css');
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



	add_action('admin_menu', array('saq', 'admin_menu'));
	add_action('init', array('saq', 'wp_head'), 0);

	
?>