$(document).ready(function(){
    var val1 = $('#send-val1').val();
    var val2 = $('#send-val2').val();
    var zro  = 0;
    $('.like_img').hide();

        $(document).on("click",".one_img1",function(){

        $(this).parent().find('.like_img').show();
        
        $('.one_img2').parent().find('.like_img').hide();
        $('#order_type').attr("value","Опрос");
        zro+=1;
        val1= parseInt(val1);   
        val1+=1;
       
         val2=0;
         if(val1 == 5){
            $('.win_form').css({"display": "block"});
            $('.all').css({"display": "none"});
            $('#send-val').attr("value",post_id1);
         }
      
        post_id1 = $('#send-val2').data('id');
        post_id2 = $('#send-val1').data('id');
        if(post_id1>post_id2){
            post_id =  post_id1 = $('#send-val2').data('id');
        }else{
            post_id = post_id2 = $('#send-val1').data('id');
        }
         
        $.ajax({
                url: "/products/product_like1", 
                type: "POST", 
                cache: false,
                success: function(response){
                         addlike1(response);
                   },
                data: {post_id:post_id}
        }).done(function(e){
                    //console.log('done!');
           });
        
        });


$('.one_img2').click(function(){

    $(this).parent().find('.like_img').show();
    $('.one_img1').parent().find('.like_img').hide();
    $('#order_type').attr("value","Опрос");
    zro+=1;
    val2= parseInt(val2);
    val2+=1;
    val1=0;
 
    if(val2 == 5){
        $('.win_form').css({"display": "block"});
        $('.all').css({"display": "none"});
        $('#send-val').attr("value",post_id2);
     }

    post_id1 = $('#send-val2').data('id');
    post_id2 = $('#send-val1').data('id');
    if(post_id1>post_id2){
        post_id =  post_id1 = $('#send-val2').data('id');
    }else{
        post_id = post_id2 = $('#send-val1').data('id');
     }
    $.ajax({
        url: "/products/product_like1", 
        type: "POST", 
        cache: false,
        success: function(response){
                 addlike2(response);
           },
        data: {post_id:post_id}
     }).done(function(e){
            //console.log('done!');
       });


});


    function addlike1(data){
     data = JSON.parse(data)
   
         if($.trim(data)) {
            
            $('.one_img2').empty();
                var content = `  
                                <input type="hidden"  data-id="`+data[0].id+`" value="0" id="send-val2">
                                <input type="hidden"   value="`+data[0].id+`" class='product_id_new'>
                                <img src= '/images/`+data[0].image+`' class="products_image img2"  data-id="`+data[0].id+`">
                                <p class="product-title">
                                    <span>`+data[0].brand_name+`</span>: 
                                    <span>`+data[0].product_name+`</span>
                                </p>
                               
                            `; 
                if((data[0].brand_name == null) && (data[0].product_name == null) && (data[0].image == null) && (data[0].id == null) ){
                    $('.one_img1').parent().find('.order_but').trigger("click");
                    $('.all').css({"display": "none"});
                    $('.one_img2').html('Nothing!');
                    $('.order_but').hide();
                }else{
                    $('.one_img2').append(content);
                }
            
        } else {
            $('.one_img2').parent().html('Nothing!');
             $('.order_but').hide();
        }

    }


    function addlike2(data){
        data = JSON.parse(data)
            if($.trim(data)) {
                if((data[0].brand_name == null) && (data[0].product_name == null) && (data[0].image == null) && (data[0].id == null) ){
                    $('.one_img2').parent().find('.order_but').trigger("click");
                    $('.all').css({"display": "none"});
                    $('.one_img1').html('Nothing!');
                }
              
   
               $('.one_img1').empty();
                   var content = `      
                                   <input type="hidden"  data-id="`+data[0].id+`" value="0" id="send-val1">
                                   <input type="hidden"   value="`+data[0].id+`" class='product_id_new'>
                                   <img src= '/images/`+data[0].image+`' class="products_image img1"  data-id="`+data[0].id+`">
                                   <p class="product-title">
                                       <span>`+data[0].brand_name+`</span>: 
                                       <span>`+data[0].product_name+`</span>
                                   </p>
                                  
                               `; 
                   
                               if((data[0].brand_name == null) && (data[0].product_name == null) && (data[0].image == null) && (data[0].id == null) ){
                                $('.one_img1').html('Nothing!');
                            }else{
                                $('.one_img1').append(content);
                            }
           } else {
               $('.one_img1').parent().html('Nothing!');
               $('.order_but').hide();
           }           

       }

       $(document).on('click', '.order_but', function(){
         var pro_id     = $(this).parent().parent().find('.product_id_new').val();
         $('#send-val').attr("value",pro_id);
         var pro_id_new = $('#send-val').val();
         $('#order_type').attr("value","Хочу эту модель!");
         $('.win_form').css({"display": "block"});
         $('.all').css({"display": "none"});

       });
       $('#order-product').click(function(){
           var product_id = $('#send-val').val();
           var order_type = $('#order_type').val();
           var phone      = $('#phone').val();
           var first_name = $('#first_name').val();
           var email      = $('#email').val();
           var last_name  = $('#last_name').val();

           var errors    = 0;
           var error_inp = '';
   
           var atposition=email.indexOf("@");  
            var dotposition=email.lastIndexOf(".");  
            if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){  
                $('.email_valid').show();
            return false;  
            } 
           $(".orders_form").map(function(){
   
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
                        url: '/orders/orders/',
                        data: {product_id:product_id, order_type:order_type, phone:phone, first_name:first_name, last_name:last_name, email:email,userId:userId},
                        type: "POST", 
                        cache: false,
                        success: function(data){
                            location.reload();

                        }
                    });


       })
   
       
       $('.slsh3').click(function() {
       
  
    });





})