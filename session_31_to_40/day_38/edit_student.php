<?php
require 'student.php';
$obj_student = new Student();

//if(isset()){
//    
//}
//    


if(isset($_POST['btn'])){
    $message = $obj_student->save_student_info($_POST);
}


$student_info = $obj_student->select_student_info_by_id($student_id);

$data = $student_info->fetch(PDO::FETCH_ASSOC);
extract($data);

?>



<hr/>
<a href="add_student.php">Add Student</a> ||
<a href="view_student.php">View Student</a>
<hr/>
<hr/>
<?php if(isset($message)){echo $message; unset($message);} ?>
<hr/>

<form action="" method="post">
    <fieldset>
        <legend>Add Student Form</legend>
        <table border="1" width="400" align="center">
            <tr>
                <td>Student Name</td>
                <td>
                    <input value="<?php echo $student_name; ?>" type="text" name="student_name" required>
                </td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td>
                    <input type="number" value="<?php echo $phone_number; ?>" name="phone_number" required>
                </td>
            </tr>
            <tr>
                <td>Email Address</td>
                <td>
                    <input type="email" value="<?php echo $email_address; ?>" name="email_address" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn" value="SAVE INFO"></td>
            </tr>
        </table>
    </fieldset>
</form>