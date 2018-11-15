<?php
    $page = 0;
    if(isset($_GET['page'])){
        if($_GET['page'] == 1){
            $page = 0;
        }else{
            $page = $_GET['page']*5-5;
        }
    }
    
    
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'db_hasib';
    
    $conn = mysqli_connect($host, $user, $pass, $db_name);
    
    if($conn){
        $sql = "SELECT * FROM tbl_student LIMIT $page,5";
        if(mysqli_query($conn, $sql)){
            $query = mysqli_query($conn, $sql);
        }
    }else{
        die('Query problem : '.  mysqli_error($conn));
    }
    
    
    


?>

<html>
    <head>
        <title>Data</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    </head>
    <body>
        <div class="container" style="padding-top: 25px;">
            <table class="table table-bordered" border="1">
            <tr>
                <th colspan="4">Student Information</th>
            </tr>
            <tr>
                <td>Student ID</td>
                <td>Student Name</td>
                <td>Phone Number</td>
                <td>Email Address</td>
            </tr>
            <?php while($student_info = mysqli_fetch_assoc($query)){ ?>
            <tr>
                <td><?php echo $student_info['student_id']; ?></td>
                <td><?php echo $student_info['student_name']; ?></td>
                <td><?php echo $student_info['phone_number']; ?></td>
                <td><?php echo $student_info['email_address']; ?></td>
            </tr>
            <?php } ?>
        </table>
        </div>
        <div class="container">
            <?php 
           $sql = "SELECT * FROM tbl_student";
           if(mysqli_query($conn, $sql)){
                $query = mysqli_query($conn, $sql);
           }
           $total_row = mysqli_num_rows($query);
           $total_page = ceil($total_row/5);
           
           for($i=1; $i<=$total_page; $i++){
               ?>
            <a class="btn btn-primary" href="?page=<?php echo $i; ?>" style="text-decoration: none;"><?php echo $i.' '; ?></a>   
                   
                <?php
           }
           
           ?>
        </div>
            
           
        
    </body>
</html>