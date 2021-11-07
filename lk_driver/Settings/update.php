<?php
session_start();

$login=$_SESSION['user']['login'];
//$id = $_POST['id'];

$password = $_POST['password'];
$newpassword = $_POST['newpassword'];

$telephone = $_POST['telephone'];
$email = $_POST['email'];
$new_login = $_POST['login'];

if(!empty($newpassword) && !empty($password)){
  ob_clean();
  $password = md5($password."Gdoh53FS#@!Jddtlk");
  $mysql = new mysqli('localhost', 'root', 'root', 'project');
  //$password = md5($password."Gdoh53FS#@!Jddtlk");
  $check = $mysql->query("SELECT `password` FROM `users` WHERE `login` = '$login' ");
  $res = mysql_fetch_assoc($check);
  if($res==$password){
    $newpassword = md5($newpassword."Gdoh53FS#@!Jddtlk");
    $result = $mysql->query("UPDATE `users` SET `password` = '$newpassword' WHERE `login` = '$login' AND `password` = '$password'");
    echo 'change_success';
  }
  else { echo 'error'; }

    // $user = $result->fetch_assoc();
    // if(count($user)===0){
    //   echo 'error';
    // }
    // $test = mysql_query($result)
    // $use = mysqli_fetch_assoc($result );
    // if(!$test){
    //     echo 'error';
    // }
     // else{ echo 'change_success'; }
        //header('Location:index.php');

          // echo 'change_success';
          // $result = $mysql->query("UPDATE `users` SET `telephone_user`='$_POST[telephone]', `email_user`='$_POST[email]',
          // `login`='$_POST[login]',`password` = '$newpassword' WHERE `login` = '$login' AND `password` = '$password'");
}
if(!empty($new_login)){
  ob_clean();
  echo 'change_login';
$mysql = new mysqli('localhost', 'root', 'root', 'project');

    $mysql->query("UPDATE `users` SET `login`='$new_login' WHERE `login` = '$login' ");

          unset($_SESSION['user']);
            header('Location: http://localhost:8888/Project0.2/enter/enter.php');
          }

if(!empty($telephone)){
ob_clean();
            $mysql = new mysqli('localhost', 'root', 'root', 'project');

              $mysql->query("UPDATE `users` SET `telephone_user`='$telephone' WHERE `login` = '$login' ");

                    echo 'change_success';

                      // header('Location:index.php');

                    }
if(!empty($email)){
  ob_clean();
                      $mysql = new mysqli('localhost', 'root', 'root', 'project');


                        $mysql->query("UPDATE `users` SET `email_user`='$email' WHERE `login` = '$login' ");
                              echo 'change_success';
                                // header('Location:index.php');
                              }


        $mysql->close();
?>
