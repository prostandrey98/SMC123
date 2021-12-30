<?php

session_start();
require_once("../dbconnect.php");
if(isset($_POST["btn_submit_auth"])){
  if(isset($_POST["login"])){
		$login = trim($_POST["login"]);
		if(!empty($login)){
			$login = htmlspecialchars($login, ENT_QUOTES);
		}else{
			$message = "<p id='fail'><strong>Ошибка!</strong> Укажите логин</p>";
			redirect_to($message, 'SMC/index.php');
      }
  }else{
    $message = "<p id='fail'><strong>Ошибка!</strong> Отсутствует поле с логином </p>";
    redirect_to($message, 'SMC/index.php');
  }

  if(isset($_POST["password"])){
	   $password = trim($_POST["password"]);
		if(!empty($password)){
			$password = htmlspecialchars($password, ENT_QUOTES);
		}else{
			$message = "<p id='fail'><strong>Ошибка!</strong> Укажите Ваш пароль</p>";
			redirect_to($message, 'SMC/index.php');
		}
	}else{
		$message = "<p id='fail'><strong>Ошибка!</strong> Отсутствует поле для ввода пароля</p>";
		redirect_to($message, 'SMC/index.php');
	}

  $result_query_select = $mysqli->query("SELECT fio, position FROM `users` WHERE login = '".$login."' AND password = '".$password."'");

  if(!$result_query_select){
	   $message = "<p id='fail'><strong>Ошибка!</strong> Ошибка запроса на выборке пользователя из базы данных. </p><p>Описание ошибки: $mysqli->error <br /> Код ошибки: $mysqli->errno </p>";
     redirect_to($message, 'SMC/index.php');
	}else{
    if($result_query_select->num_rows == 1){
			while ( $info_user = $result_query_select->fetch_assoc() ) {
        $_SESSION['fio'] = $info_user['fio'];
        $_SESSION['position'] = $info_user['position'];
			}
      $_SESSION["login"] = $login;
			$_SESSION["password"] = $password;
      $result_query_select->close();
			redirect_to($message, 'SMC/index.php');
		}else{
			$message = "<p id='fail'><strong>Ошибка!</strong> Вы ввели неправильный логин и/или пароль </p>";
			redirect_to($message, 'SMC/index.php');
		}
  }
}else{
	exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=".$address_site.">главную страницу</a>.</p>");
}
