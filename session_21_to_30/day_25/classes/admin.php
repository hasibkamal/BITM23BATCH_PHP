<?php 
class Admin{
    protected $db_connect;
    public function __construct() {
        $host_name = 'localhost';
        $user_name = 'root';
        $user_pass = '';
        $db_name = 'db_ecommerce';
        
        $this->db_connect = mysqli_connect($host_name, $user_name, $user_pass, $db_name);
    
        if(!$this->db_connect){
            die('Connection Fail : '. mysqli_error($db_connect));
        }
    }
    
    public function admin_login_check($data){
        $email_address = $data['email_address'];
        $password = $data['password'];
//        $password = md5($data['password']);
        
        $sql = "SELECT * FROM tbl_admin WHERE admin_address = '$email_address' AND password='$password'";
        if(mysqli_query($this->db_connect, $sql)){
            $query_result = mysqli_query($this->db_connect, $sql);
            $admin_info = mysqli_fetch_assoc($query_result);
            
//            echo '<pre>';
//            print_r($admin_info);
//            exit();
            
            if($admin_info){
                session_start();
                $_SESSION['admin_name'] = $admin_info['admin_name'];
                $_SESSION['admin_id'] = $admin_info['admin_id'];
                
                header('location:../admin/admin_master.php');
            }else{
                $message = 'Input valid info';
                return $message;
            }
        }else{
            die('Query Problem : '.  mysqli_error($this->db_connect));
        }
    }
}

?>