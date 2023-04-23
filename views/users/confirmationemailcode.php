
<form class="regform" action="<?php echo App::url('users/getConfirmEmailRequest') ?>" method="post">
    
    <?php

	 $error_email = App::session()->get("email_foo");

	 

 

	?>

    <div class="error"><?php echo $error_email; ?></div>

     <p style="text-align:center;">Введите ваш Email </p>

<input type="text"  name="email"  class="reginp" placeholder="Email" required>

    <input type="submit" name="submit" value="Получить  код"  class="reginp">

</form>


