<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ECOMGAME</title>
    <link rel="stylesheet" href="<?php echo App::url('css/style.css') ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js" integrity="sha512-6Jym48dWwVjfmvB0Hu3/4jn4TODd6uvkxdi9GNbBHwZ4nGcRxJUCaTkL3pVY6XUQABqFo3T58EMXFQztbjvAFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script> 



</head>
<body>
<noscript>Disable Java Script</noscript>




<div class="container-fluid bg-dark">
    <div class="container">
        <div class="row text-light py-2">
            <div class="col-md-3 ln">
                <!-- <a class="social-icons" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="social-icons" href="">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="social-icons" href="">
                    <i class="fab fa-twitter"></i>
                </a> -->
            </div>
            <div class="col-md-9">
                <?php if(App::session()->get('userId')){ ?>
                    <a class="login" href="logout">
                        <i class="fas fa-unlock"></i>
                       Выход
                    </a>
                <?php }else{ ?>
                <a class="login" href="<?php echo App::url("users/register") ?>">
                    <i class="fas fa-user-alt"></i>
                    Регистрация
                </a>
                <a class="login" href="<?php echo App::url("users/login") ?>">
                    <i class="fas fa-lock"></i>
                    Вход
                </a>
                <!-- <a class="login" href="<?php echo App::url("Admin/index") ?>">
                 
                    post
                </a> -->
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?= $content ?>


<!--Jquery-3.3.1-->
<!-- <script src="/js/jquery-3.3.1.js"></script> -->
<!--My script-->
<!-- <script src="/js/script.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.3/dist/jquery.fancybox.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="<?php echo App::url('js/script.js') ?>"></script> 
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

</body>
</html>
