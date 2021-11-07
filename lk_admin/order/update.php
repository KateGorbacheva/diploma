<?php
 $id = $_POST['id'];
// $status = $_POST['status'];


// $mysql = new mysqli('localhost', 'root', 'root', 'project');


echo 'error';

// $mysql->query("INSERT INTO `archive` (`id_order`, `title`, `name`, `lastname`,
// 	 `email`, `telephone`, `date`,
// 	`time`, `adress1`, `numofair`, `numoftrain`,
// 	 `adress2`, `car`, `passenger`, `children`, `bigbag`,
// 	  `smallbag`, `pay`, `comment`, `status`, `id_users`, `price`) SELECT `id_order`, `title`, `name`, `lastname`,
// 	 `email`, `telephone`, `date`,
// 	`time`, `adress1`, `numofair`, `numoftrain`,
// 	 `adress2`, `car`, `passenger`, `children`, `bigbag`,
// 	  `smallbag`, `pay`, `comment`, `status`, `id_users`, `price` FROM `order` WHERE `status` = 'Выполнено' OR `status` = 'Отказ'");
//
//   $mysql->query("DELETE FROM `order` WHERE `status` = 'Выполнено' OR `status` = 'Отказ'");


            header('Location:index.php');

        $mysql->close();
?>
