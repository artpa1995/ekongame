<?php include_once(INCLUDES_PRODUCTS.'/header.php') ?>
<?php 
//print_r($users);
// print_r($products);
$url = App::url('images');
//print_r($url);
foreach($products as $all_prod){
   $product_img = $all_prod['image'];
    //echo "<img src='$url/$product_img' class='products_page_image'>" ;
}

?>




</body>
</html>