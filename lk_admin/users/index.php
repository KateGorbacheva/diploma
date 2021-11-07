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
<script src="form_test.js"></script>

<!-- Подключение jQuery плагина Masked Input -->

<!-- <link rel="stylesheet" href ="style_menu.css"
                type = "text/css">

<link rel="stylesheet" href ="header_main.css"
                type = "text/css"> -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                <script src="http://localhost:8888/Project0.2/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
            <!-- <script>
                var table = document.getElementById('tableID'),
                  cells = table.getElementsByTagName('td');

                for (var i = 0, len = cells.length; i < len; i++) {
                  cells[i].onclick = function() {
                    console.log(this.innerHTML);
                  };
                }
                </script> -->
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
                    padding: 30px
                		margin: 15px auto;
                		width: 400px;



                  }

                  form {
                    width:75%;
                    margin: 0 auto;


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
                #stolb {
                visibility: collapse;
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
<div class="container" >
  <h1>Пользователи личного кабинета</h1>
  <br>
  <div class = "choicem"></div>
  <form >
    <div class="row">
      <div class="col">
<label for="id">id:</label>
       <input type="text" class="form-control" name="id"  id="id" size="25" placeholder="id" >

      </div>
      <div class="col">
<label for="name">Имя:</label>
               <input type="text" class="form-control" name="name"  id="name" size="25" placeholder="Имя" required>

              </div>
              <div class="col">
<label for="lastname">Фамилия:</label>
         <input type="text" class="form-control" name="lastname" id="lastname" ssize="25" placeholder="Фамилия" required>
        </div>
 </div>
 <br>
 <div class="row">
   <div class="col">
<label for="telephone">Телефон:</label>
    <input type="tel" class="form-control" name="telephone"  id="telephone"  placeholder="+7(999)999-99-99" required>

   </div>

   <div class="col">
<label for="email">Почта:</label>
      <input type="email" class="form-control" name="email" id="email"  placeholder="email@email.com" required>
     </div>
</div>
<br>
<div class="row">
  <div class="col">
<label for="login">Логин:</label>
   <input type="text" class="form-control" name="login"  id="login"  placeholder="Логин" required>

  </div>

  <div class="col">
<label for="password">Пароль:</label>
     <input type="password" class="form-control" name="password" id="password"  placeholder="Пароль" >
    </div>
</div>
<br>
 <label for="flag">Пользователь:</label>
<select name="flag" id="flag" class="form-control" >
    <option value="false">Водитель</option>
    <option value="true">Администратор</option>

</select>
<br>
<!-- <div class="row">
  <div class="col"> -->

   <button type="submit" class="btn btn-success"  name = "btn_add" id = "btn_add"><span class="text-button">Добавить</span></button>
<button type="submit" class="btn btn-success"  name = "btn_change" id = "btn_change"><span class="text-button">Изменить</span></button>
<button type="submit" class="btn btn-success"  name = "btn_delete" id = "btn_delete"><span class="text-button">Удалить</span></button>

  <!-- </div> -->

  <!-- <div class="col">

     <button type="submit" class="btn btn-success"  name = "btn_delete" id = "delete"><span class="text-button">Удалить</span></button>
    </div>
<div class="col">

   <button type="submit" class="btn btn-success"  name = "btn" id = "change"><span class="text-button">Изменить</span></button>
  </div> -->
<!-- </div> -->

 </form>
<br>
<div class = "con">
<table class="table table-bordered" id="users" >

  <thead>
      <tr class="table-primary">

        <th scope="col">#</th>
        <th scope="col" for="name">Имя</th>
        <th scope="col" for="lastname">Фамилия</th>
        <th scope="col" for="telephone">Телефон</th>
        <th scope="col" for="email">Почта</th>
        <th scope="col" for="login">Логин</th>
        <th scope="col"  for="password">Пароль</th>
        <th scope="col" id=stolb for="flag">flag</th>


        <!-- <th scope="col" >Удалить</th> -->

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
    if (isset($_GET['del'])) {
      $id = $_GET['del'];
      $query = "DELETE FROM `users` where id_users=$id";
      mysqli_query($link, $query) or die(mysqli_error($link));
    }
    // if (isset($_POST['btn_change'])) {
    //   $id = $_POST['id'];
    //   $query = "UPDATE `users` SET name='$_POST[name]', lastname='$_POST[lastname]', telephone='$_POST[telephone]', email='$_POST[email]',
    //   flag='$_POST[flag]', login='$_POST[login]',password='$_POST[password]' where id_users='$_POST[id]'";
    //   mysqli_query($link, $query) or die(mysqli_error($link));
    // }
$query ="SELECT * FROM `users`ORDER BY id_users";

$result = mysqli_query($link, $query) or die("Ошибка Вывода таблицы  'users' " . mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    ?>

<?php foreach ($data as $db_user) { ?>

          <td for="id"><?= $db_user['id_users']?></td>
          <td for="name"><?= $db_user['name_user']?></td>
          <td for="lastname"><?= $db_user['lastname_user']?></td>
          <td for="telephone"><?= $db_user['telephone_user']?></td>
          <td for="email"><?= $db_user['email_user']?></td>
          <td for="login"><?= $db_user['login']?></td>
          <td ><?= $db_user['password']?></td>
          <td id=stolb for="flag"><?= $db_user['flag']?></td>



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
