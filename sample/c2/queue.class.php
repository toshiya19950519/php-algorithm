<?php

class Queue {
    private $list = array();

    public function enqueue($v){
        $this->list[]=$v;
    }

    public function dequeue(){
        return array_shift($this->list);
    }

    public function length(){
        return count($this->list);
    }
}