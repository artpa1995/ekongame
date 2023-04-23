<h1>Admin Profile</h1>
<p><?php echo $user["first_name"] ?></p>
<p><?php echo $user["last_name"] ?></p>
<p><?php //echo $user["email"] ?></p>

<form class="" action="<?php echo App::url('profile/edit') ?>" method="post">
	<h3 class="text-muted">изменение данних</h3>
	<?php
	$error_email_empty = App::session()->get("email_empty");
	 $error_email_foo = App::session()->get("email_foo");
	 $error_tel = App::session()->get("tel");
	 //App::session()->destroy();
	?>
	<div class="error"><?php echo $error_email_empty; ?></div>
	<div class="error"><?php echo $error_email_foo; ?></div>
	<div class="error"><?php echo $error_tel; ?></div>
	<?php
	
	?>
	
    <input type="text" name="email" placeholder="Email"  >
	<input type="tel" name="tel" placeholder="Телефон"  id="phone" >
	<input type="text" name="first_name" placeholder="Имя"  >
	<input type="text" name="last_name" placeholder="Фамилия" >
	<input type="password" name="password" placeholder="Пароль"  autocomplete="off"  >
	<input type="password" name="conpassword" placeholder="Повторите пароль"  autocomplete="off"  >
	<input type="submit" name="submit" value="Изменить">
</form>