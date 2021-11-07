<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['admin']);
header('Location: http://localhost:8888/Project0.2/enter/enter.php');
?>
