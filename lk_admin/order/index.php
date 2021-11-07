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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- <script src="http://localhost:8888/Project0.2/sweetalert/sweetalert.min.js"></script> -->
<!--
<link rel="stylesheet" type="text/css" href="http://localhost:8888/Project0.2/sweetalert/sweetalert.css"> -->
<script src="form.js"></script>


<!-- Подключение jQuery плагина Masked Input -->
<script src="http://localhost:8888/Project0.2/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>

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
hr {
   border: none; /* Убираем границу */
   background-color: RoyalBlue; /* Цвет линии */
   color: red; /* Цвет линии для IE6-7 */
   height: 2px; /* Толщина линии */
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
  <h1>Заказы</h1>
  <br>
  <div class = "choicem"></div>
  <form >
    	<input type="hidden" name="id_users"  id="id_users">
    <hr>
    <div class="row">
      <div class="col">
<label for="id">id заказа:</label>
       <input type="text" class="form-control" name="id"  id="id" size="25" placeholder="id заказа" >

      </div>
      <div class="col">
        <label for="status">Выберите статус:</label>
       <select name="status" id="status" class="form-control" >
           <option value="Ожидание">Ожидание</option>
           <option value="Принят">Принят</option>
           <option value="Выполнено">Выполнено</option>
           <option value="Отказ">Отказ</option>

       </select>
        </div>
        </div>
<hr>
<div class="row">

  <div class="col">
<label for="lastname_user">Фамилия водителя:</label>
   <input type="text" class="form-control" name="lastname_user"  id="lastname_user" size="25" placeholder="Фамилия водителя" >

  </div>
  <div class="col">
<label for="name_user">Имя водителя:</label>
   <input type="text" class="form-control" name="name_user"  id="name_user" size="25" placeholder="Имя водителя" >

  </div>

    </div>
    <hr>
<label for="price">Цена за заказ:</label>
 <input type="text" class="form-control" name="price"  id="price" size="25" placeholder="€€€" >
<hr>


<label for="sel1">Обращение*:</label>

   <select name="Обращение" id="sel1" class="form-control">
       <option value="Mr.">Mr.</option>
       <option value="Mrs.">Mrs.</option>
       <option value="Ms.">Ms.</option>
       <option value="Dr.">Dr.</option>
       <option value="Prof.">Prof.</option>
       <option value="Hon.">Hon.</option>
       <option value="H.E.">H.E.</option>
   </select>

   <div class="row">
     <div class="col">
       <label for="name">Имя*:</label>

      <input type="text" class="form-control" name="Имя"  id="name" size="25" placeholder="Имя">

     </div>
     <div class="col">
       <label for="lastname">Фамилия*:</label>

        <input type="text" class="form-control" name="Фамилия" id="lastname" size="25" placeholder="Фамилия" >
       </div>
</div>
<div class="row">
  <div class="col">
 <label for="email">Почта*:</label>

   <input type="email" class="form-control" name="Почта" id="email" size="25" placeholder="email">
    </div>
<div class="col">
 <label for="telephone">Телефон*:</label>

   <input type="tel" class="form-control" name="Телефон" id="telephone" size="25" placeholder="телефон" >
</div>
</div>
  <div class="row">
    <div class="col">
      <label for="date">Выберете дату*:</label>
       <input type="date" class="form-control" name="Дата" id="date" size="25">
   </div>
  <div class="col">
    <label for="time">Выберете время*:</label>
     <input type="time" class="form-control" name="Время" id="time" size="25" >
  </div>
  </div>

  <label for="adress1">Адрес сбора*:</label>
     <input type="text" class="form-control" name="Адрес_встречи" id="adress1" size="25" >

  <div class="row">
    <div class="col">
      <label for="numofair">Номер рейса:</label>
       <input type="text" class="form-control" name="Номер_авиарейса" id="numofair" size="25">
       </div>
   <div class="col">
     <label for="numoftrain">Номер поезда:</label>
       <input type="text" class="form-control" name="Номер_поезда" id="numoftrain" size="25">
  </div>
  </div>

  <label for="adress2">Адрес назначения*:</label>
   <input type="text" class="form-control" name="Адрес_назначения" id="adress2"  size="25" >

  <label for="sel2">Выберете машину:</label>
    <select name="Машина" id="sel2" class="form-control">
        <option value="Comfort (1 - 4 чел. + 4 багажа)">Comfort (1 - 4 чел. + 4 багажа)</option>
        <option value="Minibus (1 - 6 чел. + 6 багажа)">Minibus (1 - 6 чел. + 6 багажа)</option>
        <option value="Executive (1 - 3 чел. + 3 багажа)">Executive (1 - 3 чел. + 3 багажа)</option>
        <option value="Luxury (1 - 3 чел. + 3 багажа)">Luxury (1 - 3 чел. + 3 багажа)</option>

    </select>


    <div class="row">
      <div class="col">
        <label for="passenger">Количество пассажиров*:</label>
      <input type="number" class="form-control" name="Кол-во_пассажиров" id="passenger" vsize="25" >
     </div>
     <div class="col">
       <label for="children">Дети меньше 7 лет:</label>
      <input type="number" class="form-control" name="Дети_меньше_7_лет" id="children" size="25" >
     </div>
   </div>

   <div class="row">
     <div class="col">
       <label for="bigbag">Количество чемоданов*:</label>
     <input type="number" class="form-control" name="Кол-во_чемоданов" id="bigbag" size="25" >
    </div>
    <div class="col">
      <label for="smallbag">Количество ручной клади*:</label>
     <input type="number" class="form-control" name="Кол-во_ручной_клади" id="smallbag" size="25" >
    </div>
  </div>

<label for="sel3">Выберете способ оплаты:</label>

    <select name="Способ_оплаты" id="sel3" class="form-control">
        <option value="Картой онлайн">Картой онлайн</option>
        <option value="Наличный расчет EUR">Наличный расчет EUR</option>
        <option value="Наличный расчет RUB">Наличный расчет RUB</option>
        <option value="Наличный расчет USD">Наличный расчет USD</option>

    </select>

    <label for="comment">Коментарии к заказу:</label>

       <textarea type="text" class="form-control" name="Коментарии_к_заказу" id="comment" cols="50" rows="6"></textarea>
 <br>
 <input type="hidden" name="id_users"  id="id_users">
<button type="submit" class="btn btn-success"  name = "btn_status" id = "btn_status"><span class="text-button">Изменить статус</span></button>
<button type="submit" class="btn btn-success"  name = "btn_change" id = "btn_change"><span class="text-button">Назначить водителя</span></button>
<button type="submit" class="btn btn-success"  name = "btn_change" id = "btn_change_order"><span class="text-button">Изменить заказ</span></button>
<button type="submit" class="btn btn-success"  name = "btn_update" id = "btn_update"><span class="text-button">Обновить</span></button>
 </form>

<br>

<div class = "con">
<table class="table table-bordered" id="users">

  <thead>
      <tr class="table-primary">

        <th scope="col" for="id">id Заказа</th>
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
        <th scope="col" for="id_users" id=stolb>id_users</th>

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

$query ="SELECT * FROM `order` join `users`  ON users.id_users=order.id_users  WHERE `status` = 'Ожидание' OR `status` = 'Принят' ORDER BY id_order";

$result = mysqli_query($link, $query) or die("Ошибка Вывода таблицы  'Заказы' " . mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

?>

<?php foreach ($data as $db_user) { ?>

          <td for="id"><?= $db_user['id_order']?></td>
          <td for="status"><?= $db_user['status']?></td>
          <td for="price"><?= $db_user['price']?></td>
          <td for="lastname_user"><?= $db_user['lastname_user']?></td>
          <td for="name_user"><?= $db_user['name_user']?></td>
          <td for="sel1"><?= $db_user['title']?></td>
          <td for="name"><?= $db_user['name']?></td>
          <td for="lastname"><?= $db_user['lastname']?></td>
          <td for="email"><?= $db_user['email']?></td>
          <td for="telephone"><?= $db_user['telephone']?></td>
          <td for="date"><?= $db_user['date']?></td>
          <td for="time"><?= $db_user['time']?></td>
          <td for="adress1"><?= $db_user['adress1']?></td>
          <td for="numofair"><?= $db_user['numofair']?></td>
          <td for="numoftrain"><?= $db_user['numoftrain']?></td>
          <td for="adress2"><?= $db_user['adress2']?></td>
          <td for="sel2"><?= $db_user['car']?></td>
          <td for="passenger"><?= $db_user['passenger']?></td>
          <td for="children"><?= $db_user['children']?></td>
          <td for="bigbag"><?= $db_user['bigbag']?></td>
          <td for="smallbag"><?= $db_user['smallbag']?></td>
          <td for="sel3"><?= $db_user['pay']?></td>
          <td for="comment"><?= $db_user['comment']?></td>
          <td for="id_users" id=stolb><?= $db_user['id_users']?></td>
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
