
<?php header('Content-Type: text/html; charset=utf-8');?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title> Admin </title>



    <!-- BOOTSTRAP STYLES-->

    <link href="<?php echo App::url('assets/css/bootstrap.css') ?>" rel="stylesheet" />

    <!-- FONTAWESOME STYLES-->

    <link href="<?php echo App::url('assets/css/font-awesome.css') ?>" rel="stylesheet" />

       <!--CUSTOM BASIC STYLES-->

    <link href="<?php echo App::url('assets/css/basic.css') ?>" rel="stylesheet" />

    <!--CUSTOM MAIN STYLES-->

    <link href="<?php echo App::url('assets/css/custom.css') ?>" rel="stylesheet" />

    <!-- GOOGLE FONTS-->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />









    <!-- dragndrop-->





    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.0/flatly/bootstrap.min.css"> -->

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <!--  -->

    <!-- <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.0/flatly/bootstrap.min.css">



        

        

-->

        

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

        <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

        <script src="<?php echo App::url('dist/5x5jqpi.min.js') ?>"></script> 

        <script src="<?php echo App::url('js/jquery.smartuploader.js') ?>"></script>







          <!-- crop -->

        <!-- <script src="<?php //echo App::url('dist/jquery.js') ?>" ></script> -->

        <script src="<?php echo App::url('dist/rcrop.min.js') ?>" ></script>

        <link href="<?php echo App::url('dist/rcrop.min.css') ?>" media="screen" rel="stylesheet" type="text/css">



</head>





<body>

    







    <div id="wrapper">

<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>

                <a class="navbar-brand" href="index.html">COMPANY NAME</a>

            </div>



            <div class="header-right">



                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>

                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>

                <a href="logout" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>



            </div>

        </nav>

       

        <nav class="navbar-default navbar-side" role="navigation">

            <div class="sidebar-collapse">

                <ul class="nav" id="main-menu">

                    <li>

                        <div class="user-img-div">

                            <img src="<?php echo App::url('assets/img/user.png') ?>" class="img-thumbnail" />



                            <div class="inner-text">

                            <?php echo $users['first_name']; ?>

                            <?php echo $users['last_name'];

                            

                            

                            ?>

                            <br />

                                <!-- <small>Last Login : 2 Weeks Ago </small> -->

                            </div>

                        </div>



                    </li>





                    <li>

                        <a class=" <?php echo $current_page == 'dashboard' ? 'active-menu' : ''; ?>" href="dashboard"><i class="fa fa-dashboard "></i>Dashboard</a>

                    </li>



                    <li>

                        <a class="<?php echo $current_page == 'products' ? 'active-menu' : ''; ?>" href="/admin/interview3"><i class="fa fa-dashboard "></i>Products</a>

                    </li>



                    

                    

                    

                    <!-- <li>

                        <a href="table.html"><i class="fa fa-flash "></i>Data Tables </a>

                        

                    </li> -->

                     <!-- <li>

                        <a href="#"><i class="fa fa-bicycle "></i>Forms <span class="fa arrow"></span></a>

                         <ul class="nav nav-second-level">

                           

                             <li>

                                <a href="form.html"><i class="fa fa-desktop "></i>Basic </a>

                            </li>

                             <li>

                                <a href="form-advance.html"><i class="fa fa-code "></i>Advance</a>

                            </li>

                             

                           

                        </ul>

                    </li> -->

                      <li>

                        <a href="/admin/interview4"><i class="fa fa-anchor "></i>Gallery</a>

                    </li>

                     <!-- <li>

                        <a href="error.html"><i class="fa fa-bug "></i>Error Page</a>

                    </li> -->

                    <!-- <li>

                        <a href="login.html"><i class="fa fa-sign-in "></i>Login Page</a>

                    </li> -->

                    <!-- <li>

                        <a href="#"><i class="fa fa-sitemap "></i>Multilevel Link <span class="fa arrow"></span></a>

                         <ul class="nav nav-second-level">

                            <li>

                                <a href="#"><i class="fa fa-bicycle "></i>Second Level Link</a>

                            </li>

                             <li>

                                <a href="#"><i class="fa fa-flask "></i>Second Level Link</a>

                            </li>

                            <li>

                                <a href="#">Second Level Link<span class="fa arrow"></span></a>

                                <ul class="nav nav-third-level">

                                    <li>

                                        <a href="#"><i class="fa fa-plus "></i>Third Level Link</a>

                                    </li>

                                    <li>

                                        <a href="#"><i class="fa fa-comments-o "></i>Third Level Link</a>

                                    </li>



                                </ul>



                            </li>

                        </ul>

                    </li> -->

                   

                    <!-- <li>

                        <a href="blank.html"><i class="fa fa-square-o "></i>Blank Page</a>

                    </li> -->

                </ul>



            </div>



        </nav>