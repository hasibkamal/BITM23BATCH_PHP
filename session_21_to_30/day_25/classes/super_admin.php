<?php

class Supper_admin{
    public function __construct() {
        
    }
    
    public function logout(){
        unset($_SESSION['admin_name']);
        unset($_SESSION['admin_id']);
        header('location:index.php');
    }
}