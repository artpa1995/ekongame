<form class="regform" action="<?php echo App::url('users/emailconfirmation') ?>" method="post">

<?php

$error_foocode = App::session()->get("foocodes");
$error_foocodes = App::session()->get("foocodess");
print_r($error_foocode);
?>
     <div class="error"><?php echo $error_foocode; ?></div>
       <div class="error"><?php echo $error_foocodes; ?></div>
     <p style="text-align:center;">Введите проверочный код ниже </p>

<input type="text" maxlength="6" name="code"  class="reginp" placeholder="Код" required>

    <input type="submit" name="submit" value="Потвердить код"  class="reginp">
   

</form>