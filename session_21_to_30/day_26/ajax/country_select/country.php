<?php
$con = mysqli_connect('localhost', 'root');
if($con){
    mysqli_select_db($con, 'country_select');
}else{
    die('Database server not connected'.  mysqli_error($con));
}

$sql = "SELECT * FROM tbl_country";
$query_result = mysqli_query($con, $sql)


?>
<script type="text/javascript">



          if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                
            }
            
            
            
function selectCity(given_text)
 {
	//alert(given_text);
        //var obj = document.getElementById(objID);
        serverPage='city.php?id='+given_text;
	xmlhttp.open("GET", serverPage);
	xmlhttp.onreadystatechange = function()
	 {
	//alert(xmlhttp.readyState);
	//alert(xmlhttp.status);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
			//alert(xmlhttp.responseText);
                        document.getElementById('city').innerHTML = xmlhttp.responseText;
			//document.getElementById(objcw).innerHTML = xmlhttp.responseText;
		 }
	}
    xmlhttp.send(null);
}


function selectVillage(given_text)
 {
	//alert(given_text);
        //var obj = document.getElementById(objID);
        serverPage='village.php?city_id='+given_text;
	xmlhttp.open("GET", serverPage);
	xmlhttp.onreadystatechange = function()
	 {
	//alert(xmlhttp.readyState);
	//alert(xmlhttp.status);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
			//alert(xmlhttp.responseText);
                        document.getElementById('city1').innerHTML = xmlhttp.responseText;
			//document.getElementById(objcw).innerHTML = xmlhttp.responseText;
		 }
	}
    xmlhttp.send(null);
}




 
</script>
<select onchange="selectCity(this.value);">
    <option>Select Country</option>
    <?php 
    while($row = mysqli_fetch_assoc($query_result)){
        ?>
    <option value="<?php echo $row['country_id']; ?>"><?php echo $row['country_name']; ?></option>
        <?php
    }
    ?>
</select>

<select id="city" onchange="selectVillage(this.value)">
    <option>Select City</option>
</select>

<select id="city1">
    <option>Select</option>
</select>