<?php 

$city_id = $_GET['city_id'];


$con = mysqli_connect('localhost', 'root');
if($con){
    mysqli_select_db($con, 'country_select');
}else{
    die('Database server not connected'.  mysqli_error($con));
}


$sql = "SELECT * FROM tbl_village WHERE city_id = '$city_id'";
$query_result = mysqli_query($con, $sql);

?>
<option>Select City</option>
<?php 
while ($row = mysqli_fetch_assoc($query_result)){
    ?>
<option value="<?php echo $row['village_id']; ?>"><?php echo $row['village_name']; ?></option>
    <?php
}

?>

