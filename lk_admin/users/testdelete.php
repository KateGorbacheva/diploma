<!DOCTYPE html>
<html>

</head>
<body>



<?php
error_reporting(E_ALL);
ini_set('display_errors','on');

$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'project';
$db_port = 8888;
$link = mysqli_connect(
          $db_host,
          $db_user,       /* Имя пользователя */
          $db_password,   /* Используемый пароль */
          $db_db,
          $db_port  );     /* База данных для запросов по умолчанию */
mysqli_query($link, "SET NAMES 'utf8'");
if (isset($_GET['del'])) {
  $id = $_GET['del'];
  $query = "DELETE FROM `test` where id=$id";
  mysqli_query($link, $query) or die(mysqli_error($link));
}
$query = "SELECT * FROM `test`";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
?>

<table>
  <?php foreach ($data as $db_user) { ?>
    <tr>
      <td><?= $db_user['id']?></td>
      <td><?= $db_user['name']?></td>
      <td><a href="?del=<?= $db_user['id']?>">delete</a></td>
    </tr>
<?php  } ?>
</table>


</body>
</html>
