<?php
$id = $_POST['id'];


$mysql = new mysqli('localhost', 'root', 'root', 'project');

    $mysql->query("DELETE FROM `users` where id_users=$id");
          echo 'change_success';
            header('Location:index.php');
// where id_users='$_POST[id]'




        $mysql->close();
?>
