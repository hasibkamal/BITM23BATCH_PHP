<?php

class Super_admin {
    
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
    public function save_category_info($data) {
        $sql="INSERT INTO tbl_category (category_name, category_description, publication_status) VALUES ('$data[category_name]', '$data[category_description]', '$data[publication_status]')";
        if(mysqli_query($this->db_connect, $sql)) {
            $message="Waoooo category info save successfully";
            return $message;
        } else {
            die('Query problem'.  mysqli_error($this->db_connect) );
        }
    }
    public function select_all_category_info() {
        $sql="SELECT * FROM tbl_category";
        if(mysqli_query($this->db_connect, $sql)) {
            $query_result=mysqli_query($this->db_connect, $sql);
            return $query_result;
            
        } else {
            die('Query problem'.  mysqli_error($this->db_connect) );
        }
    }
    public function unpublished_category_by_id($category_id) {
        $sql="UPDATE tbl_category SET publication_status= 0 WHERE category_id='$category_id' ";
        if(mysqli_query($this->db_connect, $sql)) {
            $meassage="Category info unpublished successfully";
            return $meassage;
        } else {
            die('Query problem'.  mysqli_error($this->db_connect) );
        }
    }
    public function published_category_by_id($category_id) {
        $sql="UPDATE tbl_category SET publication_status= 1 WHERE category_id='$category_id' ";
        if(mysqli_query($this->db_connect, $sql)) {
            $meassage="Category info published successfully";
            return $meassage;
        } else {
            die('Query problem'.  mysqli_error($this->db_connect) );
        }
    }
    public function select_category_info_by_id($category_id) {
        $sql="SELECT * FROM tbl_category WHERE category_id='$category_id' ";
        if(mysqli_query($this->db_connect, $sql)) {
            $query_result=mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem'.  mysqli_error($this->db_connect) );
        }
    }
    public function update_category_info($data) {
        $sql="UPDATE tbl_category SET category_name='$data[category_name]', category_description='$data[category_description]' , publication_status='$data[publication_status]' WHERE category_id='$data[category_id]' ";
        if(mysqli_query($this->db_connect, $sql)) {
            
            $_SESSION['message']='Category info update successfully';
            
            header('Location: manage_category.php');
        } else {
            die('Query problem'.  mysqli_error($this->db_connect) );
        }
    }
    public function delete_category_by_id($category_id) {
        $sql="DELETE FROM tbl_category WHERE category_id='$category_id' ";
        if(mysqli_query($this->db_connect, $sql)) {  
            $message="Category info delete successfully";
            return $message;
        } else {
            die('Query problem'.  mysqli_error($this->db_connect) );
        }
    }

    





































    public function logout() {
        
        unset($_SESSION['admin_name']);
        unset($_SESSION['admin_id']);
        
        header('Location: index.php');
    }
}
