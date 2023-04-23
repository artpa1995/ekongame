

<form class="regform" action="<?php echo App::url('users/register') ?>" method="post">

	<h3 class="text-muted">РЕГИСТРАЦИЯ</h3>

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



	<input type="tel" name="tel" placeholder="Телефон"  id="phone" class="reginp"  >

	<input type="text" name="first_name" placeholder="Имя" class="reginp"  >

	<input type="text" name="last_name" placeholder="Фамилия" class="reginp" >

	<input type="password" name="password" placeholder="Пароль"  autocomplete="off" class="reginp"  >

	<input type="password" name="conpassword" placeholder="Повторите пароль"  autocomplete="off"  class="reginp"  >

	<input type="submit" name="submit" value="Регистрация" class="reginp" >

</form>



<style>

	.iti__selected-dial-code{

		font-size: 1px;

	}

</style>

<!-- JAVASCRIPT CODE REQUIRED -->

<script>

    var input = document.querySelector("#phone");

    window.intlTelInput(input, {

        separateDialCode: true,

		preferredCountries: ["ru", "am", "by", "kz"],

		autoHideDialCode:true,

        customPlaceholder: function (

            selectedCountryPlaceholder,

			

            selectedCountryData

        ) {

            return "e.g. " + selectedCountryPlaceholder;

        },

    });

	

	document.querySelector(".iti__selected-flag").addEventListener("click", myFunction);

	function myFunction (){

		var markup = document.querySelector(".iti__selected-dial-code");

	var a = "";

	var a = markup.innerHTML;

	var inp = document.querySelector("#phone");

	inp.value = a ; 

	}

</script>

<!-- REQUIRED CDN  -->

 <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"

        integrity="sha512-DNeDhsl+FWnx5B1EQzsayHMyP6Xl/Mg+vcnFPXGNjUZrW28hQaa1+A4qL9M+AiOMmkAhKAWYHh1a+t6qxthzUw=="

        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"

        integrity="sha512-yye/u0ehQsrVrfSd6biT17t39Rg9kNc+vENcCXZuMz2a+LWFGvXUnYuWUW6pbfYj1jcBb/C39UZw2ciQvwDDvg=="

        crossorigin="anonymous" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"

        integrity="sha512-BNZ1x39RMH+UYylOW419beaGO0wqdSkO7pi1rYDYco9OL3uvXaC/GTqA5O4CVK2j4K9ZkoDNSSHVkEQKkgwdiw=="

        crossorigin="anonymous">

	</script>



