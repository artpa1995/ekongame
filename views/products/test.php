<?php include_once(INCLUDES_PRODUCTS.'/header.php') ?>
<?php 
$url = App::url('images');
// echo "<pre>";
// print_r($products[0]['image']);
?>


    <?php 
    foreach($products as $all_prod){
        $product_img = $all_prod['image'];
        $product_brand = $all_prod['brand_name'];
        $product_name = $all_prod['product_name'];
     
       ?>
      
      
     
        <?php

     }
     
    ?>

<div class="rob_valka2">
    <div class="rob_valka2_part">
            <img src="<?php echo App::url('assets_products/img/prod_log.jpg') ?>" alt="" class="rob_img">
            <p class="rop_valka_text"><span style="color: #852589; font-weight: 600;">
            Я робот Вилька!</span> Просто лайкайте те изображения, которые вам нравятся больше, 
            а в конце я подберу для вас идеальную модель
            !Если вдруг вы устали лайкать, 
            нажмите кнопку ниже и получите моментальный результат!</p>
    </div>
            <div class="rob_valka2_part">
                <img class="priz_img" src="<?php echo App::url('assets_products/img/priz.jpg') ?>" alt="">
                <p class="priz_text">Чем больше вы выберайте, тем точнее прогноз! Вконце мыподарим вам приятный бонус!</p>
            </div>
    <div class="rob_valka2_part2">
            <button id="rezult" class="need-rez">ХОЧУ РЕЗУЛЬТАТ!</button>
            <h1 class="procent">0%</h1>
    </div>
        </div>
<div class="wrapper">

      <div class="wrapper-item">
            <h2 class="wrapper-title">ИСКУССТБЕННЙ ИНТЕЛЛЕКТ ОПРЕДЕЛИТ ЦВЕРОЯТНОЩТЬЮ 98% ВАШУ ИДЕАЛЬНУЮ МОДЕЛЬ</h2>
                <div class="items">
                    <div class="img_item">
                        <div class='one_img1 one_img'>
                             <input type="hidden" data-id="<?php echo $products[0]['id'];?>" value="0"  id="send-val1">
                            <input type="hidden" value="<?php echo $products[0]['id'];?>" class="product_id_new">
                            <img src="<?php echo $url.'/'.$products[0]['image']; ?>" class="products_image img1">
                            <p class="product-title">
                                <span><?php echo $products[0]['brand_name'] ?></span>: 
                                <span><?php echo $products[0]['product_name']; ?></span>
                            </p>
                        </div>
                        <div class="bl-like">
                                <img class="like_img" src="<?php echo App::url('assets_products/img/serdce.png') ?>" alt="">
                            </div>
                            <div class="order">
                                <button class="order_but">Хочу эту модель!</button>
                            </div>
                    </div>
                    <div class="img_item">
                        <div class='one_img2 one_img'>
                            <input type="hidden"  data-id="<?php echo $products[1]['id'];?>" value="0"  id="send-val2">
                            <input type="hidden" value="<?php echo $products[1]['id'];?>" class="product_id_new">
                            <img src="<?php echo $url.'/'.$products[1]['image']; ?>" class="products_image img2"  data-id="<?php echo $products[1]['id'];?>">
                            <p class="product-title">
                                <span><?php echo $products[1]['brand_name'] ?></span>: 
                                <span><?php echo $products[1]['product_name']; ?></span>
                            </p>
                            
                        </div>
                        <div class="bl-like">
                                <img class="like_img" src="<?php echo App::url('assets_products/img/serdce.png') ?>" alt="">
                        </div>
                        <div class="order">
                                <button class="order_but">Хочу эту модель!</button>
                            </div>

                    </div>
                </div>
        </div>
        <div class="rob_valka">
            <img src="<?php echo App::url('assets_products/img/prod_log.jpg') ?>" alt="" class="rob_img">
            <p class="rop_valka_text"><span style="color: #852589; font-weight: 600;">Я робот Вилька!</span> Просто лайкайте те изображения, которые вам нравятся больше, а в конце я подберу для вас идеальную модель!</p>
            <p class="rop_valka_text">Если вдруг вы устали лайкать, нажмите кнопку ниже и получите моментальный результат!</p>
            <button id="rezult" class="need-rez">ХОЧУ РЕЗУЛЬТАТ!</button>
            <h1 class="procent">0%</h1>
            <div class="priz">
                <img class="priz_img" src="<?php echo App::url('assets_products/img/priz.jpg') ?>" alt="">
                <p class="priz_text">Чем больше вы выберайте, тем точнее прогноз! Вконце мыподарим вам приятный бонус!</p>
            </div>
        </div>
</div>

<div class="win_form">

	
	<?php
	
	//  $error_orders = App::session()->get("orders");
	
	 
	?>
	<div class="error"><?php //echo $error_orders; ?></div>

	<?php
	
	?>
	<div class="alert alert-info" style="display: none;"></div>
        <div class="form_idems">
        <h3 class="text-muted">Продукт для вас</h3>
            <input type="hidden"  data-id="" name="product_id" value="0"  id="send-val">
            <input type="hidden"  data-id="" name="order_type" value="0" id="order_type" id="order_type">
            <input type="tel" name="tel" placeholder="Телефон"  id="phone"  style="width: 458px; height: 49px; border-radius: 5px; border: 2px solid lightgrey;">
            <input type="text" name="first_name" id="first_name"  placeholder="Имя" style="width: 458px; height: 49px; border-radius: 5px; border: 2px solid lightgrey;" >
            <input type="text" name="last_name" id="last_name" placeholder="Фамилия" style="width: 458px; height: 49px; border-radius: 5px; border: 2px solid lightgrey;">
            <input type="text" name="email" id="email" placeholder="Email"  autocomplete="off" style="width: 458px; height: 49px; border-radius: 5px; border: 2px solid lightgrey;" >
            
            <!-- <input type="button"  id="order-product" name="submit" value="ЗАКАЗАТЬ"> -->
            <button id="order-product" name="submit">ЗАКАЗАТЬ </button>
        </div>

</div>



<script src="<?php echo App::url('assets_products/js/script.js') ?>"></script> 


</body>
</html>