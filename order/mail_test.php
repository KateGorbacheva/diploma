<?php

$method = $_SERVER['REQUEST_METHOD'];


$sel1 = $_POST['Обращение'];
$name = $_POST['Имя'];
$lastname = $_POST['Фамилия'];
$email = $_POST['Почта'];
$telephone = $_POST['Телефон'];
$date = $_POST['Дата'];
$time = $_POST['Время'];
$adress1 = $_POST['Адрес_встречи'];
$numofair = $_POST['Номер_авиарейса'];
$numoftrain = $_POST['Номер_поезда'];
$adress2 = $_POST['Адрес_назначения'];
$sel2 = $_POST['Машина'];
$passenger = $_POST['Кол-во_пассажиров'];
$children = $_POST['Дети_меньше_7_лет'];
$bigbag = $_POST['Кол-во_чемоданов'];
$smallbag = $_POST['Кол-во_ручной_клади'];
$sel3 = $_POST['Способ_оплаты'];
$comment = $_POST['Коментарии_к_заказу'];
$status = $_POST['status'];
$id_users = $_POST['id_users'];

//Подключение БД
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'project');
$mysql = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
//if ($mysql->connect_errno)exit('error connected bd');
$mysql->set_charset(UTF-8);
$result = $mysql->query("SELECT * FROM `order` WHERE `lastname_user` = '$lastname_user' AND `name_user` = '$name_user'");



if($sel2=="Comfort (1 - 4 чел. + 4 багажа)"){
	$mysql->query("INSERT INTO `order` (`id_order`, `title`, `name`, `lastname`,
		 `email`, `telephone`, `date`,
		`time`, `adress1`, `numofair`, `numoftrain`,
		 `adress2`, `car`, `passenger`, `children`, `bigbag`,
		  `smallbag`, `pay`, `comment`, `status`,`id_users`,`price`) VALUES (NULL, '$sel1', '$name', '$lastname',
				 '$email', '$telephone', '$date', '$time', '$adress1', '$numofair', '$numoftrain', '$adress2', '$sel2',
				  '$passenger', '$children', '$bigbag', '$smallbag', '$sel3', '$comment', '$status', '$id_users', '30 €')");
}
else if($sel2=="Minibus (1 - 6 чел. + 6 багажа)"){
	$mysql->query("INSERT INTO `order` (`id_order`, `title`, `name`, `lastname`,
		 `email`, `telephone`, `date`,
		`time`, `adress1`, `numofair`, `numoftrain`,
		 `adress2`, `car`, `passenger`, `children`, `bigbag`,
		  `smallbag`, `pay`, `comment`, `status`,`id_users`,`price`) VALUES (NULL, '$sel1', '$name', '$lastname',
				 '$email', '$telephone', '$date', '$time', '$adress1', '$numofair', '$numoftrain', '$adress2', '$sel2',
				  '$passenger', '$children', '$bigbag', '$smallbag', '$sel3', '$comment', '$status', '$id_users', '50 €')");
}
else if($sel2=="Executive (1 - 3 чел. + 3 багажа)"){
	$mysql->query("INSERT INTO `order` (`id_order`, `title`, `name`, `lastname`,
		 `email`, `telephone`, `date`,
		`time`, `adress1`, `numofair`, `numoftrain`,
		 `adress2`, `car`, `passenger`, `children`, `bigbag`,
		  `smallbag`, `pay`, `comment`, `status`,`id_users`,`price`) VALUES (NULL, '$sel1', '$name', '$lastname',
				 '$email', '$telephone', '$date', '$time', '$adress1', '$numofair', '$numoftrain', '$adress2', '$sel2',
				  '$passenger', '$children', '$bigbag', '$smallbag', '$sel3', '$comment', '$status', '$id_users', '65 €')");
}
else if($sel2=="Luxury (1 - 3 чел. + 3 багажа)"){
	$mysql->query("INSERT INTO `order` (`id_order`, `title`, `name`, `lastname`,
		 `email`, `telephone`, `date`,
		`time`, `adress1`, `numofair`, `numoftrain`,
		 `adress2`, `car`, `passenger`, `children`, `bigbag`,
		  `smallbag`, `pay`, `comment`, `status`,`id_users`,`price`) VALUES (NULL, '$sel1', '$name', '$lastname',
				 '$email', '$telephone', '$date', '$time', '$adress1', '$numofair', '$numoftrain', '$adress2', '$sel2',
				  '$passenger', '$children', '$bigbag', '$smallbag', '$sel3', '$comment', '$status', '$id_users', '95 €')");
}



$mysql->close();

?>
