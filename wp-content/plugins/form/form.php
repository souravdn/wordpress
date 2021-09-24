<?php
/*
plugin Name: Form
plugin URI: www.google.com
description: My 1st plugin with a minimal description built in php for wordpress:}
Author:Sourav Debnath
Author URI: www.facebook.com
Version:1.0.0
*/


register_activation_hook(__FILE__,'form_activate');
register_deactivation_hook(__FILE__,'form_deactivate');


function form_activate(){
    global $wpdb;
    global $table_prefix;
    $table=$table_prefix.'form';
    $sql="CREATE TABLE $table (`name` varchar(20) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
    $wpdb->query($sql);
}
function form_deactivate(){
    
    global $wpdb;
    global $table_prefix;
    $table=$table_prefix.'form';
    $sql="DROP TABLE `wordpress_db`.$table;";
    $wpdb->query($sql);
    
}
    
    add_action('admin_menu','form_bar');
    function form_bar(){
           add_menu_page('Custom Form Name List Plugin','Custom Form plugin ',1,'__FILE__','Form_data_list');
    }

    add_shortcode('short_code_form_plugin_output','Form_data_list');
    
    function Form_data_list(){
        // echo "welcome";
        include('output.php');
    }
    
    add_shortcode('short_code_form_plugin_input','Form_input');
    
    function Form_input(){
        // echo "welcome";
        include('input.php');
    }

    ?>