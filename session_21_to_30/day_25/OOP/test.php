<!--Class : Logical Template of a project which holds number of methods and property.
Object : Instance Of a Class.-->


<?php 
class mycls{
    public $name;
    public function test_fun(){
        return $this->name = "HKC";
    }
}

    $obj = new mycls();

    echo $obj->test_fun();

?>