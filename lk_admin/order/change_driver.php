<?php
$id = $_POST['id'];
$lastname_user = $_POST['lastname_user'];
$name_user = $_POST['name_user'];


$mysql = new mysqli('localhost', 'root', 'root', 'project');
$result = $mysql->query("SELECT * FROM `users` WHERE `lastname_user` = '$lastname_user' AND `name_user` = '$name_user'");





            $user = $result->fetch_assoc();
              if(count($user)==0){
                  echo 'login_exist';
                  exit();

                }
                else{
                  echo 'login';
                  $mysql->query("UPDATE `order` SET `id_users`=(SELECT `id_users` FROM `users` WHERE `lastname_user`='$lastname_user' AND `name_user`='$name_user') WHERE `id_order`='$id'");
                              header('Location:index.php');


                }



        $mysql->close();

        // if (mysqli_num_rows($id_users) > 0) {
        //   $user = mysqli_fetch_assoc($id_users);
        //
        //
        // }else {
        //         $_SESSION['message'] = 'Не верный логин или пароль';
        //         header('Location: enter.php');
        //     }
?>
