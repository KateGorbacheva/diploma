<?php
  session_start();
  $login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);

  $pass = filter_var(trim($_POST['pass']),
  FILTER_SANITIZE_STRING);
  $pass= md5($pass."Gdoh53FS#@!Jddtlk");
  $mysql = new mysqli('localhost', 'root', 'root', 'project');
  $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");
if (mysqli_num_rows($result) > 0) {
  $user = mysqli_fetch_assoc($result);
  //$admin = mysqli_fetch_assoc($result);

      if($user["flag"] == "true"){
        header('Location:http://localhost:8888/Project0.2/lk_admin/order');
        $_SESSION['admin'] = [

            "pass" => $user['pass'],
            "login" => $user['login'],
            "name_user" => $user['name_user'],
            "lastname_user" => $user['lastname_user'],
            "id_users" => $user['id_users'],
        ];
      }
      else {
        $_SESSION['user'] = [

            "pass" => $user['pass'],
            "login" => $user['login'],
            "name_user" => $user['name_user'],
            "lastname_user" => $user['lastname_user'],

        ];
        header('Location:http://localhost:8888/Project0.2/lk_driver');
      }

}else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: enter.php');
    }


//   $user = $result->fetch_assoc();
//   if(count($user)==0){
//       echo "Такого пользователя нет";
//       exit();
//     }
// //$result1 = $mysql->query("SELECT `flag` FROM `users` WHERE `login` = '$login'");
// if($user["flag"] == "true"){
//   header('Location:http://localhost:8888/Project0.2/lk_admin/order');
// }
// else {
//   header('Location:http://localhost:8888/Project0.2/lk_driver');
// }
//
//
//   $mysql->close();


 ?>
