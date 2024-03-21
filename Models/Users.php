<?php
// session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
class Users extends Model{  
    public function __construct()
    {
        parent::__construct();
      //  session_start();
    }

    public function login($phone,$password, $use_psw = true ){
        $user = $this->select()->where(['phone' => $phone,])->one();
        if(!empty($user)){
           if ($use_psw === true) {
                if(password_verify($password,$user["password"])){
                    $_SESSION['userId'] = $user['id'];
                    App::session()->set('userId',$user['id']);
                    return true;
                }else{    
                    App::session()->set('pass_false','Пароль не верый');
                }
            } else {
                $_SESSION['userId'] = $user['id'];
             // App::session()->set('userId',$user['id']);
                return true;
            }
        }
        return false;
    }
    
    public function loginsms($phone){App::session()->set('userId',$user['id']);
        $user = $this
            ->select()
            ->where([
                'phone' => $phone,
            ])
            ->one();
            
        if($user){
            return true;
        }
        
        return false;
    }
    
    public function getMe(){
        $me = $this
            ->select()
            ->where([
                'id' => App::session()->get('userId'),
            ])
            ->one();
        if(!$me){
            $this->redirect('users/login');
        }
       return $me;
    }
    
    public function getInchvorBardData(){
        $data = $this->query("SELECT * ");
    }

}