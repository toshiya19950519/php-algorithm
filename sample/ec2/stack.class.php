<?php

class stack{
    private $stack = array();

    public function push($v){
        $this->stack[] = $v;
    }

    public function pop(){
        return array_pop($this->stack);
    }

    public function length(){
        return count($this->stack);
    }
}