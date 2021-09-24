<?php
$display="";
if(isset($_POST['submit'])){
    $name=$_POST['name'];

    global $wpdb;
    // global $table_prefix;
    // $table=$table_prefix.'form';
    $sql="INSERT INTO 'wp_form' (`name`) VALUES ($name);";
    // $sql=001;
    $wpdb->query($sql);
    $display="Added successfully.";
    echo $display;
}
?>