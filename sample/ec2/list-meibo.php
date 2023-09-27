<?php

$meibo = array();

$person = array(
    "name" => "Nami",
    "age" => 18
);
array_push($meibo, $person);

$person = array(
    "name" => "Takahisa",
    "age" => 28
);

array_push($meibo, $person);

$r = rand(0, count($meibo) - 1);
$p = $meibo[$r];
echo "name:". $p["name"]."\n";
echo "age:". $p["age"]."\n";