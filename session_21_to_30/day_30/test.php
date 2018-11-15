<form action="" method="post" enctype="multipart/form-data">
Select Image
<input type="file" name="photo">
<input type="submit" value="upload" name="upload">
</form>


<?php
if(isset($_POST['upload'])){
	echo '<pre>';
	print_r($_FILES);
	echo '</pre>';
	$dir = 'images';
	
//	echo number_format($_FILES['image']['size']/1024/1024,2,'.','');

	$source = $_FILES['photo']['tmp_name'];
//	$destination = $dir.'/1.jpg';
	$destination = $dir.'/'.$_FILES['photo']['name'];
	
	copy($source,$destination);
	echo "<img src='$destination' width='250'/>";
}

//float
//ceil
//round

?>