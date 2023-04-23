<?php 
use Users;
use Product;
use Profile;

class ProductsController  extends Controller {

    

    public function productsAction(){

        $product         = new Product();
        $model2          = new Users();
        $profile         = new Profile();
        $company_name    = $_SERVER['company_name'];
        $userId          = $profile->select()->where([ 'metta_key' => 'project_adres','metta_value' =>  $company_name,]) ->one();
        $userId          = $userId['user_id'];
        $users           = $model2->select()->where([ 'id' =>   $userId,]) ->one();
        $products        = $product->select()->where([ 'user_id' =>   $userId,]) ->all();
        
        $this->render_products("products", ['products' => $products, 'users ' => $users , 'current_page' => 'products']);  
    }




    public function product_like1Action(){
        $product         = new Product();
        $profile         = new Profile();
        $company_name    = $_SERVER['company_name'];
        $userId          = $profile->select()->where([ 'metta_key' => 'project_adres','metta_value' =>  $company_name,]) ->one();
        $userId          = $userId['user_id'];
        $res             = [];
        $image_id        = $_POST['post_id'];
        $products        = $product->select()->where([ 'id' =>    $image_id,]) ->one();
        $product_user_id = $products['user_id'];
        $all_products    = $product->query_sql("  SELECT * FROM `product` WHERE user_id=$product_user_id AND id>$image_id LIMIT 1");
        $all_productss   = $product->query_sql("  SELECT * FROM `product` WHERE user_id=$product_user_id AND id>$image_id LIMIT 2");
        $finish          = "0";
        if(empty($all_productss[0])){
            $finish      = "1";
            
        }

        
     
        $res[]= ['image' => $all_products[0] ['image'], 'id' => $all_products[0]  ['id'], 'brand_name' => $all_products[0]  ['brand_name'], 'product_name' => $all_products[0]  ['product_name'], 'finish' => $finish];
       echo json_encode($res);
    
    }

    public function product_like2Action(){
        $product         = new Product();
        $profile         = new Profile();
        $company_name    = $_SERVER['company_name'];
        $userId          = $profile->select()->where([ 'metta_key' => 'project_adres','metta_value' =>  $company_name,]) ->one();
        $userId          = $userId['user_id'];
        $res             = [];
        $image_id        = $_POST['post_id'];
        $products        = $product->select()->where([ 'id' =>    $image_id,]) ->one();
        $product_user_id = $products['user_id'];
        $all_products    = $product->query_sql("  SELECT * FROM `product` WHERE user_id=$product_user_id AND id>$image_id LIMIT 1");
        if(empty($all_products[2] ['image'])){
            echo "egjiejrgier";
        }
        $res[]= ['image' => $all_products[0] ['image'], 'id' => $all_products[0]  ['id'], 'brand_name' => $all_products[0]  ['brand_name'], 'product_name' => $all_products[0]  ['product_name'],];
       echo json_encode($res);
    
    }

  


}