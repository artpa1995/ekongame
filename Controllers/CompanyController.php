<?php 
use Users;
use Product;
use Orders;
use Profile;

class CompanyController  extends Controller {

    public function indexAction(){

        $product      = new Product();
        $model2       = new Users();
        $profile      = new Profile();
        $company_name = $_SERVER['company_name'];
        $userIds       = $profile->select()->where([ 'metta_key' => 'project_adres','metta_value' =>  $company_name,]) ->one();
        $userId       = $userIds['user_id'];
       
        if(empty($userId)) {
            // show page ssilka ne pravilnaya
            $this->redirect("error/error");
        }
        $users       = $model2->select()->where([ 'id' =>   $userId,]) ->one();
        $products    = $product->select()->where([ 'user_id' =>   $userId,]) ->all(); 
         
        $this->render_company("shops", ['users' => $users, 'products' => $products, 'current_page' => 'shops', 'userId' => $userId]);  
    }

}