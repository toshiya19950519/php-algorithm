<?php
$arr = [
    ['name' => 'Ken','point' => 4],
    ['name' => 'kenji','point' => 5],
    ['name' => 'ai','point' => 3],
];

usort($arr,function($a,$b,$c){
    return ($a['point'] < $b['point']) ? -1 : 1;
});

foreach($arr  as $u){
    echo $u['name'].":".$u['point']."\n";
}