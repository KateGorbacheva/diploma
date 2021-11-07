<?php
$id = $_POST['id'];
$status = $_POST['status'];

  echo 'login_exist';
$mysql = new mysqli('localhost', 'root', 'root', 'project');

    $mysql->query("UPDATE `order` SET status='$_POST[status]' where id_order='$_POST[id]'");

            // header('Location:index.php');

        $mysql->close();



?>
