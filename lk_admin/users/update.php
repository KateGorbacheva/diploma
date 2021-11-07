<?php
$id = $_POST['id'];
$password = $_POST['password'];

if(!empty($password)){
$password = md5($password."Gdoh53FS#@!Jddtlk");
$mysql = new mysqli('localhost', 'root', 'root', 'project');

    $mysql->query("UPDATE `users` SET `name_user`='$_POST[name]', `lastname_user`='$_POST[lastname]', `telephone_user`='$_POST[telephone]', `email_user`='$_POST[email]',
    `flag`='$_POST[flag]', `login`='$_POST[login]',`password` = '$password' where id_users='$_POST[id]'");
          echo 'change_success';
            header('Location:index.php');
}
else{
$mysql = new mysqli('localhost', 'root', 'root', 'project');

    $mysql->query("UPDATE `users` SET `name_user`='$_POST[name]', `lastname_user`='$_POST[lastname]', `telephone_user`='$_POST[telephone]', `email_user`='$_POST[email]',
    `flag`='$_POST[flag]', `login`='$_POST[login]' where id_users='$_POST[id]'");
          echo 'change_success';
            header('Location:index.php');
          }





        $mysql->close();
?>
