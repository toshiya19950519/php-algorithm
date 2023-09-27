<?php

require_once 'queue.class.php';

$q = new Queue();
$q->enqueue("Panda");
$q->enqueue("Toger");
$q->enqueue("Bird");

while ($q->length() > 0) {
    $e = $q->dequeue();
    echo "[$e]\n";
}