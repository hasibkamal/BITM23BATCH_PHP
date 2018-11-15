<?php 
echo '<pre>';
print_r($_POST);
print_r($_FILES);

$directroy = 'assets/front_end_assets/images/';
$target_file = $directroy.$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
echo 'Target File Is : '.$target_file.'<br>';
$file_type = pathinfo($target_file,PATHINFO_EXTENSION);
echo 'File Type is '.$file_type.'<br>';

$file_size = $_FILES['image']['size'];
echo 'File size is : '.$file_size;

$check = getimagesize($_FILES['image']['tmp_name']);
echo '<pre>';
print_r($check);

?>

<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Image Name : </td>
            <td><input type="text" name="image_name"></td>
        </tr>
        <tr>
            <td>Image </td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Save Me"></td>
        </tr>
    </table>
</form>