<?php
$given_text = $_GET['text'];
$con = mysqli_connect('localhost', 'root');
if($con){
    mysqli_select_db($con, 'db_seip_php23');
}else{
    die('Database server not connected'.  mysqli_error($con));
}
if($given_text == null){
    echo 'Please write something';
    $sql = "SELECT * FROM tbl_student_info";
    $query_result = mysqli_query($con, $sql);
}else{
    $sql = "SELECT * FROM tbl_student_info WHERE student_name LIKE '%$given_text%'";
    $query_result = mysqli_query($con, $sql);
}

?> 

<table align="center" border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($query_result)){
        ?>
    <tr>
        <td><?php echo $row['student_id']; ?></td>
        <td><?php echo $row['student_name']; ?></td>
        <td><?php echo $row['student_email']; ?></td>
        <td><?php echo $row['student_phone']; ?></td>
    </tr>
            
            
        <?php
        
    } ?>
    
</table>