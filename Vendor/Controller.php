<?php
abstract class Controller{
    public $layout = 'main';
    public $admin = 'admin';
    public $products = 'products';

    public function indexAction(){
    }

    public function redirect($url){
        App::redirect($url);
    }

    public function render($view,$params = []){

        ob_start();
        $this->renderPartial($view,$params);
        
        $content = ob_get_clean();
        if(file_exists(LAYOUTS.$this->layout.".php")){
            include(LAYOUTS.$this->layout.".php");
        }else{
            throw new Exception("Layout File is not found");
        }


    }
    
    public function render_admin($view,$params = []){

        ob_start();
        $this->renderPartial($view,$params);
        
        $content = ob_get_clean();
        if(file_exists(ADMINS.$this->admin.".php")){
            include(ADMINS.$this->admin.".php");
        }else{
            throw new Exception("Layout File is not found");
        }


    }


    public function render_products($view,$params = []){
        ob_start();
        $this->renderPartial($view,$params);
        
        $content = ob_get_clean();
        if(file_exists(PRODUCTS.$this->products.".php")){
            include(PRODUCTS.$this->products.".php");
        }else{
            throw new Exception("Layout File is not found");
        }

    }


    public function render_product($view,$params = []){

        ob_start();
        $this->renderPartial($view,$params);
        
        $content = ob_get_clean();
        if(file_exists(PRODUCTS.$this->products.".php")){
             include(PRODUCTS.$this->products.".php");
        }else{
            throw new Exception("Layout File is not found");
        }


    }


    public function render_company($view,$params = []){

        ob_start();
        $this->renderPartialCompany($view,$params);
        
        $content = ob_get_clean();

        if(file_exists(COMPANY.$this->company."shops.php")){
             include(COMPANY.$this->company."shops.php");
        }else{
            throw new Exception("Layout File is not found");
        }


    }


    public function renderPartialCompany($view,$params = []){
        $viewArray = explode('/',$view);
        extract($params);

        $viewFile = VIEWS.$view.'.php';

        if(count($viewArray) == 1){
            $viewFile = VIEWS.App::$currentController.DIRECTORY_SEPARATOR.$view.'.php';
        } 
        
        if(file_exists($viewFile)){
            include_once($viewFile);
            exist();
        }else{
            throw new Exception("View File not found");
        }

    }

    public function renderPartial($view,$params = []){
        $viewArray = explode('/',$view);
        extract($params);

        $viewFile = VIEWS.$view.'.php';
        if(count($viewArray) == 1){
           
            $viewFile = VIEWS.App::$currentController.DIRECTORY_SEPARATOR.$view.'.php';
        } 
        if(file_exists($viewFile)){
            include_once($viewFile);
        }else{
            throw new Exception("View File not found");
        }

    }

    public function session(){
        return App::session();
    }

    public function request(){
        return App::request();
    }



}