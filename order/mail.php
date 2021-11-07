<?php

$method = $_SERVER['REQUEST_METHOD'];

//Script Foreach
$c = true;
if ( $method === 'POST' ) {

	$project_name = trim($_POST["project_name"]);
	$admin_email  = trim($_POST["admin_email"]);
	$form_subject = trim($_POST["form_subject"]);

	foreach ( $_POST as $key => $value ) {
		if ( $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
			</tr>
			";
		}
	}
} else if ( $method === 'GET' ) {

	$project_name = trim($_GET["project_name"]);
	$admin_email  = trim($_GET["admin_email"]);
	$form_subject = trim($_GET["form_subject"]);

	foreach ( $_GET as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
			</tr>
			";
		}
	}
}

$message = "<table style='width: 100%;'>$message</table>";

function adopt($text) {
	return '=?UTF-8?B?'.Base64_encode($text).'?=';
}

$headers = "MIME-Version: 1.0" . PHP_EOL .
"Content-Type: text/html; charset=utf-8" . PHP_EOL .
'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
'Reply-To: '.$admin_email.'' . PHP_EOL;

mail($admin_email, adopt($form_subject), $message, $headers );


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

//Подключение БД
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'project');
$mysql = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
//if ($mysql->connect_errno)exit('error connected bd');
$mysql->set_charset(UTF-8);

$mysql->query("INSERT INTO `order` (`id_order`, `title`, `name`, `lastname`,
	 `email`, `telephone`, `date`,
	`time`, `adress1`, `numofair`, `numoftrain`,
	 `adress2`, `car`, `passenger`, `children`, `bigbag`,
	  `smallbag`, `pay`, `comment`, `status`) VALUES (NULL, '$sel1', '$name', '$lastname',
			 '$email', '$telephone', '$date', '$time', '$adress1', '$numofair', '$numoftrain', '$adress2', '$sel2',
			  '$passenger', '$children', '$bigbag', '$smallbag', '$sel3', '$comment', '$status')");


$mysql->close();

?>
