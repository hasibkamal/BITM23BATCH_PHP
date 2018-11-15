<?php
    require 'classes/application.php';
    $obj_app=new Application();
    
        $client_email = $_GET['email'];
        $query_result = $obj_app->customer_email_check($client_email);
        $check_email = mysqli_fetch_assoc($query_result);
        if($check_email){
            echo 'Email Exist';
        }  else {
            echo 'Email Available';
}
    




?>