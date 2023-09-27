<?php
require_once 'ringbuffer.class.php';

$rb = new RingBuffer(5);

$rb->append("A is Apple");
$rb->append("B is buy");
$rb->append("C is code");
$rb->append("D is discode");
$rb->append("E is end");
$rb->append("F is flight");
$rb->append("G is good");

for($i=0; $i<10; $i++){
    $log = $rb->get($i);
    echo "[$log]\n";
}