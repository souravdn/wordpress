<?php
$display="";
if(isset($_POST['submit'])){
    $name=$_POST['name'];

    global $wpdb;
    global $table_prefix;
    $table=$table_prefix.'form';
    $sql="INSERT INTO $table (`name`) VALUES ($name);";
    $wpdb->query($sql);
    $display="Added successfully.";
}
?>