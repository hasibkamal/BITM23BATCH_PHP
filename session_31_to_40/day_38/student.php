<?php 

class Student{
    protected $db_connect;
    public function __construct() {
        $host_name = 'localhost';
        $user_name = 'root';
        $password = '';
        $db_name = 'db_hasib';
        
        try{
            $this->db_connect = new PDO("mysql:host={$host_name};dbname={$db_name}",$user_name,$password);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
        
        
        //$db_connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    
    public function save_student_info($data){
        try{
            $student_info = $this->db_connect->prepare("INSERT INTO tbl_student(student_name,phone_number,email_address) VALUES(:a, :b, :c)");
            $student_info->bindParam(':a', $data['student_name']);
            $student_info->bindParam(':b', $data['phone_number']);
            $student_info->bindParam(':c', $data['email_address']);
            $student_info->execute();
            
            $message = "Saved Successfully";
            return $message;
        }  catch (PDOException $a){
            echo $a->getMessage();
        }
    }
    
    public function select_all_student_info(){
        try{
            $student_info = $this->db_connect->prepare("SELECT * FROM tbl_student");
            $student_info->execute();
            return $student_info;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
    public function select_student_info_by_id($student_id){
        try{
            $student_info = $this->db_connect->prepare("SELECT * FROM tbl_student WHERE student_id =:xyz");
            $student_info->bindParam(':xyz', $student_id);
            $student_info->execute();
            return $student_info;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}



?>