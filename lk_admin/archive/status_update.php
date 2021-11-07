<?php
$id = $_POST['id'];
$status = $_POST['status'];


$mysql = new mysqli('localhost', 'root', 'root', 'project');

    $mysql->query("UPDATE `order` SET status='$_POST[status]' where id_order='$_POST[id]'");


        $mysql->close();
?>
