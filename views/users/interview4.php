<form class="regform" action="<?php echo App::url('users/interview4') ?>" method="post">
	<h3 class="text-muted">ШАГ 4 </h3>
	<?php
	
	 $error_tel = App::session()->get("tel");
	 $error_name = App::session()->get("name");
	 $error_surname = App::session()->get("surname");
	 $error_conpass = App::session()->get("conpass");
	 $error_tel_empty = App::session()->get("tel_empty");
	 $error_tel_isset = App::session()->get("tel_isset");
	 $error_passlength = App::session()->get("passlength");
	 App::session()->destroy();
	?>
	<div class="error"><?php echo $error_tel; ?></div>
	<div class="error"><?php echo $error_name; ?></div>
	<div class="error"><?php echo $error_surname; ?></div>
	<div class="error"><?php echo $error_conpass; ?></div>
	<div class="error"><?php echo $error_tel_empty; ?></div>
	<div class="error"><?php echo $error_tel_isset; ?></div>
	<div class="error"><?php echo $error_passlength; ?></div>
	<?php
	
	?>
	<div class="alert alert-info" style="display: none;"></div>

	<input type="text" name="company_name" placeholder="Название компании"   >
	<input type="text" name="otrasl" placeholder="Отрасль"  >
	<input type="text" name="rol_in_company" placeholder="Роль в компании" >
    <input type="text" name="adres" placeholder="Адрес сайта или instagram" >
	
	<input type="submit" name="submit" value="следуйщий шаг">
</form>