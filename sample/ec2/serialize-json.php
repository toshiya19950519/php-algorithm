<?php

$data = [
    'Taro' => [
        'age' => 30, 
        'hobby'=> [
            'Guitar','Piano'
            ]
        ],
    'Take' => [
        'age' => 22, 
        'hobby'=> [
            'Pain','Game'
            ]
        ]
];

$file = "selealize-test.json";

$str = json_encode($data, JSON_PRETTY_PRINT);

file_put_contents($file,$str);

$str2 = file_get_contents($file);
$data2 = json_decode($str2,true);

print_r($data2['Take']['hobby']);