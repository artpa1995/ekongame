
<form class="regform" action="<?php echo App::url('admin/interview2') ?>" method="post">
	<h3 class="text-muted">ШАГ 2 </h3>
	<?php
	
	 $error_tel = App::session()->get("tel");
	 
	?>
	<div class="error"><?php echo $error_tel; ?></div>
	
	<?php
	
	?>
	<div class="alert alert-info" style="display: none;"></div>

	<input type="text" name="project_adres" placeholder="Адрес проекта"   >
	<input type="text" name="email" placeholder="Ваша почта" >
    <input type="text" name="email2" placeholder="Вторая почта" >
	<input type="submit" name="submit" value="следуйщий шаг">
</form>
