<?php include_once(INCLUDES.'/header.php') ;
header('Content-Type: text/html; charset=utf-8');?>


<?php if(empty($users) && !isset($users)){

	header('Location: /users/login');

}





echo parse_url();

?>



<div id="page-wrapper">

<div id="page-inner">



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
            <h4 class="text-muted" >ШАГ 3 </h4>
            <p>Загрузка товара</p>
    	</div>
        <div>
            <h4 class="text-muted" style="background-color: green; color:white;">ШАГ 4 </h4>
            <p>Статистика и заявки</p>
    	</div>
	</div>
	
	

<div class="silkasaytacopi">

    Адрес вашего проекта: 

    

    <input type="text" value="<?php echo $_SERVER['SERVER_NAME'];?>/company/<?php echo $profile_user['metta_value']; ?>" id="myInput" style="">

    <button onclick="mycopy()" class="copy_button">скопировать</button>

</div>

<table class="zayavkitable" style="overflow-x:auto;display:flex;">




<tr>

    <th>

        ID заявки

    </th>

    <th>

       Дата заявки

    </th>

    <th>

       Время заявки

    </th>

    <th>

      Тип заявки

    </th>

    <th>

     Товар

    </th>

    <th>

     Имя клиента

    </th>

    <th>

     Email клиента

    </th>

    <th>

       Телефон клиента

    </th>

    <th>

      Поссмотреть все предпочетения

    </th>

</tr>

<?php 

//  echo "<pre>";

//  print_r($shop_orders);

 for($i =0; $i < count($shop_orders); $i++ ){
  header('Content-Type: text/html; charset=utf-8');

   echo "<tr>";

   echo "<td class='order_products'>".$shop_orders[$i]['id']."</te>";

   echo "<td class='order_products'>".$shop_orders[$i]['date']."</te>";

   echo "<td class='order_products'>".$shop_orders[$i]['tame']."</te>";

   echo "<td class='order_products'>".$shop_orders[$i]['type_order']."</te>";

   echo "<td class='order_products'>".$shop_orders[$i]['brand_name']. " : " .$shop_orders[$i]['product_name']."</te>";

   echo "<td class='order_products'>".$shop_orders[$i]['first_name']."</te>";

   echo "<td class='order_products'>".$shop_orders[$i]['email']."</te>";

   echo "<td class='order_products'>".$shop_orders[$i]['phone']."</te>";

  //  echo "<td>".$shop_orders[$i]['id']."</te>";



   echo "</tr>";

 }

?>





</table>



<div id="feedbackmyModal" class="feedbackmodal">



  <!-- Modal content -->

  <div class="feedbackmodal-content">

    <span class="feedbackclose">&times;</span>

	<form class="oprosform" >



	<input type="text" name="name" placeholder="Имя"   class="opr1form namemes" >

  <p class="email_valid" style="display: none;">напишите ваш емаил</p>

	<input type="text" name="email" placeholder="Ваша почта"  class="opr1form emailmes">

  <input type="text" name="phone" placeholder="Телефон"  class="opr1form phonemes">

	<textarea name="text" id="" cols="30" rows="10" class="opr1form textmes" style="height: 200px;" placeholder="сообщение"></textarea>

  <input type="button" name="submit" value="Отправить" class="sledshag4" id="sent_massege">



	

	</form>

  </div>



</div>

</div>



    <!-- /. FOOTER  -->

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->

    <!-- JQUERY SCRIPTS -->



    <script src="<?php echo App::url('assets/js/custom.js') ?>"></script>

</body>

</html>



<?php exit();?> 