<?php

require_once ('head.php');
require_once ('functions.php');


 crea_user();

?>

<link rel="stylesheet" href="./css/login.css" /> 
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="./imgs/1590.jpg" id="icon" alt="User Icon" />
      <p id="registrazione"><b>Registrazione</b></p>
    </div>

    <!-- Login Form -->
    <form id="form-registrazione" action="register.php" method="POST" enctype="multipart/form-data">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="email">
      <input type="submit" id="submit" name="submit" class="fadeIn fourth" value="Registrati">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="forgot-password.php">Forgot Password?</a>
    </div>

  </div>
</div>
<?php echo ('footer.php'); ?>