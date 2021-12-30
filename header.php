<?php
  session_start();
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="http://localhost/SMC/css/style.css">
  <title>СМЦ</title>
  </head>
<body>
<div class="header">
  <h1>
    <a href="http://localhost/SMC/index.php" class="gipersilka">Главная</a>
    <?php
      if(isset($_SESSION['login']) && isset($_SESSION['password'])){
        $login = $_SESSION['login'];
    ?>
        <a href="http://localhost/SMC/auth/logout.php" class="gipersilka">Выход</a>
      <?php
      }
      ?>
  </h1>

</div>
