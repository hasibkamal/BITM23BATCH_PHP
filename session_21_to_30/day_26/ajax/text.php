<?php
$text = $_GET['text'];
//for($a=1; $a<=$text; $a++){
//    echo $a.'<br>';
//}

//$data = array('php','css','ajax','javascript');
//if(in_array($text, $data)){
//    echo "Found";
//}  else {
//    echo 'Not Found';
//}

//$data = array('@','$','*','/');
//for($i=1; $i<=$text; $i++){
//    $dex = rand(0, 3);
//    echo $data[$dex];
//}

$data = array('hkc');
if(in_array($text, $data)){
    echo 1;
}else{
    echo 2;
}


//Email Address alredy exists
//'Email Address are available';