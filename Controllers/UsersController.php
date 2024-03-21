<?php
session_start();
// ini_set('error_reporting', E_ALL);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);


// header('Content-Type: text/html; charset=utf-8');

use Profile;

class UsersController extends Controller {


    public function __construct(){
    }


    public function registerAction(){

        $model = new Users();
        if($this->request()->post('submit')){
            
            $phon = $this->request()->post('tel');
            $firstname = $this->request()->post('first_name');
            $password = $this->request()->post('password');
            $conpassword = $this->request()->post('conpassword');
            $lastname = $this->request()->post('last_name');
           
            if( $phon == false){
              App::session()->set('tel','Неверный номер');
            }
            
            if( $firstname == false){
                App::session()->set('name','Запишите ваше имя');
            }
            
            if( $lastname == false){
                App::session()->set('surname','Запишите вашу фамилию');
            }
            
            $isset_phone = $model->select()->where([ 'phone' =>  $phon,]) ->one();

            if($isset_phone == false){    
                if( !empty($phon) && isset($phon)){
                    if(strlen($password)>6){   
                        if( $password == $conpassword){
                            $password = password_hash($password, PASSWORD_DEFAULT);


                                $newpass =  $this->generate_pass(6);
                                header('Content-Type: text/html; charset=utf-8');
                                $message = "Vash kod podtverjdeniya : $newpass";
                            
                                $ch = curl_init("https://sms.ru/sms/send");
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                curl_setopt($ch, CURLOPT_TIMEOUT, 30);
                                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
                                    "api_id" => " 9AC4459E-7849-E654-5F30-AA634FF57BAE",
                                    "to" => $phon, // До 100 штук до раз
                                    "msg" => iconv("windows-1251", "utf-8", $message  ),
                                            //  "test"=> 1,    //esli snyat koment sms stanet platnim
                                            // Если приходят крякозябры, то уберите iconv и оставьте только "Привет!",
                                            /*
                                            // Если вы хотите отправлять разные тексты на разные номера, воспользуйтесь этим кодом. В этом случае to и msg нужно убрать.
                                            "multi" => array( // до 100 штук за раз
                                                "79255070602"=> iconv("windows-1251", "utf-8", "Привет 1"), // Если приходят крякозябры, то уберите iconv и оставьте только "Привет!",
                                                "74993221627"=> iconv("windows-1251", "utf-8", "Привет 2") 
                                            ),
                                            */
                                            "json" => 1 // Для получения более развернутого ответа от сервера
                                )));
                                $body = curl_exec($ch);
                                curl_close($ch);
                                $json = json_decode($body);
                                if ($json) { // Получен ответ от сервера
                                // print_r($json); // Для дебага
                                    if ($json->status == "OK") { // Запрос выполнился
                                        foreach ($json->sms as $phone => $data) { // Перебираем массив СМС сообщений
                                            if ($data->status == "OK") { // Сообщение отправлено
                                        //    echo "Сообщение на номер $phone успешно отправлено. ";
                                        //    echo "ID сообщения: $data->sms_id. ";
                                            //    echo "";
                                            } else { // Ошибка в отправке
                                                echo "Сообщение на номер $phone не отправлено. ";
                                                echo "Код ошибки: $data->status_code. ";
                                                echo "Текст ошибки: $data->status_text. ";
                                                echo "";
                                            }
                                        }
                                    // echo "Баланс после отправки: $json->balance руб.";
                                    //  echo "";
                                    } else { // Запрос не выполнился (возможно ошибка авторизации, параметрах, итд...)
                                    echo "Запрос не выполнился. ";      
                                    echo "Код ошибки: $json->status_code. ";
                                    echo "Текст ошибки: $json->status_text. ";
                                    }
                                } else { 
                                    echo "Запрос не выполнился. Не удалось установить связь с сервером. ";
                                }
                                $userRegistered = $model->insert([
                                'first_name' => $firstname,
                                'last_name'  => $lastname,
                                'phone'      => $phon,
                                'password'   => $password,
                                'code'       => $newpass,
                                'emailcode'  => $newpass
                                ]);
                                        
                                if(isset($userRegistered) && !empty($userRegistered)){
                                    $_SESSION['user_phone'] = $phon;
                                    $user_phone= $_SESSION['user_phone'];
                                    $cookie_name = "user_phon";
                                    $cookie_value = $phon;
                                    setcookie($cookie_name, $cookie_value, time() + (3600), "/");
                                    $_COOKIE["user_phone"] = $cookie_value;
                                    //App::session()->set('user_phone', $phon);
                                    //   $userphone  = App::session()->get("user_phone");
                                    if(isset($user_phone) && !empty($user_phone)){ 
                                    header("location:/users/confirmation");exit();                            
                                    // $this->redirect('users/confirmation');
                                    }
                                }
                            }else{
                                App::session()->set('conpass','Пароли не совпадают');
                            }
                        }else{
                            App::session()->set('passlength','Пароль слишком короткий');
                        }  
                    }else{
                       App::session()->set('tel_empty','Телефон обязателен');
                    }
             }else{
                App::session()->set('tel_isset','Tакой телефон уже зарегистрирован');
            }
        }
        $this->render("register");
    }

    public function loginAction(){
        $user    = new Users();
        $profile = new Profile();
        if( !empty($_POST) && isset($_POST['submit'])){
        // if($this->request()->post('submit')){
            $phone      = $this->request()->post('tel');
            $password   = $this->request()->post('password');
            $isset_user = $user->select()->where([ 'phone' =>  $phone,]) ->one();
            if(($isset_user['status'] === '0') || ($isset_user == false)){
                App::session()->set('user_empty','Вы не зарегистрированы');
            }else{
                if($user->login($phone,$password)){
                    $opros1 = $profile->select()->where([ 'user_id' =>  $isset_user['id'],'metta_value' => "opros1_ok" ]) ->all();
                    $opros2 = $profile->select()->where([ 'user_id' =>  $isset_user['id'],'metta_value' => "opros2_ok" ]) ->all();
                    $opros3 = $profile->select()->where([ 'user_id' =>  $isset_user['id'],'metta_value' => "opros3_ok" ]) ->all();
                    $this->redirect('admin/interview4');
                    if($opros1 == false){
                        $this->redirect('admin/interview1');
                       // header('Location: /admin/interview1');
                    } elseif ($opros2 == false) {
                        $this->redirect('admin/interview2');
                    } elseif ($opros3 == false) {
                        $this->redirect('admin/interview3');
                    }elseif($opros1 && $opros2 && $opros3){
                        $this->redirect('admin/interview4');
                    }
                }
            }
        }
        $this->render("users/login");
    }


    public function profileAction(){

        $model  = new Users();
        $this->render("admin/dashbord",[
            'user' => $model->getMe()
        ]);

    }

    public function logoutAction(){
       App::session()->destroy();
        //header("Location: $_SERVER[HTTP_REFERER]");
        $this->redirect("users/login");
    }

   public function confirmationAction(){
    
        // $_SESSION['userId'] = 'dwdwdwd';
        //  header("location:/admin/interview1");exit();
        // if($this->request()->post('submit')){
       
        if( !empty($_POST) && isset($_POST['submit'])){
            // $model = new Users();
            $user             = new Users();
            $confirmation_cod = $this->request()->post('confirmation_cod');
            $code             = $user->select()->where([ 'code' =>  $confirmation_cod,]) ->one();
            $userphone        = App::session()->get("userphone");
            $password         = $code['password'];
            $phone            = $code['phone'];
            
            if(!empty($code)){
                if( $code['status'] == '0' ){
                    $statusupdate = $user->update([ 'status' => '1'])-> where( ['id' => $code['id']]);
                    if(isset($statusupdate)&& !empty($statusupdate)){
                        $_SESSION['userId'] = $code['id'];
                        header("location:/admin/interview1");exit();
                    }
                }else{
                    App::session()->set('foocode','Неверный код');
                }
            }else{
               App::session()->set('foocode','Неверный код');
            }
        }
    
        $this->render("confirmation");

    }

    public function confirmationemailAction(){
        $this->render("confirmationemailcode");
    }

    public function getConfirmEmailRequestAction() {           
        $user_phone =  $_COOKIE["user_phone"];
        $user       = new Users();
        $code       = $user->select()->where([ 'phone' =>  $user_phone,]) ->one();
        $newpass    =$code['emailcode'];
        
        if($_POST['submit'] && isset($_POST['email']) ){
            $email   = $_POST['email'];
            $subject = 'Код подтверждение ECONGAME.RU';
             
            if(isset($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){ 
                 $headers = 'From: paruyr.kirakosyan1995@gmail.com ' . "\r\n" .
                 'Reply-To: paruyr.kirakosyan1995@gmail.com '. "\r\n" .
                 'X-Mailer: PHP/' . phpversion();
               // mail($email,$subject,$newpass,$headers);
                if( mail($email,$subject,$newpass,$headers)){
                    $this->redirect("users/emailconfirmation");
                }else{
                    $this->redirect('users/confirmationemail');
                    App::session()->set('email_foo','Некорректный Email');   
                }
            // $this->render("confirmationemailcode");
            }
        }
    }
    
    
    
    public function emailconfirmationAction(){
        $user_phone =  $_COOKIE["user_phone"];
        $user       = new Users();
        $email_kode = $this->request()->post('code');
           
        if($_POST['submit'] && isset($_POST['code']) ){
            $code = $user->select()->where([ 'phone' =>  $user_phone, 'emailcode' => $email_kode, ]) ->one();
            if(isset($code) && !empty($code) && $code['status'] == '0'){
                $statusupdate = $user->update([ 'status' => '1'])-> where( ['id' => $code['id']]);
                if(isset($statusupdate)&& !empty($statusupdate)){
                    $_SESSION['userId'] = $code['id'];
                    header("location:/admin/interview1");exit();
                }else{
                    App::session()->set('foocodess','Неверный код');
                    $this->redirect('users/emailconfirmation');
                }
            }else{
                App::session()->set('foocodes','Введите проверочный код');
                $this->redirect('users/emailconfirmation');
            }
        }
        $this->render("emailconfirmation");
    }
    


    public function generate_pass($number)  {  
        $arr = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9'); 
        $pass = "";  
        for($i = 0; $i < $number; $i++){  
            $index = rand(0, count($arr) - 1);  
            $pass .= $arr[$index];  
        }  
        return $pass;  
    }

    public function changepassAction(){

        $model              = new Users();
        $profile            = new Profile();
        if($this->request()->post('submit')){
            $code           = $this->request()->post('code');
            $password       = $this->request()->post('password');
            $conpassword    = $this->request()->post('conpassword');

            if($password == $conpassword && !empty($code ) && isset($code)){
            // $password       = crypt($password);
                $user_pass_cod  = $profile->select()->where(['metta_value' =>  $code,]) ->one(); 
                $user_id        = $user_pass_cod['user_id'];
                $code_id        = $user_pass_cod['id'];

                if(!empty($user_pass_cod)){
                    $user_password_change  = $model->update([ 'password' => crypt($password)])-> where( ['id' =>  $user_id ]);
                    if($user_password_change){
                        $pass_delete = $profile->delete()-> where( ['id' => $code_id]);
                        $this->redirect("users/login");
                    }else{
                        echo 'frfr';
                    }
                }
            }
        }
        $this->render("changepass");  
    }

  public function  emailcodeAction(){

    $model = new Users();
    $profile = new Profile();
    if($this->request()->post('submit')){
         $newpass     = $this->generate_pass(8);
         $email       = $this->request()->post('email');
         $user_email  = $profile->select()->where(['metta_value' =>  $email,]) ->one(); 
         $userId      = $user_email['user_id'];
         $subject     = 'Новый пароль';
        if($user_email){ 
            $user_new_pass_insert = $profile->insert([
                'user_id'     => $userId,
                'metta_key'   => 'pass_verfic_cod',
                'metta_value' =>  $newpass  ,
                ]); 
                $headers = 'From: paruyr.kirakosyan1995@gmail.com ' . "\r\n" .
                'Reply-To: paruyr.kirakosyan1995@gmail.com '. "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            mail($email,$subject,$newpass,$headers);
            if( mail($email,$subject,$newpass,$headers)){
                $this->redirect("users/changepass");
            }
        }else{
          //  App::session()->set('falseemail','Неверный Email');
        }
    }
    $this->render("emailcode");  
  }
}

