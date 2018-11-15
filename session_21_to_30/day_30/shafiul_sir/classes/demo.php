<?php


class Demo extends Utility{
    public function add(){
        echo "In Add Method";
        $this->mul();
    }
    
    protected function sub(){
        echo "In Sub Method";
    }
    
    private function mul(){
        echo "In Add Method";
    }
}