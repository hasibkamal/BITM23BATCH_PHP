<?php
class DB_Connect{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'db_hasib';
    
    protected $connection;
    
    public function __construct() {
        $this->connection = mysqli_connect($this->host,  $this->user, $this->pass,  $this->db);
        if(!$this->connection){
            die('Connection Problem'.mysqli_error($this->connection));
        }
    }
    
    public function save_image($path){
        $sql = "INSERT INTO tbl_image(image_url) VALUES('$path')";
        if(mysqli_query($this->connection, $sql)){
            echo "Image Saved Successfully";
        }
    }
    
    public function view_image(){
        $sql = "SELECT * FROM tbl_image";
        $query = mysqli_query($this->connection, $sql);
        return $query;
    }
}

$obj_img = new DB_Connect();

$query_result = $obj_img->view_image();






if(isset($_POST['btn'])){
    echo '<pre>';
print_r($_POST);
print_r($_FILES);



echo '<br>';

//echo $_FILES['image']['name'];
$directroy = 'images/';
$target_file = $directroy.$_FILES['image']['name'];

$file_type = pathinfo($target_file,PATHINFO_EXTENSION);

$file_size = $_FILES['image']['size'];
$image = getimagesize($_FILES['image']['tmp_name']);

if($image){
    if(file_exists($target_file)){
        echo 'This image is already exist';
        exit();
    }else{
        if($file_size>=5242880){
            echo 'File size is too large. Please Select a file within 5MB';
            exit();
        }else{
            if($file_type != 'jpg' && $file_type != 'png'){
                die('File type is not valid');
            }else{
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                echo 'Image UPLOADED SUCCESSFULLY';
                $obj_img->save_image($target_file);
            }
        }
    }
}else{
    echo 'This is not an Image';
    exit();
}

print_r($image);
echo $file_type;
echo $file_size;
//move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
}
?>



<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Image Name</td>
            <td><input type="text" name="image_name"></td>
        </tr>
        <tr>
            <td>Image </td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="SAVE ME"></td>
        </tr>
    </table>
</form>



<table>
    <tr>
        <td>Image Id</td>
        <td>Image URL</td>
    </tr>
    <?php while($row = mysqli_fetch_assoc($query_result)){ ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><image src="<?php echo $row['image_url']; ?>" height="100" width="100" /></td>
    </tr>
    <?php } ?>
</table>