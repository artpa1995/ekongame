<?php

class Request
{


    public function get($key = null){
        $newGet = [];
        if($key){
            if(isset($_GET[$key])){
                return $this->sanitize($_GET[$key]);
            }else{
                return false;
            }
        }else{
            foreach ($_GET as $key => $value){
                $newGet[$key] = $this->sanitize($value);
            }
        }
        return $newGet;

    }

    public function post($key = null) {
        $newPost = [];
        if($key) {
            if(isset($_POST)) {
                return $this->sanitize($_POST[$key]);
            } else return false;
        } else {
            foreach ($_POST as $key => $value) {
                $newPost[$key] = $this->sanitize($value);
            }
            return $newPost;
        }
    }

    private function sanitize($str){
        $str = htmlspecialchars($str);
        $str = addslashes($str);
        return $str;
    }

}