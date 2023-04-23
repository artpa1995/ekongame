<?php 
session_start();
use Product;
use Users;
use Profile;
use Orders;

// ini_set('error_reporting', E_ALL);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);

class AdminController extends Controller {
        
        public function dashboardAction(){
    
            $model = new Profile();
            $model2 = new Users();
            $userId = App::session()->get("userId");
            $users  = $model2->select()->where([ 'id' =>   $userId,]) ->one();
    
            $this->render_admin("admin", ['users' => $users, 'current_page' => 'dashboard']);
    
        }
    
        public function logoutAction(){
    
            App::session()->destroy();
            $this->redirect("users/login");
    
        }
    
    
    public function interview1Action(){
        //   echo "<pre>";
        //     print_r($_SESSION);die;
     
       
    
        $product = new Product(); 
        $profile = new Profile();
        $model2  = new Users();
        //$userId= $_SESSION['userId'];
     
     
        $userId  = App::session()->get("userId");
       // $userId  = $_SESSION['userId'];
    //   echo "<pre>";
    //         print_r($userId);die;
        
        $users   = $model2->select()->where([ 'id' => $userId,]) ->one();
        
        if(empty( $users)){
            //$this->redirect('users/login');
        }
    
        if($this->request()->post('submit')){
    
            // $userId         = App::session()->get("userId");
            $company_name   = $this->request()->post('company_name');
            $otrasl         = $this->request()->post('ot');
            $rol_in_company = $this->request()->post('rol_in_company');
            $adres          = $this->request()->post('adres');
    
            if(!empty( $company_name)){
                $company_name_insert    = $profile->insert([
                    'user_id'     => $userId,
                    'metta_key'   => 'company_name',
                    'metta_value' =>  $company_name ,
                 ]);
            }
             if(!empty( $otrasl)){
                     $otrasl_insert   = $profile->insert([
                        'user_id'     => $userId,
                        'metta_key'   => 'otrasl',
                        'metta_value' =>  $otrasl,
            
                     ]);
             }
             if(!empty( $rol_in_company)){
                     $rol_in_company_insert    = $profile->insert([
                        'user_id'     => $userId,
                        'metta_key'   => 'rol_in_company',
                        'metta_value' =>  $rol_in_company ,
            
                     ]);
             }
            
             if(!empty( $adres)){
                     $adres_insert    = $profile->insert([
                        'user_id'     => $userId,
                        'metta_key'   => 'adres',
                        'metta_value' =>  $adres ,
                     ]);
             }
    
    
    
             if( $company_name_insert && $otrasl_insert && $rol_in_company_insert &&  $adres_insert  ){
    
                 if( $company_name_insert == true){
    
                    $opros1    = $profile->insert([
                        'user_id'     => $userId,
                        'metta_key'   => 'opros1',
                        'metta_value' =>  "opros1_ok" ,
                    ]);
    
                    $this->redirect('admin/interview2');
    
                 }else{
    
                    App::session()->set('company_name_insert',' Укажите название компании'); 
    
                 }
    
             }else{
    
                App::session()->set('еrror_op1',' Заполните все поля'); 
    
             }
    
        }
    
        $this->render("interview1", ['users' => $users, 'current_page' => 'dashboard']);
    
       // $this->render("interview1"); 
    
    }
    
    
    
    public function interview2Action(){
    
        $model = new Users();
        $profile = new Profile();
        $userId = App::session()->get("userId");
        $users  = $model->select()->where([ 'id' =>   $userId,]) ->one();
        
        if($this->request()->post('submit')){
          
            $userId          = App::session()->get("userId");
            $project_adres   = $this->request()->post('project_adres');
            $email           = $this->request()->post('email');
            $emailvall       = $profile->select()->where([ 'metta_value' =>  $email]) ->one();
            $additional_email= $_POST['email2'];
            // $additional_email= serialize($additional_email);
            
            foreach($additional_email as $em) {
                
                $additional_email_all =   $profile->select()->where([ 'metta_value' =>  $em, 'user_id' => $userId]) ->all();
       
                if(empty($additional_email_all) && !isset($additional_email_all)){
                     if (filter_var($em, FILTER_VALIDATE_EMAIL)) {
               
                          $$additional_email_insert  = $profile->insert([
                                                                    'user_id'     => $userId,
                                                                    'metta_key'   => 'email2',
                                                                    'metta_value' =>  $em,
                                                                ]);
                     }                                      
                    
                } else{
                           $this->redirect('admin/interview2');
                        App::session()->set('dop_email_foo','Вы уже внесли этот  Email');
                     } 
            }
           
    
            if(!empty($email) && isset($email)){
                
                    if(empty($emailvall) ){
                        
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $email_insert   = $profile->insert([
                                'user_id'     => $userId,
                                'metta_key'   => 'email',
                                'metta_value' =>  $email,
                            ]);
                        }
                        
                     }else{
                        $this->redirect('admin/interview2');
                        App::session()->set('email_foo','Некорректный Email');
                     }
                     
                }
               
    
            $project_adres_insert    = $profile->insert([
                'user_id'     => $userId,
                'metta_key'   => 'project_adres',
                'metta_value' =>  $project_adres ,
            ]);
        
             if( $project_adres_insert && $email_insert ){
    
                  $opros1    = $profile->insert([
                    'user_id'     => $userId,
                    'metta_key'   => 'opros2',
                    'metta_value' =>  "opros2_ok" ,
                 ]);
                $this->redirect('admin/interview3');
    
             }
    
        }
    
        $this->render("interview2", ['users' => $users, 'current_page' => 'dashboard']); 
    
      }

      public function interview3Action(){

        $model = new Users();
        $profile = new Profile();
        $product = new Product();
        $userId = App::session()->get("userId");
        $users  = $model->select()->where([ 'id' =>   $userId,]) ->one();
        $product_file   = $product->select()->where([ 'user_id' =>   $userId,]) ->all();
    
        foreach($product_file as $all_prod){
    
            $brand = $all_prod['brand_name'];
            $prod  = $all_prod['product_name'];
            $ptest = true; 
            $btest = true;
    
            if(empty($prod) && !isset($prod)){
    
                $ptest = false;
                break;
    
            }
    
            if(empty($brand) && !isset($brand)){
    
                $btest = false;
    
                break;
    
            }
    
        }
    
        if( $btest==true){
    
            if( $ptest==true){
    
                if($this->request()->post('submit')){
    
                    $opros1    = $profile->insert([
                        'user_id'     => $userId,
                        'metta_key'   => 'opros3',
                        'metta_value' =>  "opros3_ok" ,
    
                    ]);
    
                 $this->redirect('admin/interview4');
                 exist();
    
                }
    
            }else{
    
                App::session()->set('prodname','имя продукта не указоно');
    
            }
    
        }else{
    
            App::session()->set('brandname','имя бренда не указоно');
    
        }
    
        $this->render("interview3", ['users' => $users, 'current_page' => 'dashboard']);  
    
      }
    
    
      public  function upload_produc_imageAction()
    
    {
    
      $model       = new Users();
      $profile     = new Profile();
      $product     = new Product();
      $userId      = App::session()->get("userId");
      $users       = $model->select()->where([ 'id' =>   $userId,]) ->one();
      $uploads_dir = PUBLIC_PATH.'/images';
    
        if (!empty($_FILES['file']['name'])) {
    
            $res = [];
            foreach ($_FILES["file"]["error"] as $key => $error) {
    
                if ($error == UPLOAD_ERR_OK) {
    
                    $tmp_name   = $_FILES["file"]["tmp_name"][$key];
                    $image_name = basename(uniqid().$_FILES["file"]["name"][$key]);
                    if(move_uploaded_file($tmp_name,"$uploads_dir/$image_name")){
    
                        $product_insert     = $product->insert([
                            'user_id'       => $userId,
                            'image'         => $image_name
                        ]);
        
                    }else{
                        echo "problem 1";
                    }
    
                }else{
                    echo "problem2";
                }
    
            }
    
            if( !empty($product_insert) ){
                
                $product_file   = $product->select()->where([ 'user_id' =>   $userId,]) ->all();
                foreach($product_file as $product_){
                    $res[]= ['image' => $product_['image'], 'id' => $product_['id'], 'brand_name' => $product_['brand_name'], 'product_name' => $product_['product_name'],];
                }
                $res = array_reverse ( $res );
                echo json_encode($res);
            }else{
    
                echo "chexav";
    
            }
    
          }
    
    }
    
    
    
    public  function update_brand_nameAction() {
    
        $product        = new Product();
        $userId         = App::session()->get("userId");
        $brand_name     = $_POST['val'];
        $img_id         = $_POST['id'];
        $users          =  $product ->select()->where([ 'id' =>   $img_id,]) ->one();
    
       if(!empty($_POST['id']) && !empty($_POST['val'])){
    
             $product_insert = $product->update([ 'brand_name' => $brand_name,])-> where( ['id' => $img_id]);
    
       }
    }
    
    public  function update_product_nameAction() {
        $product        = new Product();
        $userId         = App::session()->get("userId");
        $product_name   = $_POST['val'];
        $img_id         = $_POST['id'];
        $users          =  $product ->select()->where([ 'id' =>   $img_id,]) ->one();
        if(!empty($_POST['id']) && !empty($_POST['val'])){
    
             $product_insert = $product->update([ 'product_name' => $product_name,])-> where( ['id' => $img_id]);
    
         }
    }
    
    
    
    
    public  function delete_productAction() {
    
        $product            = new Product();
        $userId             = App::session()->get("userId");
        $img_id             = $_POST['id'];
        $product_for_delete = $product ->select()->where([ 'id' =>   $img_id,]) ->one();
    
        if(!empty($_POST['id'])){

            $product_delete = $product->delete()-> where( ['id' => $img_id]);
            $uploads_dir = PUBLIC_PATH.'\images';
            $del_img =  $product_for_delete['image'];
            unlink("$uploads_dir/$del_img");
            $product_file   = $product->select()->where([ 'user_id' =>   $userId,]) ->all();
    
            foreach($product_file as $product_){
    
                $res[]= ['image' => $product_['image'], 'id' => $product_['id']];
    
            }
    
            echo json_encode($res);
    
        }
    
    }
    
    
    public function crop_imgAction(){
    
        $product     = new Product();
        $userId      = App::session()->get("userId");
        $uploads_dir = PUBLIC_PATH.'images';
        $id          = $_POST['id'];
        $tmp_name    = $_FILES["file"]["tmp_name"];
        $image_name  = basename(uniqid().".png");
        $product_for_delete   =  $product ->select()->where([ 'id' =>   $id,]) ->one();
        $del_img              =  $product_for_delete['image'];
    // print_r($uploads_dir);
        if(unlink("$uploads_dir/$del_img")){
    
            if(move_uploaded_file($tmp_name,"$uploads_dir/$image_name")){
    
                $product_for_delete   =  $product ->select()->where([ 'id' =>   $id,]) ->one();
                $del_img              =  $product_for_delete['image'];
                unlink("$uploads_dir/$del_img");
                $product_insert     = $product->update([ 'image' => $image_name,])-> where( ['id' => $id]);
                echo json_encode(['src'=>'/images/'.$image_name, 'success' => true]);exit();

            }
            echo "1";
            echo json_encode(['success' => false]);exit();
    
        }
     echo "2";
        echo json_encode(['success' => false]);exit();
    
    }
    
    

    public function interview4Action(){
    
        $model        = new Users();
        $profile      = new Profile();
        $product      = new Product();
        $orders       = new Orders();
        $userId       = App::session()->get("userId");
        $users        = $model->select()->where([ 'id' =>   $userId,]) ->one();
        $profile_user = $profile->select()->where([ 'user_id' =>   $userId, 'metta_key' => 'project_adres']) ->one();
        $shop_orders  = $orders ->select()->where([ 'shop_id' =>   $userId, ]) ->all();
        $this->render("interview4", ['users' => $users,  'shop_orders' => $shop_orders, 'profile_user' => $profile_user, 'current_page' => 'interview4']); 
    
    }
    
    
    public function send_messageAction(){
    
        $to      = "fnk@daob.ru";
        $email   = $_POST['email'];
        $phone   = $_POST['phone'];
        $name    = $_POST['name'];
        $text    = $_POST['text'];
        $message = $name."\r\n".$phone."\r\n".$text;
        $subject = 'Обратная Связь';
        
                    if(!empty($email) && !empty($phone) && !empty($name) && !empty($text) ){ 
        
                         $headers = "From: $email" . "\r\n" .
        
                         "Reply-To: $email ". "\r\n" .
        
                         'X-Mailer: PHP/' . phpversion();
        
                        mail($to,$subject,$message,$headers);
        
                    }
                    
    }

}