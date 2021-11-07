<?php
session_start();

if (!$_SESSION['admin']) {
    header('Location: http://localhost:8888/Project0.2/enter/enter.php');
}
$name=$_SESSION['admin']['name_user'];
$lastname=$_SESSION['admin']['lastname_user'];
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="form.js"></script>

<!-- Подключение jQuery плагина Masked Input -->
<script src="http://localhost:8888/Project0.2/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<style>
@import url('https://fonts.googleapis.com/css?family=Arimo');
*{
	margin: 0;
	padding: 0;
}
body{
/* Full width background: #eee;


font-family: 'Arimo', sans-serif;*/
background: linear-gradient(rgba(255,255,255,.1),rgba(0,0,0,.1)),url(fon.jpg);
-webkit-background-size:cover;
background-size: cover;
background-attachment: fixed;
font-family: 'Arimo', sans-serif;



}
.header{
	background: rgba(255, 255, 255, 0.7);
	width: 100%;
  height: 65px;
	position: fixed;
	z-index: 2;
}
.header-wrap{
	display: flex;
	justify-content: space-between;

}
ul,li{
	display: flex;


}
.header a {
	display: block;
	text-transform: uppercase;
	text-decoration: none;
	font-size: 16px;
	color: #000;
	padding: 20px 15px;

}
h1 {
  margin: 0px 100px;
  padding: 20px 20px;
  text-align: center;
  font-size: 25px;
  text-transform: uppercase;
  font-family: 'Arimo', sans-serif;
  color: RoyalBlue;
}




  tbody tr:hover {
   background: #f3bd48; /* Цвет фона при наведении */
   color: #fff; /* Цвет текста при наведении */
  }
  .table {
    padding: 30px;
		margin: 15px auto;
		width: 400px;


  }

  form {
    width:50%;
    margin: 0 0;


  }

.container {
    background: rgba(255, 255, 255, 0.7);
    margin: 15px auto;
    border: 1px solid #CCC;
    border-radius: 1em;
    overflow-x: auto;
    /* width: 1100px; */
    height: auto;

}

</style>
<header class="header" id="header">
  <!-- style="background-color: #eee;" -->

<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #66a1fa; ">

  <a class="navbar-brand " style="color:white;" href="#"class="logo"><?=$name, ' ', $lastname?></a>

  <button class="navbar-toggler  " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end"  id="navbarNav">

    <ul class="navbar-nav align-items-center " >
      <li class="nav-item active">

        <a class="nav-link" style="color:white;" href="http://localhost:8888/Project0.2/lk_admin/order">Заказы<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="color:white;" href="http://localhost:8888/Project0.2/lk_admin/users">Водители</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" style="color:white;" href="http://localhost:8888/Project0.2/lk_admin/archive">Архив заказов</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link"  style="color:white;" href="http://localhost:8888/Project0.2/enter/logout.php">Выход</a>

      </li>
    </ul>

</div>
</nav>

</header>

</head>
<body>
 <!-- <header class="header" id="header">
		<div class="contain header-wrap">
	  <a href="#" class="logo"></a>
			<nav>
	  <ul>
			<li><a href="http://localhost:8888/Project0.2/lk_admin/order">Заказы</a></li>
			<li><a href="http://localhost:8888/Project0.2/lk_admin/users">Водители</a></li>
			<li><a href="http://localhost:8888/Project0.2/lk_admin/archive">Архив заказов</a></li>
			<li><a href="http://localhost:8888/Project0.2/enter/logout.php">Выход</a></li>
	  </ul>
	</nav>
</div>
</header> -->
<br><br><br>
<div class="container">

  <h1>Архив Заказов</h1>
  <br>
  <div class = "choicem"></div>

  <form class="form" id="form" name="form">
		<!-- <div id ="errorMess"></div> -->
    <div class="row">
      <div class="col">
<label for="id">id:</label>
       <input type="text" class="form-control" name="id"  id="id" size="25" placeholder="id" >

      </div>
        </div>

<br>
 <label for="status">Выберите статус:</label>
<select name="status" id="status" class="form-control" >
    <option value="Ожидание">Ожидание</option>
    <option value="Принят">Принят</option>
    <option value="Выполнено">Выполнено</option>
    <option value="Отказ">Отказ</option>

</select>
<br>
<button type="submit" class="btn btn-success"  name = "btn_status" id = "btn_status"><span class="text-button">Изменить статус</span></button>
<button type="submit" class="btn btn-success"  name = "btn_update" id = "btn_update"><span class="text-button">Обновить</span></button>
 </form>

<br>

<div class = "con">
<table class="table table-bordered" id="users">

  <thead>
      <tr class="table-primary">

        <th scope="col" for="id">#</th>
        <th scope="col" for="">Время добавления</th>
        <th scope="col" for="status">Статус</th>
        <th scope="col" >Цена заказа</th>
        <th scope="col" for="id_users">Фамилия Водителя</th>
        <th scope="col" for="id_users">Имя Водителя</th>
        <th scope="col" for="">Обращение</th>
        <th scope="col" for="">Имя</th>
        <th scope="col" for="">Фамилия</th>
        <th scope="col" for="">Почта</th>
        <th scope="col" for="">Телефон</th>
        <th scope="col" for="">Дата</th>
        <th scope="col" for="">Время</th>
        <th scope="col" for="">Адрес встречи</th>
        <th scope="col" for="">Номер самолета</th>
        <th scope="col" for="">Номер поезда</th>
        <th scope="col" for="">Адрес прибытия</th>
        <th scope="col" for="">Машина</th>
        <th scope="col" for="">Кол-во пассажиров</th>
        <th scope="col" for="">Кол-во детей</th>
        <th scope="col" for="">Кол-во чемоданов</th>
        <th scope="col" for="">Кол-во ручной клади</th>
        <th scope="col" for="">Способ оплаты</th>
        <th scope="col" for="">Комментарий</th>




    </thead>
     <tbody>

<?php

      $db_host = 'localhost';
      $db_user = 'root';
      $db_password = 'root';
      $db_db = 'project';
      $db_port = 8889;
    $link = mysqli_connect(
                $db_host,
                $db_user,       /* Имя пользователя */
                $db_password,   /* Используемый пароль */
                $db_db,
                $db_port  );     /* База данных для запросов по умолчанию */

    if (!$link) {
       printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
       exit;
    }
    echo "\n";
$query ="SELECT * FROM `order` join `users`  ON users.id_users=order.id_users WHERE `status` = 'Выполнено' OR `status` = 'Отказ' ORDER BY id_order";
// $query ="SELECT * FROM `archive` ORDER BY id_order";

$result = mysqli_query($link, $query) or die("Ошибка Вывода таблицы  'users' " . mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    ?>

<?php foreach ($data as $db_user) { ?>

          <td for="id"><?= $db_user['id_order']?></td>
          <td for=""><?= $db_user['add_time']?></td>
          <td for="status"><?= $db_user['status']?></td>
          <td for="price"><?= $db_user['price']?></td>
          <td for="lastname_user"><?= $db_user['lastname_user']?></td>
          <td for="name_user"><?= $db_user['name_user']?></td>
          <td for=""><?= $db_user['title']?></td>
          <td for=""><?= $db_user['name']?></td>
          <td for=""><?= $db_user['lastname']?></td>
          <td for=""><?= $db_user['email']?></td>
          <td for=""><?= $db_user['telephone']?></td>
          <td for=""><?= $db_user['date']?></td>
          <td for=""><?= $db_user['time']?></td>
          <td for=""><?= $db_user['adress1']?></td>
          <td for=""><?= $db_user['numofair']?></td>
          <td for=""><?= $db_user['numoftrain']?></td>
          <td for=""><?= $db_user['adress2']?></td>
          <td for=""><?= $db_user['car']?></td>
          <td for=""><?= $db_user['passenger']?></td>
          <td for=""><?= $db_user['children']?></td>
          <td><?= $db_user['bigbag']?></td>
          <td for=""><?= $db_user['smallbag']?></td>
          <td for=""><?= $db_user['pay']?></td>
          <td for=""><?= $db_user['comment']?></td>


        </tr>
    <?php  }
     mysqli_free_result($result);
    $mysqli->close();
    ?>


 </tbody>

</table>
</div>
</div>


</body>

</html>
