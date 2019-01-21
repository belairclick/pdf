<?php 
/*
 * Plugin Name: Wordpress dompdf
 * Description: Import dompdf (<a href="http://dompdf.github.com/">http://dompdf.github.com/</a>) into WordPress
 * Version: 0.0.1
 */

if ( !function_exists( 'add_action' ) ) {
   echo 'This is just a plugin.';
   exit;
}


if ( !class_exists('WP_DOMPDF')) :

class WP_DOMPDF {
    public static function loadUp() {
        require_once("dompdf_config.inc.php");
    }
}

endif;

?>