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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style>
                @import url('https://fonts.googleapis.com/css?family=Arimo');
                @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
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
                h3 {
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

                    height: 670px;

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


            .nesolestag-enadenud {
            width: 615px;
            margin: 0 auto;
          }

          .kesednsoled:after,
          .kesednsoled:before {
            content: ".";
            display: block;
            overflow: hidden;
            visibility: hidden;
            font-size: 0;
            line-height: 0;
            width: 0;
            height: 0;
            clear: both;
          }
          .ico-wrap {
            color: Navy;
            /* color: #a612d4; */
            width: 48px;
            height: 48px;
            margin: 30px 18px 5px 5px;
            display: block;
            text-align: center;
            font-size: 25px;
            border: 2px solid Navy;
            float: left;
            border-radius: 30px;
          }
          .ico-contact {
            line-height: 1.9 !important;
          }
          .meanous-andscoev {
            float: left;
            margin-bottom: 20px;
          }
          .aio-icon-title {
            font-size: 16px;
            color: Blue;
            /* color: #950c96; */
            line-height: 1;
            margin-bottom: 8px;
          }

          @media (max-width: 767px) {
            .meanous-andscoev,
            .ico-wrap {
            float: none;
            text-align: center;
            }
            .ico-wrap {
            margin: 0 auto 15px auto;
            }
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
  <!-- <h1>Контакты</h1> -->
  <br>
  <div class="nesolestag-enadenud">
    <h3 style="text-align:center;">Контакты</h3>

    <div class="ico-wrap"> <i class="fa fa-map-marker ico-contact"></i>
    </div>
    <div class="meanous-andscoev">
    <h4 class="aio-icon-title">Юридический адрес:</h4>
    <div class="aio-icon-description">
    3486452, г. Санкт-Петербург, ул. Ленина,
    <br>дом 14, литер D, Кабинет № 31</div>
    </div>



    <span class="kesednsoled"></span>

    <div class="ico-wrap">
    <i class="fa fa-envelope ico-contact"></i>
    </div>
    <div class="meanous-andscoev">
    <h4 class="aio-icon-title">Электронная почта:</h4>
    <div class="aio-icon-description">
    spbtransfers.@gmail.ru
    <br>gorbacheva1e0a.@gmail.ru</div>
    </div>

    <span class="kesednsoled"></span>

    <div class="ico-wrap">
    <i class="fa fa-phone ico-contact"></i>
    </div>
    <div class="meanous-andscoev">
    <h4 class="aio-icon-title">Связь по телефону:</h4>
    <div class="aio-icon-description">
    8 (812) 031-53-78
    <br>8 (911) 904-52-72</div>
    </div>

    <span class="kesednsoled"></span>

  </div>
</div>



</body>
</html>
