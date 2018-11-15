<?php 
if(isset($_POST['btn'])){
    require 'student.php';
    $obj_student = new Student();
    
    $message = $obj_student->save_student_info($_POST);
}

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
                    <input type="text" name="student_name" required>
                </td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td>
                    <input type="number" name="phone_number" required>
                </td>
            </tr>
            <tr>
                <td>Email Address</td>
                <td>
                    <input type="email" name="email_address" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn" value="SAVE INFO"></td>
            </tr>
        </table>
    </fieldset>
</form>