<?php 
//$name = array('Hasib','Kamal','Chowdhury','Jakir');
//echo implode('', $name);

?>






<?php 
if(isset($_POST['btn'])){
echo '<pre>';
print_r($_POST);
print_r($_FILES);
echo '<br/>';
$directory = "photo/";
$target_file = $directory.$_FILES['image']['name'];
$file_type=pathinfo($target_file,PATHINFO_EXTENSION);
$file_sise = $_FILES['image']['size'];
$image = getimagesize($_FILES['image']['tmp_name']);

if($image){
   if (file_exists($target_file)) {
      echo 'This image already exist';
      exit();
   }  else {
      if ($file_sise>5242880) {
         echo 'file size too large';
         exit();
      }  else {
         if (!$file_type =='jpg' || !$file_type=='png') {
            echo 'file type not valid';
            exit();
         }  else {
            move_uploaded_file($target_file, $directory);
            exit();
         }
      }
   }
   
}
}


?>
<form method="post" action="" enctype="multipart/form-data">
   <table>
      <tr>
         <td>Name:</td>
         <td><input type="text" name="image_name"></td>
      </tr>
       <tr>
         <td>Image</td>
         <td><input type="file"  name="image" multiple=""></td>
      </tr>
       <tr>
         <td></td>
         <td><input type="submit"  name="btn" value="submit"></td>
      </tr>
   </table>
   
   
   
</form>