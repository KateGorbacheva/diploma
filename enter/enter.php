<?php
session_start();

if ($_SESSION['user']) {

    header('Location:http://localhost:8888/Project0.2/lk_driver');
}else if($_SESSION['admin']){
  header('Location:http://localhost:8888/Project0.2/lk_admin/order');
}

?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                <link rel=stylesheet href ="style_enter.css"
                                type = "text/css">
<style>
.msg {
    border: 2px solid #f0f0f0;
    border-radius: 3px;
    padding: 10px;
    text-align: center;
    font-weight: bold;
    color:#f0f0f0;
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
        <a class="nav-link" href="http://localhost:8888/Project0.2/order/order.html">Заказать</a>
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
<script>
	$( ".element" ).html( $( ".module" ).width() );
$( ".browser" ).html( $( window ).width() );

$( window ).resize(function() {
  $( ".element" ).html( $( ".module" ).width() );
  $( ".browser" ).html( $( window ).width() );
});
	</script>
</head>

<body>

	<!-- <header class="header" id="header">
		<div class="contain header-wrap">
	  <a href="#" class="logo">Logo</a>
			<nav>
	  <ul>
      <li><a href="http://localhost:8888/Project0.2/main_form.html">Главная</a></li>
	    <li><a href="http://localhost:8888/Project0.2/order/order.html">Заказать</a></li>
	    <li><a href="#">Машины</a></li>
	    <li><a href="#">Контакты</a></li>
	    <li><a href="enter.html">Вход</a></li>
	  </ul>
	</nav>
</div>
</header> -->
<div class="module">
<form action="auth.php" method="post">
  <div class="form">
    <div class="module"><h1>Вход</h1></div>
    <div class="input-form">
    <div class="module">  <input type="text" name="login" id ="login" placeholder="Логин" required>
      </div></div>
      <div class="input-form">
      <div class="module">  <input type="password" name="pass" id ="pass" placeholder="Пароль" required>
        </div></div>
        <div class="input-form">
          <div class="module"><input type="submit" placeholder="Войти" value="Войти">
          </div></div>
          <!-- <a href="#" class="forget">Забыли пароль?</a> -->

          <?php
          if ($_SESSION['message']) {
              echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
          }
          unset($_SESSION['message']);
      ?>
  </div>
</form></div>

</body>
</html>
