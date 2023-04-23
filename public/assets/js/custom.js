
/*=============================================================
    Authour URI: www.binarytheme.com
    License: Commons Attribution 3.0

    http://creativecommons.org/licenses/by/3.0/

    100% To use For Personal And Commercial Use.
    IN EXCHANGE JUST GIVE US CREDITS AND TELL YOUR FRIENDS ABOUT US
   
    ========================================================  */


(function ($) {
    "use strict";
    var mainApp = {

        metisMenu: function () {

            /*====================================
            METIS MENU 
            ======================================*/

            $('#main-menu').metisMenu();

        },


        loadMenu: function () {

            /*====================================
            LOAD APPROPRIATE MENU BAR
         ======================================*/

            $(window).bind("load resize", function () {
                if ($(this).width() < 768) {
                    $('div.sidebar-collapse').addClass('collapse')
                } else {
                    $('div.sidebar-collapse').removeClass('collapse')
                }
            });
        },
        slide_show: function () {

            /*====================================
           SLIDESHOW SCRIPTS
        ======================================*/

            $('#carousel-example').carousel({
                interval: 3000 // THIS TIME IS IN MILLI SECONDS
            })
        },
        reviews_fun: function () {
            /*====================================
         REWIEW SLIDE SCRIPTS
      ======================================*/
            $('#reviews').carousel({
                interval: 2000 //TIME IN MILLI SECONDS
            })
        },
        wizard_fun: function () {
            /*====================================
            //horizontal wizrd code section
             ======================================*/
            $(function () {
                $("#wizard").steps({
                    headerTag: "h2",
                    bodyTag: "section",
                    transitionEffect: "slideLeft"
                });
            });
            /*====================================
            //vertical wizrd  code section
            ======================================*/
            $(function () {
                $("#wizardV").steps({
                    headerTag: "h2",
                    bodyTag: "section",
                    transitionEffect: "slideLeft",
                    stepsOrientation: "vertical"
                });
            });
        },
       
        
    };
    $(document).ready(function () {
        mainApp.metisMenu();
        mainApp.loadMenu();
        mainApp.slide_show();
        mainApp.reviews_fun();
        mainApp.wizard_fun();
       
    });

    $(document).ready(function () {
        
        
        
        
        
        
        
$('#dopem').click(function(){
    
    $(".hastatun_emil").after("<div class='dop_emil'><input type='text' name='email2[]' placeholder='Доп. почта' style='width: 320px;' class='opr1form emaildel'><a class='del_emil'><i class='far fa-trash-alt '></i></a> </div>");
});

$(document).on("click",".del_emil",function(){
    
    $(this).parent().remove();
});


$('.uplo').click(function(){
    $('.sledshag4').css({"display": "block"});
});

$('#copy_button').click(function(){
    var copyText = $('#sayt_url')
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");


});




$(document).on('click', '#sent_massege', function(){
$('.email_valid').hide();
    var name  = $('.namemes').val();
    var email = $('.emailmes').val();
    var phone = $('.phonemes').val();
    var text   = $('.textmes').val();
 
    var errors    = 0;
    var error_inp = '';


    
    var atposition=email.indexOf("@");  
    var dotposition=email.lastIndexOf(".");  
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){  
        $('.email_valid').show();
      return false;  
      }  
    $(".opr1form").map(function(){

         if( $(this).val() == "" ) {

            if(error_inp == '') {
                error_inp = $(this);
            }

            $(this).addClass('warning');
        
            errors++;

        } else if ($(this).val()) {
         
        }   
    });

    if(errors > 0){

        
        $('html, body').animate({
            scrollTop: error_inp.offset().top-60  
        }, 2000); 
        error_inp.focus();

        
        return false;
    }else{
        $(this).submit();
    }


    
    $.ajax({
                 url: '/admin/send_message/',
                 data: {name:name, email:email, phone:phone, text:text, },
                 type: "POST", 
                 cache: false,
                 success: function(data){
                     console.log(data);
                     location.reload();

                 }
             });
  
  
  
  });


    });
}(jQuery));
function mycopy() {
    var copyText = document.getElementById("myInput");
    copyText.select();
    copyText.setSelectionRange(0, 99999)
    document.execCommand("copy");
  
  }

  var modal = document.getElementById("feedbackmyModal");

// Get the button that opens the modal
var btn = document.getElementById("feedback");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("feedbackclose")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
  console.log(101);
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
