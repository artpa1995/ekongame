<?php include_once(INCLUDES.'/header.php') ?>
<form action="<?php echo App::url('users/interview3') ?>" method="post" enctype="multipart/form-data" id="form_img_upload">
        <input type="hidden" name="action" value="img_uploid">
       
        
       
       
       
        <!-- <input type="file" class="text-center center-block file-upload" name="photo"> -->
        <input type="file" class="text-center center-block file-upload" name="photo" id="file-upload" style=" display: none;">
        <label class="btn btn-lg btn-success" for="file-upload" id="but_-up"><i class="fas fa-camera" name="sub"></i> Добавить фото</label>
        <!-- <button class="btn btn-lg btn-success" type="submit"><i class="fas fa-camera" name="sub"></i> Добавить фото</button> -->
        </form>