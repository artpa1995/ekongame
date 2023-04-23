<?php include_once(INCLUDES.'/header.php') ?>
<?php if(empty($users) && !isset($users)){
	header('Location: /users/login');
}?>
<div id="page-wrapper">
<div id="page-inner">
<div class="obs-poj">
		<button id="feedback" class="feedback">ОБРАТНАЯ СВЯЗЬ</button>
		<a href="https://yoomoney.ru/to/41001389545483" class="project_help">$ ПОМОЧЬ ПРОЕКТУ $</a>
	</div>
<div class="shag" >
    <div class="shag-title">
        <div>
        	<h4 class="text-muted" >ШАГ 1  </h4>
        	<p>Опрос</p>
    	</div>
    	<div>
        	<h4 class="text-muted" style="background-color: green; color:white;">ШАГ 2 </h4>
        	<p>Настройка проекта</p>
    	</div>
    	<div>
        	<h4 class="text-muted">ШАГ 3 </h4>
        	<p>Загрузка товара</p>
    	</div>
        <div>
        	<h4 class="text-muted">ШАГ 4 </h4>
        	<p>Статистика и заявки</p>
    	</div>
    </div>
<form class="oprosform" action="<?php echo App::url('admin/interview2') ?>" method="post" id="opros2_form">
	
	<?php
	
	$error_email_foo = App::session()->get("email_foo");
	$error_email_foo2 = App::session()->get("dop_email_foo");

	?>
	<div class="error"><?php echo $error_email_foo; ?></div>
	<div class="error"><?php echo $error_email_foo2; ?></div>

	
	<?php
	
	?>
	<div class="alert alert-info" style="display: none;"></div>

	<input type="text" name="project_adres" placeholder="EKONGAME_______"   class="opr1form" >
	<input type="text" name="email" placeholder="Ваша почта"  class="opr1form hastatun_emil">
    <!--<input type="text" name="email2" placeholder="Доп. почта"  class="opr1form">-->
    
    
    
	<!--<input type="text" name="email3" placeholder="Доп. почта" class="dopemail opr1form" style="display:none" >-->
	<p id="dopem">Добавить еше один email</p>
	<input type="submit" name="submit" value="следуйщий шаг" class="sledshag4">
	<a href="interview4">Пропустить опрос</a>
</form>
<div id="feedbackmyModal" class="feedbackmodal">

  <!-- Modal content -->
  <div class="feedbackmodal-content">
    <span class="feedbackclose">&times;</span>
	<form class="oprosform" >

	<input type="text" name="name" placeholder="Имя"   class="opr1form namemes" >
	<input type="text" name="email" placeholder="Ваша почта"  class="opr1form emailmes">
    <input type="text" name="phone" placeholder="Телефон"  class="opr1form phonemes">
	<textarea name="text" id="" cols="30" rows="10" class="opr1form textmes" style="height: 200px;" placeholder="сообщение"></textarea>
	<input type="button" name="submit" value="Отправить" class="sledshag4" id="sent_massege">

	
	</form>
  </div>

</div>
</div>
</div>
</div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo App::url('assets/js/jquery-1.10.2.js"') ?>"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo App::url('assets/js/bootstrap.js') ?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo App::url('assets/js/jquery.metisMenu.js') ?>"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo App::url('assets/js/custom.js') ?>"></script>

</body>
</html>

<?php exit();?> 