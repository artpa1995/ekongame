

<form class="regform" action="<?php echo App::url('users/login') ?>" method="post">

<?php

	 $error_tel = App::session()->get("tel");

	 $error_passlength = App::session()->get("passfalse");

     $error_user_empty = App::session()->get("user_empty");

     $error_pass_false = App::session()->get("pass_false");

	?>

<div class="error"><?php echo $error_tel; ?></div>

<div class="error"><?php echo $error_user_empty; ?></div>

<div class="error"><?php echo $error_pass_false; ?></div>

	

    <h3 class="text-muted">Авторизация</h3>

    <input type="text" name="tel" placeholder="Телефон"  class="reginp" >

    <input type="password" name="password" placeholder="Пароль"  class="reginp" >

    <input type="submit" name="submit" value="Вход"  class="reginp">

   <div> <a href="emailcode">Забыли пароль?</a></div>

</form>

