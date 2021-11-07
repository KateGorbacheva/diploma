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
  <!-- function CheckLogin(){
    var login = $("#login").val();
    if(login.length<6) {
      alert("Введите логин длиной не менее 6");
    return false;
    }
    else if (login.length>15) {
      alert("Введите логин длиной не более 15");
    return false;}
    else{
      return true;
    }
  }; -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="form.js"></script>

<!-- Подключение jQuery плагина Masked Input -->


                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="http://localhost:8888/Project0.2/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
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
                    height: 670px;

                }
                #stolb {
                visibility: collapse;
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
      <li><a href="http://localhost:8888/Project0.2/lk_driver/info.html">Контакты</a></li>
	    <li><a href="http://localhost:8888/Project0.2/enter/logout.php">Выход</a></li>
	  </ul>
	</nav>
</div>
</header> -->
<br><br><br>
<div class="container" >
  <h1>Настройки</h1>
  <br>
  <div class = "choicem"></div>
  <form >
<br><br>
    <label for="login">Логин:</label>
       <input type="text" class="form-control" name="login"  id="login"  placeholder="Логин">

 <br>
    <label for="password">Введите старый пароль:</label>
         <input type="password" class="form-control" name="password" id="password"  placeholder="Пароль" >
 <br>
         <label for="newpassword">Введите новый пароль:</label>
              <input type="password" class="form-control" name="newpassword" id="newpassword"  placeholder="Пароль" >



 <br>
 <div class="row">
   <div class="col">
<label for="telephone">Телефон:</label>
    <input type="tel" class="form-control" name="telephone"  id="telephone"  placeholder="+7(999)999-99-99">

   </div>

   <div class="col">
<label for="email">Почта:</label>
      <input type="email" class="form-control" name="email" id="email"  placeholder="email@email.com" >
     </div>
</div>
<br>

<br>


<button type="submit" class="btn btn-success"  name = "btn_change" id = "btn_change"><span class="text-button">Изменить</span></button>

 </form>
<br>

</div>



</body>
</html>
