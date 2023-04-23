<form class="regform" action="<?php echo App::url('users/emailcode') ?>" method="post">

    <h3 class="text-muted">Восстановление пароля</h3>



    <?php

	 $error_foocode = App::session()->get("foocode");

	

	?>

	<div class="error"><?php echo $error_foocode; ?></div>

    <input type="text" name="email" placeholder="Email"  class="reginp" >



    <input type="submit" name="submit" value="Отправить"  class="reginp">

</form>