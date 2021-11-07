
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
<script>
	$( ".element" ).html( $( ".module" ).width() );
$( ".browser" ).html( $( window ).width() );

$( window ).resize(function() {
  $( ".element" ).html( $( ".module" ).width() );
  $( ".browser" ).html( $( window ).width() );
});
	</script>
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
                background: linear-gradient(rgba(255,255,255,.1),rgba(0,0,0,.1)),url(piter-zimnii.jpg);
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
                    background: rgba(255, 255, 255, 0.9);
                    margin: 15px auto;
                    border: 1px solid #CCC;
                    border-radius: 1em;
                    overflow-x: auto;
                    width:800px;

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
            margin: 0 235px;

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
          .contain{
          	max-width: 1170px;
          	margin: 0 auto;
          	padding: 0 15px;
          	z-index: 1;

          }

</style>

<header class="header" id="header">
  <!-- style="background-color: #eee;" -->

<nav class="navbar navbar-expand-lg navbar-light bg-light" >

  <a class="navbar-brand " href="#">Logo</a>

  <button class="navbar-toggler  " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

    <ul class="navbar-nav align-items-center">
      <li class="nav-item active">

        <a class="nav-link" href="http://localhost:8888/Project0.2/main_form.html">Главная<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="order.html">Заказать</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost:8888/Project0.2/main_form.html#anchor">Машины</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost:8888/Project0.2/info.php">Контакты</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost:8888/Project0.2/enter/enter.php">Вход</a>

      </li>
    </ul>

</div>
</nav>

</header>
</head>
<body>
 
<br><br><br>
<div class="module">
<div class="container">
  <br><br>
  <div class="module"><h1 style="text-align:center;">Контакты</h1></div>

  <div  class="nesolestag-enadenud">
    <!-- <h3 style="text-align:center;">Контакты</h3> -->
  <br>  <br>  <br>
    <div class="ico-wrap"> <i class="fa fa-map-marker ico-contact"></i>
    </div>
    <div class="meanous-andscoev">
    <div class="module"><h4 class="aio-icon-title">Юридический адрес:</h4></div>
  <div class="module">  <div class="aio-icon-description">
    3486452, г. Санкт-Петербург, ул. Ленина,
    <br>дом 14, литер D, Кабинет № 31</div></div>
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
</div>



</body>
</html>
