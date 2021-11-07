<?php

echo 'error';

$id = $_POST['id'];
$sel1 = $_POST['sel1'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$date = $_POST['date'];
$time = $_POST['time'];
$adress1 = $_POST['adress1'];
$numofair = $_POST['numofair'];
$numoftrain = $_POST['numoftrain'];
$adress2 = $_POST['adress2'];
$sel2 = $_POST['sel2'];
$passenger = $_POST['passenger'];
$children = $_POST['children'];
$bigbag = $_POST['bigbag'];
$smallbag = $_POST['smallbag'];
$sel3 = $_POST['sel3'];
$comment = $_POST['comment'];
$status = $_POST['status'];
$price = $_POST['price'];

//Подключение БД
$mysql = new mysqli('localhost', 'root', 'root', 'project');

 $mysql->query("UPDATE `order` SET status='$_POST[status]',title='$sel1', name='$name', lastname='$lastname',
   email='$email', telephone='$telephone',date='$date',
   time='$time', adress1= '$adress1', numofair = '$numofair', numoftrain='$numoftrain',
   	 adress2='$adress2', car='$sel2', passenger='$passenger', children='$children', bigbag='$bigbag',
    	  smallbag='$smallbag', pay='$sel3', comment='$comment', price='$price' where id_order='$_POST[id]'");
        header('Location:index.php');



$mysql->close();

?>
