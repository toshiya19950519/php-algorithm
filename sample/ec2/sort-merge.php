<?php
function merge_sort(&$arr){
    $arr = merge_sort_split($arr);
}

function merge_sort_split($arr){
    if(count($arr) == 1) return $arr;

    $mid = floor(count($arr) / 2);
    $left = array_slice($arr,0,$mid);
    $right = array_slice($arr,$mid,count($arr));

    $left = merge_sort_split($left);
    $right = merge_sort_split($right);

    return merge_sort_merge($left, $right);
}

function merge_sort_merge($left, $right){
    $result = array();

    while(count($left) && count($right)){
        if($left[0] < $right[0]){
            $result[] = array_shift($left);
        }else{
            $result[] = array_shift($right);
        }
    }
    return array_merge($result, $left, $right);
}

$arr = array(1,100,24,2,4,40,12,4);
merge_sort($arr);
echo implode(',', $arr)."\n";