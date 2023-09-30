<?php

function comb_sort(&$arr){
    $gap = $size = count($arr);
    $swap = true;
    while ($gap  > 1 || $swap){
        var_dump($gap);
        if($gap > 1) {
            $gap = floor($gap / 1.25);
        }

        $swap=false;
        $i=0;

        while ($i + $gap < $size){
            //var_dump($arr[$i]);
            //var_dump($arr[$i + $gap]);
            if($arr[$i] > $arr[$i + $gap]){
                $tmp = $arr[$i];
                $arr[$i] = $arr[$i + $gap];
                $arr[$i + $gap] = $tmp;
                $swap = true;
            }
            $i++;
        }
    }
}

$arr = array(43,1,3,20,93,21);
comb_sort($arr);
echo implode(",", $arr). "\n";
