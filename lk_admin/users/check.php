<?php
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];
$flag = $_POST['flag'];

$password = md5($password."Gdoh53FS#@!Jddtlk");

$mysql = new mysqli('localhost', 'root', 'root', 'project');
// $mysql->query("INSERT INTO `users` (`id_users`, `name`, `lastname`,
//      `telephone`, `email`, `flag`, `login`, `password`)
//      VALUES (NULL, '$name', '$lastname',
//         '$telephone', '$email', '$flag', '$login', '$password')");
// $mysql->query("INSERT INTO `users` (`id_users`, `name`, `lastname`, `telephone`, `email`, `flag`, `login`, `password`)
// VALUES (NULL, 'klkl', 'kkkk', '6666', 'ijioj@wjnw', 'true', 'eeeee', '2232344')");

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");


$user = $result->fetch_assoc();
if(count($user)>0){
    echo 'login_exist';
    // exit();
  }else{
    echo 'add_success';

    $mysql->query("INSERT INTO `users` (`id_users`, `name_user`, `lastname_user`,
          `telephone_user`, `email_user`, `flag`, `login`, `password`)
         VALUES (NULL, '$name', '$lastname',
          '$telephone', '$email', '$flag', '$login', '$password')");
//echo 'add_success';
            header('Location:index.php');

  }




        $mysql->close();
?>
