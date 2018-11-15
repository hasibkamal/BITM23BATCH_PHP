<?php

class Application {
    //put your code here
    private $db_connect;
    public function __construct() {
        $host_name='localhost';
        $user_name='root';
        $password='';
        $db_name='db_ecommerce';
        $this->db_connect=mysqli_connect($host_name, $user_name, $password, $db_name);
        if(!$this->db_connect) {
            die('Connection Fail'.  mysqli_error($this->db_connect) );
        }
    }
    public function select_all_published_category_info() {
        $sql='SELECT * FROM tbl_category WHERE publication_status=1';
        if(mysqli_query($this->db_connect, $sql)) {
           $query_result=mysqli_query($this->db_connect, $sql);
           return $query_result;
        }else {
            die('Query problem'.  mysqli_error($this->db_connect) );   
        }
    }
    public function select_all_published_manufacturer_info() {
        $sql='SELECT * FROM tbl_manufacturer WHERE publication_status=1';
        if(mysqli_query($this->db_connect, $sql)) {
           $query_result=mysqli_query($this->db_connect, $sql);
           return $query_result;
        }else {
            die('Query problem'.  mysqli_error($this->db_connect) );   
        }
    }
    
    
    
}
