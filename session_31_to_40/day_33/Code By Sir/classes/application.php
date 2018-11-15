<?php

class Application {
    //put your code here
    private $db_connect;
    public function __construct() {
        $host_name='localhost';
        $user_name='root';
        $password='';
        $db_name='db_seip_ecoomerce23_and_24';
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
    public function select_all_recent_product_info() {
        $sql='SELECT * FROM tbl_product WHERE publication_status=1';
        if(mysqli_query($this->db_connect, $sql)) {
           $query_result=mysqli_query($this->db_connect, $sql);
           return $query_result;
        }else {
            die('Query problem'.  mysqli_error($this->db_connect) );   
        }
    }
    public function select_published_product_by_category_id($category_id) {
        $sql="SELECT * FROM tbl_product WHERE category_id='$category_id' AND publication_status=1";
        if(mysqli_query($this->db_connect, $sql)) {
           $query_result=mysqli_query($this->db_connect, $sql);
           return $query_result;
        }else {
            die('Query problem'.  mysqli_error($this->db_connect) );   
        }
    }
    public function select_product_info_by_id($product_id) {
        $sql="SELECT p.*, c.category_name, m.manufacturer_name FROM tbl_product as p, tbl_category as c, tbl_manufacturer as m WHERE p.category_id=c.category_id AND p.manufacturer_id=m.manufacturer_id AND p.product_id='$product_id' ";
        if(mysqli_query($this->db_connect, $sql)) {
           $query_result=mysqli_query($this->db_connect, $sql);
           return $query_result;
        }else {
            die('Query problem'.  mysqli_error($this->db_connect) );   
        }
    }
    public function add_product_to_cart($data) {
        $product_id=$data['product_id'];
        $product_quantity=$data['product_quantity'];
        $sql="SELECT product_name, product_price, product_image FROM tbl_product WHERE product_id='$product_id' ";
        $query_result=mysqli_query($this->db_connect, $sql);
        $product_info=mysqli_fetch_assoc($query_result);
        session_start();
        $session_id=session_id();
        $sql="INSERT INTO tbl_temp_cart (session_id, product_id, product_name, product_price, product_quantity, product_image) VALUES ('$session_id', '$product_id', '$product_info[product_name]', '$product_info[product_price]', '$product_quantity', '$product_info[product_image]')";
        mysqli_query($this->db_connect, $sql);
        header('Location: cart.php');
    }
    public function select_cart_product_by_session_id($session_id) {
        $sql="SELECT * FROM tbl_temp_cart WHERE session_id='$session_id' ";
        if(mysqli_query($this->db_connect, $sql)) {
           $query_result=mysqli_query($this->db_connect, $sql);
           return $query_result;
        }else {
            die('Query problem'.  mysqli_error($this->db_connect) );   
        }
    }
    public function update_cart_product_by_temp_cart_id($data) {
        $sql="UPDATE tbl_temp_cart SET product_quantity='$data[product_quantity]'  WHERE temp_cart_id='$data[temp_cart_id]' ";
        if(mysqli_query($this->db_connect, $sql)) {
           $message="Your cart product info update successfully";
           return $message;
        }else {
            die('Query problem'.  mysqli_error($this->db_connect) );   
        }
    }
    public function delete_cart_product_by_temp_cart_id($temp_cart_id) {
         $sql="DELETE FROM tbl_temp_cart WHERE temp_cart_id='$temp_cart_id' ";
        if(mysqli_query($this->db_connect, $sql)) {
           $message="Your cart product info delete successfully";
           return $message;
        }else {
            die('Query problem'.  mysqli_error($this->db_connect) );   
        }
    }
    
    
    
}
