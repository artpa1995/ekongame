<form class="regform" action="<?php echo App::url('users/changepass') ?>" method="post">

    <h3 class="text-muted">Восстановление пароля</h3>

    <?php

	 $error_foocode = App::session()->get("foocode");

	

	?>

	<div class="error"><?php echo $error_foocode; ?></div>

    <input type="text" name="code" placeholder="Код"   class="reginp">

    <input type="password" name="password" placeholder="Новый Пароль"  class="reginp" >

    <input type="password" name="conpassword" placeholder="Повторите Пароль"  class="reginp" >

    <input type="submit" name="submit" value="Изменить "  class="reginp">

</form>

