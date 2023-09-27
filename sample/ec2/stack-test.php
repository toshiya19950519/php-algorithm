<?php

require_once 'stack.class.php';

$t = new Stack();

$t->push("panda");
$t->push("tiger");
$t->push("zou");

while($v = $t->pop()){
    echo "[$v]\n";
}