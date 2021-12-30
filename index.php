<div class="div">
  <?php
  require_once ("header.php");
  ?>
  <div class="work_blok" id="index">
    <?php
    if(!isset($_SESSION['login']) && !isset($_SESSION['password'])){
    ?>
      <h3>Авторизация</h3>
      <div id="error"></div>
      <?php
				if(isset($_SESSION["serever_message"])){
					echo $_SESSION["serever_message"];
					unset($_SESSION["serever_message"]);
				}
			?>
      <form onsubmit="return checkForm(this)" action="auth/auth.php" method="post" name="form_auth" id="form_auth">
        <table class="form_auth">
          <tbody>
            <tr>
                <td> Логин: </td>
                <td>
                  <input type="text" name="login" required="required"><br>
                </td>
            </tr>
            <tr>
              <td> Пароль: </td>
              <td>
                <input type="password" name="password" required="required"><br>
                <span id="valid_password_message" class="mesage_error"></span>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <input type="submit" name="btn_submit_auth" value="Войти" class="submit_auth">
              </td>
            </tr>
          </tbody></table>
      </form>
      <?php
    }
    else if ($_SESSION['position'] == '1') {
    ?>
      <div id="error"></div>
      <?php
				if(isset($_SESSION["serever_message"])){
					echo $_SESSION["serever_message"];
					unset($_SESSION["serever_message"]);
				}
			?>
      <h21><a href="http://localhost/SMC/dogovor/form_dogovor.php" class="gipersilka">Новый договор</a></h21>
      <h22><a href="http://localhost/SMC/platy/form_platy.php" class="gipersilka">Поступление плат</a></h22>
      <h22><a href="http://localhost/SMC/index.php" class="gipersilka" onclick="return regulirovka();">Регулировка</a></h22>
      <h22><a href="http://localhost/SMC/sborka/form_sborka.php" class="gipersilka">Сборка</a></h22>
      <h22><a href="http://localhost/SMC/index.php" class="gipersilka">Информация</a></h22>
      <h22><a href="http://localhost/SMC/index.php" class="gipersilka">Добавление пользователя</a></h22>
    <?php
  } else if ($_SESSION['position'] == '2') {
    ?>
      <div id="error"></div>
      <?php
				if(isset($_SESSION["serever_message"])){
					echo $_SESSION["serever_message"];
					unset($_SESSION["serever_message"]);
				}
			?>
      <h31><a href="http://localhost/SMC/index.php" class="gipersilka" onclick="return regulirovka();">Регулировка</a></h31>
      <h22><a href="http://localhost/SMC/index.php" class="gipersilka">Информация</a></h22>
    <?php
  } else if ($_SESSION['position'] == '3') {
    ?>
      <div id="error"></div>
      <?php
				if(isset($_SESSION["serever_message"])){
					echo $_SESSION["serever_message"];
					unset($_SESSION["serever_message"]);
				}
			?>
      <h31><a href="http://localhost/SMC/sborka/form_sborka.php" class="gipersilka">Сборка</a></h31>
      <h22><a href="http://localhost/SMC/index.php" class="gipersilka">Информация</a></h22>
    <?php
  } else if ($_SESSION['position'] == '4') {
    ?>
      <div id="error"></div>
      <?php
				if(isset($_SESSION["serever_message"])){
					echo $_SESSION["serever_message"];
					unset($_SESSION["serever_message"]);
				}
			?>
      <h31><a href="http://localhost/SMC/dogovor/form_dogovor.php" class="gipersilka">Новый договор</a></h31>
      <h22><a href="http://localhost/SMC/index.php" class="gipersilka">Информация</a></h22>
    <?php
  } else if ($_SESSION['position'] == '5') {
    ?>
      <div id="error"></div>
      <?php
				if(isset($_SESSION["serever_message"])){
					echo $_SESSION["serever_message"];
					unset($_SESSION["serever_message"]);
				}
			?>
      <h31><a href="http://localhost/SMC/dogovor/form_dogovor.php" class="gipersilka">Новый договор</a></h31>
      <h22><a href="http://localhost/SMC/platy/form_platy.php" class="gipersilka">Поступление плат</a></h22>
      <h22><a href="http://localhost/SMC/index.php" class="gipersilka">Информация</a></h22>
    <?php
    }
    ?>
  </div>
</div>
<script type="text/javascript" src="http://localhost/SMC/js/jquery.js"></script>
<script type="text/javascript" src="http://localhost/SMC/js/main.js"></script>
</body>
</html>
