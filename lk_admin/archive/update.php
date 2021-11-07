<?php
 $id = $_POST['id'];
// $status = $_POST['status'];


// $mysql = new mysqli('localhost', 'root', 'root', 'project');
//
//
//
// $mysql->query("INSERT INTO `order` (`id_order`, `title`, `name`, `lastname`,
// 	 `email`, `telephone`, `date`,
// 	`time`, `adress1`, `numofair`, `numoftrain`,
// 	 `adress2`, `car`, `passenger`, `children`, `bigbag`,
// 	  `smallbag`, `pay`, `comment`, `status`, `id_users`, `price`) SELECT `id_order`, `title`, `name`, `lastname`,
// 	 `email`, `telephone`, `date`,
// 	`time`, `adress1`, `numofair`, `numoftrain`,
// 	 `adress2`, `car`, `passenger`, `children`, `bigbag`,
// 	  `smallbag`, `pay`, `comment`, `status`, `id_users`, `price` FROM `archive` WHERE `status` = 'Ожидание' OR `status` = 'Принят'");
//



  // $mysql->query("DELETE FROM `archive` WHERE `status` = 'Ожидание' OR `status` = 'Принят'");


            header('Location:index.php');

        $mysql->close();
?>
