<?php
 
function quick_sort(&$arr){
    if(count($arr) < 2) return $arr;

    $left = $right = array();
    $pivot = array_shift($arr);

    foreach($arr as $val){
        if($val < $pivot){
            $left[] = $val;
        }else{
            $right[] = $val;
        }
    }
    quick_sort($left);
    quick_sort($right);

    $arr = array_merge($left,array($pivot),$right);
}

$arr = array(1,100,24,40,12,4);
quick_sort($arr);
echo implode(',',$arr)."\n";