<?php

$s = trim(file_get_contents("angoubun.txt"));

for ($i=1; $i<=25; $i++) {
    $dec = decode($s, $i);
    echo $dec;
}

function makeTable($shift){
    $alp_b = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $alp_c = "abcdefghijklmnopqrstuvwxyz";
    $shift = $shift % strlen($alp_b);
    $alp_b_shift = substr($alp_b,$shift).substr($alp_b,0,$shift);
    $alp_c_shift = substr($alp_c,$shift).substr($alp_c,0,$shift);

    $table[] =0;
    for($i=0; $i < strlen($alp_b); $i++){
        $c1 = substr($alp_b, $i, 1);
        $c2 = substr($alp_b_shift, $i, 1);
        $table[$c2] = $c1;

        $c1 = substr($alp_c, $i, 1);
        $c2 = substr($alp_c_shift, $i, 1);
        $table[$c2] = $c1;
    }
    return $table;
}

function decode($str, $shift){
    $table = makeTable($shift);
    $res = '';
    for($i = 0;$i < strlen($str); $i++){
        $c = substr($str, $i, 1);
        $res .= isset($table[$c]) ? $table[$c] : $c;
    }
    return $res."\n";
}
