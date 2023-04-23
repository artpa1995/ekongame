<form class="regform" action="<?php echo App::url('users/interview1') ?>" method="post">
	<h3 class="text-muted">ШАГ 1 </h3>
	<?php
	
	 $error_tel = App::session()->get("tel");

	// App::session()->destroy();
	?>
	<div class="error"><?php echo $error_tel; ?></div>

	<?php
	
	?>
	<div class="alert alert-info" style="display: none;"></div>

	<input type="text" name="company_name" placeholder="Название компании"   >
	<input type="text" name="otrasl" placeholder="Отрасль"  >
	<input type="text" name="rol_in_company" placeholder="Роль в компании" >
    <input type="text" name="adres" placeholder="Адрес сайта или instagram" >
	
	<input type="submit" name="submit" value="следуйщий шаг">
</form>