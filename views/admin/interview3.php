<?php include_once(INCLUDES.'/header.php') ?>
<?php if(empty($users) && !isset($users)){
	header('Location: /users/login');
}?>
<div id="page-wrapper" style="overflow: scroll;">
    <div id="page-inner" style="overflow: scroll;">
 
    <style>
        img{
                max-width: 100%;
            }
            
            #image-4-wrapper .rcrop-outer-wrapper{
                opacity: .75;
            }
         
            #image-4-wrapper .rcrop-croparea-inner{
                border: 1px dashed #fff;
            }
            
            #image-4-wrapper .rcrop-handler-corner{
                width:12px;
                height: 12px;
                background: none;
                border : 0 solid #51aeff;
            }
            #image-4-wrapper .rcrop-handler-top-left{
                border-top-width: 4px;
                border-left-width: 4px;
                top:-2px;
                left:-2px
            }
            #image-4-wrapper .rcrop-handler-top-right{
                border-top-width: 4px;
                border-right-width: 4px;
                top:-2px;
                right:-2px
            }
            #image-4-wrapper .rcrop-handler-bottom-right{
                border-bottom-width: 4px;
                border-right-width: 4px;
                bottom:-2px;
                right:-2px
            }
            #image-4-wrapper .rcrop-handler-bottom-left{
                border-bottom-width: 4px;
                border-left-width: 4px;
                bottom:-2px;
                left:-2px
            }
            #image-4-wrapper .rcrop-handler-border{
                display: none;
            }

            .feedbackmodal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.feedbackclose {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.feedbackclose:hover,
.feedbackclose:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

            
            
    </style>
  

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
            <h4 class="text-muted">ШАГ 2 </h4>
            <p>Настройка проекта</p>
    
    	</div>
    	<div>
            <h4 class="text-muted" style="background-color: green; color:white;">ШАГ 3 </h4>
            <p>Загрузка товара</p>
    	</div>
        <div>
            <h4 class="text-muted">ШАГ 4 </h4>
            <p>Статистика и заявки</p>
    	</div>
	</div>

        <div class="container my-5 allprodcontainer">
            <div id="carbon-block" style="margin:30px auto" aligne="center"></div>
            <div id="uploader">
                
                
          
            </div>
            <div id="uploader2" class="allproduct_items">
                
                
          
            </div>
        </div>

        <form class="oprosform" action="<?php echo App::url('admin/interview3') ?>" method="post">
	
            
            
            
            <input type="submit"  name="submit" value="следуйщий шаг" class="sledshag4 slsh3">
            <a href="interview4">Пропустить опрос</a>
        </form>
        
        <div class="products">
            
        </div>
    </div>
</div>


    <div id="myModal" class="modal">

        <div class="modal-content">
            
            <div class="modal-header">
                <span class="close">&times;</span>

                <div id="cropped_main_wrapper">
                    <img id="image-3" class="crop_img" src="" >
                    <div id="cropped-original"> </div>
                    
                </div>

                <div id="custom-preview-wrapper">

                </div>
                <button class="saveCropImage" style="display: none;">Сохранить</button>
            </div>

            <div class="modal-body">
           
            </div>
        
        </div>

    </div>
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
<script>

    $(document).ready(function(){
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
            console.log(1);
        }   
    });

    if(errors > 0){

        
        $('html, body').animate({
            scrollTop: error_inp.offset().top-60  
        }, 2000); 
        error_inp.focus();

        console.log(errors);
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

                 }
             });
  
  
  
  });
    })
    
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
</script>
<script src="<?php echo App::url('dist/script.js') ?>"></script> 
</body>
</html>

<?php exit();?> 