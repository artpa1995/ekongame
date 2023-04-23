

<form class="regform" action="<?php echo App::url('users/confirmation') ?>" method="post">

<?php

$error_foocode = App::session()->get("foocode");

	 App::session()->destroy();

     ?>

     <div class="error"><?php echo $error_foocode; ?></div>
     <p style="text-align:center;">Дождитесь СМС и введите проверочный код ниже </p>

<input type="text" maxlength="6" name="confirmation_cod"  class="reginp" placeholder="Код" required>

    <input type="submit" name="submit" value="Потвердить код"  class="reginp">
    <p style="text-align:center; font-size: 11px;">Если не получили смс на ваш телефон попробуйте на <a href="/users/confirmationemail">EMAIL</a></p> 

</form>



