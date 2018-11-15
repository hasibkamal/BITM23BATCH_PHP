<?php 

$country_id = $_GET['id'];


$con = mysqli_connect('localhost', 'root');
if($con){
    mysqli_select_db($con, 'country_select');
}else{
    die('Database server not connected'.  mysqli_error($con));
}


$sql = "SELECT * FROM tbl_city WHERE country_id = '$country_id'";
$query_result = mysqli_query($con, $sql);

?>
<option>Select City</option>
<?php 
while ($row = mysqli_fetch_assoc($query_result)){
    ?>
<option value="<?php echo $row['city_id']; ?>"><?php echo $row['city_name']; ?></option>
    <?php
}

?>

