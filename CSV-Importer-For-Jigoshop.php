<?php
/*
Plugin Name: Jigoshop CSV Importer
Description: CSV Importer for Jigoshop
Version: 1.1
Author: promag
Author URI: http://freebloggingtricks.com/
License: GPL
parent: jigoshop
*/

/**
 * This file is part of jigoshop-csv-importer.
 * 
 * Simple woocommerce CSV Importer is Pro software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Pro Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * simple woocommerce-csv-importer is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with simple-wocommerce-csv-importer.  If not, see <http://www.gnu.org/licenses/>.
 */

class CSVImporterForJigoshop {
    function __construct() {
        add_action( 'init', array( $this, 'init' ) );
        if ( is_admin() ) {
            add_action( 'admin_menu', array( $this, 'admin_menu' ), 99 );
        }
    }

    function init() {
        if ( function_exists( 'import_plugin_textdomain' ) )
            import_plugin_textdomain( 'tcp_csvl', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
    }

    function admin_menu() {
        
if (function_exists('add_menu_page'))
{
add_menu_page('CSV Importer', 'CSV Importer', 'administrator', dirname( __FILE__ ) . '/admin/Jigoshop-CSV-Importer.php');
}
    }
}

new CSVImporterForJigoshop();
?>
