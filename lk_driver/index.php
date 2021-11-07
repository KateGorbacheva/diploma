<?php
session_start();

if (!$_SESSION['user']) {
    header('Location: http://localhost:8888/Project0.2/enter/enter.php');
}
$name=$_SESSION['user']['name_user'];
$lastname=$_SESSION['user']['lastname_user'];
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="form_test.js"></script>

<!-- Подключение jQuery плагина Masked Input -->
<script src="http://localhost:8888/Project0.2/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
                		width: auto;


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
                    /* width:8px; */

                    height: 800px;

                }
                .text{
                  margin: 180px;
                  text-align: center;
                  font-family: serif;
                  font-style: italic;
                  color: black;
                  font-size: 35px;
                  text-shadow: 2px 2px silver;
                }

</style>
<header class="header" id="header">
  <!-- style="background-color: #eee;" -->

<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #66a1fa; ">

  <a class="navbar-brand "  style="color: white; " href="#" class="logo"><?=$name, ' ', $lastname?></a>

  <button class="navbar-toggler  " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

    <ul class="navbar-nav align-items-center">
      <li class="nav-item active">

        <a class="nav-link" style="color: white; " href="http://localhost:8888/Project0.2/lk_driver/index.php">Трансферы<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="color: white; " href="http://localhost:8888/Project0.2/lk_driver/balance/index.php">История</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" style="color: white; " href="http://localhost:8888/Project0.2/lk_driver/Settings/index.php">Настройки</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="color: white; " href="http://localhost:8888/Project0.2/lk_driver/info.php">Контакты</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="color: white; " href="http://localhost:8888/Project0.2/enter/logout.php">Выход</a>

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
      <li><a href="http://localhost:8888/Project0.2/lk_driver/index.php">Трансферы</a></li>
	    <li><a href="http://localhost:8888/Project0.2/lk_driver/balance/index.php">История</a></li>
	    <li><a href="http://localhost:8888/Project0.2/lk_driver/Settings/index.php">Настройки</a></li>
      <li><a href="http://localhost:8888/Project0.2/lk_driver/info.php">Контакты</a></li>
	    <li><a href="http://localhost:8888/Project0.2/enter/logout.php">Выход</a></li>
	  </ul>
	</nav>
</div>
</header> -->
<br><br><br>
<div class="container">
  <h1>Трансферы</h1>
  <br>
  <div class = "choicem"></div>

<br>


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
$login=$_SESSION['user']['login'];
$query ="SELECT * FROM `order` WHERE `id_users` = (SELECT `id_users` FROM `users` WHERE `login` = '$login') ORDER BY `date`";

$result = mysqli_query($link, $query) or die("Ошибка Вывода таблицы  'users' " . mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
if (mysqli_num_rows($result) <= 0) {
    ?>
    <div class="text">
      Ближайших трансферов нет
    </div>
<?php     }else{
  ?>
  <div class = "table-responsive">
  <table class="table table-bordered" id="users">

    <thead>
        <tr class="table-primary">

            <th scope="col">Обращение</th>
            <th scope="col">Имя</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Телефон</th>
            <th scope="col">Дата</th>
            <th scope="col">Откуда</th>
            <th scope="col">Куда</th>
            <th scope="col">Номер самолета</th>
            <th scope="col" >Номер поезда</th>
            <th scope="col">Кол-во пассажиров</th>
            <th scope="col">Кол-во детей до 7</th>
            <th scope="col">Кол-во чемоданов</th>
            <th scope="col">Кол-во ручной клади</th>
            <th scope="col">Комментарий</th>

      </thead>
       <tbody>
<?php foreach ($data as $db_user) { ?>


          <td><?= $db_user['title']?></td>
          <td><?= $db_user['name']?></td>
          <td><?= $db_user['lastname']?></td>
          <td><?= $db_user['telephone']?></td>
          <td ><?= $db_user['date']?></td>
          <td><?= $db_user['adress1']?></td>
          <td><?= $db_user['adress2']?></td>
          <td><?= $db_user['numofair']?></td>
          <td><?= $db_user['numoftrain']?></td>
          <td><?= $db_user['passenger']?></td>
          <td><?= $db_user['children']?></td>
          <td><?= $db_user['bigbag']?></td>
          <td><?= $db_user['smallbag']?></td>
          <td><?= $db_user['comment']?></td>

        </tr>
    <?php  }}
     mysqli_free_result($result);
    $mysqli->close();
    ?>


 </tbody>

</table>
</div>
</div>



</body>
</html>
