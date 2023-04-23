<?php 
use Users;
use Product;
use Orders;
use Profile;

class OrdersController  extends Controller {

  

    public function ordersAction(){
        $products   = new Product();
        $users      = new Users();
        $orders     = new Orders();
        $profile    = new Profile();
        
        $userId     = $_POST['userId'];
        $product_id = $_POST['product_id'];
        $order_type = $_POST['order_type'];
        $client_tel = $_POST['phone'];
        $first_name = $_POST['first_name'];
        $last_name  = $_POST['last_name'];
        $email      = $_POST['email'];
        $day        = date('d.m.Y');
        $time       = date('H:i:s');
        $product       = $products ->select()->where([ 'id' =>   $product_id, ]) ->one();
        $user_id       = $product['user_id'];
        $profils_email = $profile ->select()->where([ 'user_id' =>   $user_id, 'metta_key' => 'email',  ]) ->all();
        $first_email   = $profils_email['0']['metta_value'];
        $profils_email2 = $profile ->select()->where([ 'user_id' =>   $user_id, 'metta_key' => 'email2',  ]) ->all();
        $product_name = $product['product_name'];
        $brand_name   = $product['brand_name'];
        $message = $order_type."\r\n".$first_name."\r\n".$last_name."\r\n".$email."\r\n".$product_name."\r\n".$brand_name."\r\n".$time;
        $subject = 'Заказ товара';

        if((!empty($email) && isset($email)) && (!empty($client_tel) && isset($client_tel)) && (!empty($first_name) && isset($first_name)) && (!empty($client_tel) && isset($client_tel))){

            
            $orders_insert = $orders->insert([
                'shop_id'      => $userId,
                'product_id'   => $product_id,
                'date'         => $day,
                'tame'         => $time,
                'type_order'   => $order_type,
                'product_name' => $product_name,
                'brand_name'   => $brand_name,
                'first_name'   => $first_name,
                'last_name'    => $last_name,
                'email'        => $email,
                'phone'        => $client_tel,
            
                ]);
                
                if(isset($orders_insert) && !empty($orders_insert)){
                    
                      $headers = 'From: paruyr.kirakosyan1995@gmail.com ' . "\r\n" .
                         'Reply-To: paruyr.kirakosyan1995@gmail.com '. "\r\n" .
                         'X-Mailer: PHP/' . phpversion();

                        
                    
                    if(mail($first_email,$subject,$message,$headers)){
                        foreach($profils_email2 as $email2) {
                          $all_email  =  $email2['metta_value']."," ;
                          $to         = $all_email;
                        //   $headers = 'From: paruyr.kirakosyan1995@gmail.com ' . "\r\n" .
    
                        //      'Reply-To: paruyr.kirakosyan1995@gmail.com '. "\r\n" .
            
                        //      'X-Mailer: PHP/' . phpversion();
    
                            mail($to,$subject,$message,$headers);
                       
                        }
                    }
                  
           
                }
                
                
                

         
        }

        
       
    }
  
}

