<?php
// echo "Hi Welcome";
    global $wpdb;
    global $table_prefix;
    $table=$table_prefix.'form';
    $sql="select * from $table;";
    $result=$wpdb->get_results($sql);
?>

<table style="text-align:center; font-family:arial; ; color:orange; background-color:black; border:5px solid orange">
    <tr>
        <th>Name</th>
    </tr>
    <?php
foreach($result as $value){ ?>
    <tr>
        <td><?php echo $value->name?></td>
    </tr>
    <?php
}
    ?>



</table>