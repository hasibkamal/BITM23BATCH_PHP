<?php 

    require 'student.php';
    $obj_student = new Student();
    
    $student_info = $obj_student->select_all_student_info();
    


?>



<hr/>
<a href="add_student.php">Add Student</a> ||
<a href="view_student.php">View Student</a>
<hr/>
<hr/>

<hr/>


    <fieldset>
        <legend>View Student Form</legend>
        <table border="1" width="400" align="center">
            <tr>
                <td>Student id</td>
                <td>Student Name</td>
                <td>Phone Number</td>
                <td>Email Address</td>
                <td>Action</td>
            </tr>
            <?php while($row = $student_info->fetch(PDO::FETCH_ASSOC)){ ?>
            <tr>
                <td><?php echo $row['student_id']; ?></td>
                <td><?php echo $row['student_name']; ?></td>
                <td><?php echo $row['phone_number']; ?></td>
                <td><?php echo $row['email_address']; ?></td>
                <td>
                    <a href="edit_student.php?id=<?php echo $row['student_id']; ?>">Edit</a> || <a href="">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </fieldset>

<a href="">1</a>


<?php 
           $sql = $student_info;
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