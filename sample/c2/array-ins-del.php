<?php
$a = [1,2,3];

$a[] = 4;

array_push($a,5);

array_unshift($a,0);

print_r($a);

$v1 = array_shift($a);

echo $v1 ."\n";

$v2 = array_pop($a);

echo $v2. "\n";
print_r($a);

$b=[0,1,2,3,4,5];
$sub = array_slice($b,2,3);
print_r($b);
print_r($sub);

$a = [1,2,3,4,5,10,11,12];

$result = array_filter($a, function($v){
    return ($v % 2 == 1);
});
print_r($result);

$a = [1,11,111,1111];

$res = array_map(function($v){
    return ($v * 2);
},$a);

print_r($res);