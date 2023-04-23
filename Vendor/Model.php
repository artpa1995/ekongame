<?php

abstract class Model{
    private $connection; 
    public $table;
    private static $instance;
    private $sql = "";
    private $count;
    private $pageSize = 10;
    public function __construct(){
        if(!$this->table){
            $this->table = lcfirst(get_class($this));
        }
        $this->connect();
    }
    
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new static();
        }
        return self::$instance;
    }
    
    private function connect(){
        
        // $config  = parse_ini_file(CONFIG."db.ini");
     
        include(CONFIG."db.ini");
        //Todo handle errors
        $this->connection = new MySqli($config["host"],$config["username"],$config["password"],$config["dbName"]);
        
    }

    /**
     * @param $table
     * @param $data
     * @return boolean
     */
    public function insert($data){
        $fieldsArr = [];
        $valuesArr = [];
        foreach($data as $key => $val){
            $fieldsArr[] = '`'.$key.'`';
            $valuesArr[] = "'".$val."'";
        }
        $fields = implode(", ",$fieldsArr);
        $values = implode(", ",$valuesArr);
        $this->sql = "INSERT INTO $this->table ($fields) VALUES ($values)";
        return $this->query();
    }
    
    public function query(){
        //return mysqli_query($this->connection,$sql);
        //Todo handle errors
        return $this->connection->query($this->sql);
    }


    public function query_sql($sql){
        
        $res  = $this->connection->query($sql);
        $data = [];
        while( $row = $res->fetch_array(MYSQLI_ASSOC) ) {
            $data[] =  $row; 
        }
        return $data ;
        // $t = $model->query_sql('  select * from users ');
    }


  
    public function update($data){
        $fieldsArr = [];
        $valuesArr = [];
        foreach($data as $key => $val){
            $fieldsArr[] = '`'.$key.'`';
            $valuesArr[] = "'".$val."'";
        }
        $fields = implode(", ",$fieldsArr);
        $values = implode(", ",$valuesArr);

        $this->sql = "UPDATE `$this->table` SET $fields = $values ";
        return $this;

    }
    public function delete(){
        $this->sql = "DELETE FROM $this->table";
        return $this;
    }
    
    public function select($data=[]){
        if($data) {
            $fieldsArr = [];
            foreach($data as $key => $val){
                $fieldsArr[] = '`'.$val.'`';
            }
            $fields = implode(", ",$fieldsArr);
        } else {
            $fields = "*";
        }
        $this->sql = "SELECT $fields FROM $this->table";

        return $this;
    } 
    
    public function where($data = []){
        $dataArr = [];
        $datas = 1;
        if($data){
            foreach($data as $key => $val){
                $dataArr[] = "`".$key."`='".$val."'";
            }
            $datas = implode(" AND ",$dataArr);
        }


        $this->sql .= " WHERE $datas";
        $row = $this->query();
        $this->count = $row->num_rows;
        return $this; 
    }
    
     public function one(){
         $this->sql .= " LIMIT 1";
         $row = $this->query();
         $data = $row->fetch_assoc();
         return $data;
    }     
    
    public function all(){
       $data = [];
        $row = $this->query();
        while($dataFetch = $row->fetch_assoc()){
            $data[] = $dataFetch;
        }
        return $data;
    }

    public function limit($limit){
        $this->sql.= " LIMIT $limit";
        return $this;
    }

    public function getLastQuery(){
        return $this->sql;
    }

    public function paginate($pageSize = 10){
        $page = 1;

        if(isset($_GET["page"])){
            $page = $_GET["page"];
        }
        $offset = ($page-1)*$pageSize;
        if($pageSize){
            $this->pageSize = $pageSize;
        }
        $limit = "$offset,$this->pageSize";
        $this->limit($limit);

        return $this->all();
    }

    public function theLinks($class = "pagination"){
        $pageCount = ceil($this->count/$this->pageSize);
        $pagination = '';
        if($pageCount > 1){
            $pagination .= '<ul class="'.$class.'">';

            for ($page=1;$page<=$pageCount;$page++){
                $pagination.='<li><a href="?page='.$page.'">'.$page.'</a></li>';
            }
            $pagination .= '</ul>';

        }

        echo $pagination;
    }

    public function redirect($url){
        App::redirect($url);
    }
}