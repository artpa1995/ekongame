    
    function addThumbnail(data){

        if($.trim(data)) {

            $('.products').empty();
            
            $('.allproduct_items').find('.fileQueue').remove();
           
            
            for (let i = 0; i < data.length; i++) {
               if(data[i].brand_name == null){
                data[i].brand_name = ""
               }
               if(data[i].product_name == null){
                data[i].product_name = ""
               }

                var content = `<div class="row fileQueue" style="opacity: 1;">
                                <div class="col name prod_item">
                                    <img class="product_image image-3" id="product_image_`+data[i].id+`"  src= '/images/`+data[i].image+`'> 
                               
                                </div>
                                <div class="col desc">
                                    <input class="form-control form-control-sm brand_name product_inp" data-id="`+data[i].id+`" name="brand_name" type="text" placeholder="Название бренда" maxlength="100" value="`+data[i].brand_name+`">
                                </div>
                                <div class="col desc">
                                    <input class="form-control form-control-sm product_name product_inp" name="product_name" data-id="`+data[i].id+`" type="text" placeholder="Название продукта" maxlength="100" value="`+data[i].product_name+`">
                                </div>
                                <div class="col-2 remove">
                                    <input class="btn btn-sm btn-outline-danger" type="button" value="Удалить" id="delete_image" data-id="`+data[i].id+`" data-name="13.jpg">
                                </div>
                            </div>`; 
               
                
                $('.allproduct_items').append(content);

            }

        } else {
            $('.products').html('Nothing!');
        }

    }

    $(document).ready(function(){




                
    // var upload = []; 


    $("#uploader").initUploader({
        // selectOpts:{one:'jquery',two:'script',three:'net'},
        showDescription: true,
        fileLimit: 200,
        sizeLimit: 250,
        postFn: $.noop,
    });


     $(document).on('change','#uploads_inputs', function(e){
     
        console.log(e.originalEvent.target.files)

        e.target.classList.remove("active");

        if(e.originalEvent.target.files) {
            var images     = e.originalEvent.target.files;
            var form_data  = new FormData();
            for (var index = 0; index < images.length; index++) {
                form_data.append("file[]", images[index]);
            }
            uploadData(form_data)
         }

        
    
    });


    
    $(document).on('dragenter drop dragover dragleave change','#dragandrophandler', function(e){
        
        // console.log(e)
        switch ((e.stopPropagation(), e.preventDefault(), e.type)) {
            case "dragenter":
                e.target.classList.add("active");
                break;
            case "dragleave":
                e.target.classList.remove("active");
                break;
            case "drop":
                e.target.classList.remove("active");

                console.log(e.originalEvent.dataTransfer.files)

                if(e.originalEvent.dataTransfer.files) {
                    var images     = e.originalEvent.dataTransfer.files;
                    var form_data  = new FormData();
                    for (var index = 0; index < images.length; index++) {
                        form_data.append("file[]", images[index]);
                    }
                    uploadData(form_data)
                 }

                break;
        }
      //  console.log( upload )
    
    });




    function uploadData(formdata){

        $.ajax({
            url: '/admin/upload_produc_image/',
            type: 'post',
            data: formdata,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response){
                
                addThumbnail(response);
            }
        });

    }








    $(document).on('blur', '.brand_name', function(){
        
        var this_data_id = $(this).data('id');
        console.log(this_data_id);
        var this_val    = $(this).val();
        console.log(this_val);
        $.ajax({
            url: '/admin/update_brand_name/',
            type: 'post',
            data: {id:this_data_id, val:this_val},
            
            dataType: 'json',
            
            success: function(response){
                
           
            }
        });

    });

    $(document).on('blur', '.product_name', function(){
       // console.log(48);
        var this_data_id = $(this).data('id');
        var this_val    = $(this).val();
        $.ajax({
            url: '/admin/update_product_name/',
            type: 'post',
            data: {id:this_data_id, val:this_val},
            
            dataType: 'json',
            success: function(response){
                
               
            }
        });

    });


    var delete_image = true;


    if(delete_image) {

        $(document).on('click', '#delete_image', function(){

            $(this).parent().parent().remove();

            var this_data_id = $(this).data('id');
            var this_val    = $(this).val();
    
            delete_image = false;
    
            $.ajax({
                url: '/admin/delete_product/',
                type: 'post',
                data: {id:this_data_id, val:this_val},
                // contentType: false,
                // processData: false,
                dataType: 'json',
                success: function(response){
                    delete_image = true;
                    console.log(delete_image);
                   // addThumbnail(response);
                }
            });
        });

    }

   

    $(document).on('click', '.product_image', function(){
        var product_id = $(this).parent().parent().find('#delete_image').data('id');
      
        var img_src    = $(this).attr('src');

        $('#myModal').show()
        
        var content = '<img id="image-3" class="crop_img" src="'+img_src+'"  data-id='+product_id+'>';
            content += '<div id="cropped-original"> </div>';

        $('#cropped_main_wrapper').html(content)


        $('#image-3').rcrop({

            minSize : [200,200],
            preserveAspectRatio : true,
            
            preview : {
                display: true,
                size : [100,100],
                wrapper : '#custom-preview-wrapper'
            }
        });
        
    });

    $(document).on('click', '#myModal .close', function(){
    $('#myModal').hide()
    $('.saveCropImage').css({"display": "none"});

})

               
    
$(document).on('rcrop-changed', '#image-3', function(e){
    var srcOriginal = $(this).rcrop('getDataURL');
    var srcResized = $(this).rcrop('getDataURL', 50,50);
    $('#cropped-original').html('<img id="cropped-resized-images" src="'+srcOriginal+'">');
    $('#cropped-resized').html('<img id="cropped-resized-imagess" src="'+srcResized+'">');
    $('.saveCropImage').css({"display": "block"});
});     

    



$(document).on('click', '.saveCropImage', function(){
    var product_id =$(this).parent().parent().find('.crop_img').data('id');
    var image = $('#cropped-resized-images').attr('src');
    var base64ImageContent = image.replace(/^data:image\/(png|jpg);base64,/, "");
    var blob = base64ToBlob(base64ImageContent, 'image/png');                
    var formData = new FormData();
    $('#myModal').hide();
    

    formData.append('file', blob);
    formData.append('id', product_id);

    $.ajax({
        url: "/admin/crop_img", 
        type: "POST", 
        cache: false,
        contentType: false,
        processData: false,
        data: formData,
        success:function(r)
        {
            
            r = JSON.parse(r)

            console.log(r)

            
            if(r.success === true) {
                $('#product_image_'+product_id).attr('src', r.src)
                
            } else {
                alert('Error, please refresh page')
            }
        }
    })
})        



    function base64ToBlob(base64, mime) 
    {
        mime = mime || '';
        var sliceSize = 1024;
        var byteChars = window.atob(base64);
        var byteArrays = [];

        for (var offset = 0, len = byteChars.length; offset < len; offset += sliceSize) {
            var slice = byteChars.slice(offset, offset + sliceSize);

            var byteNumbers = new Array(slice.length);
            for (var i = 0; i < slice.length; i++) {
                byteNumbers[i] = slice.charCodeAt(i);
            }

            var byteArray = new Uint8Array(byteNumbers);

            byteArrays.push(byteArray);
        }

        return new Blob(byteArrays, {type: mime});
    }


 
    $('.slsh3').click(function() {
        var errors    = 0;
        var error_inp = '';

        $(".product_inp").map(function(){

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
  
    });
    
});



