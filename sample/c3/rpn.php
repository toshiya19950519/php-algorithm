<?php
$rpn = isset($_GET['rpn']) ? $_GET['rpn'] : "1 2 3 * +";
$history = '';
$answer = calcRPN($rpn);

function calcRPN($str){
    global $history;

    $tokens = preg_split('#\s+#',trim($str));
    $stack = [];

    foreach($tokens as $key => $val){
        if(preg_match('#^[0-9\.]+$#',$val)){
            $stack[] = floatval($val);
            addHistory($stack, "$val: push");
            continue;
        }

        $b = array_pop($stack);
        $a = array_pop($stack);

        switch($val){
            case '+': $c = ($a + $b); break;
            case '-': $c = ($a - $b); break;
            case '*': $c = ($a * $b); break;
            case '/': $c = ($a / $b); break;
            case '%': $c = ($a % $b); break;
            default:
                return "error";
        }

        $stack[] = $c;
        addHistory($stack, "$val: pop $a $b, push $c");
    }

    return array_pop($stack);
}

function addHistory($stack, $desc){
    global $history;
    $line = "<td>$desc</td>"."<td>[".implode(",", $stack)."]</td>";
    $history .= "<tr>".$line."</tr>";
}

$rpn_ = htmlentities($rpn, ENT_QUOTES);
echo <<< EOS

<!DOCTYPE html><meta charset="utf-8">
<form>
    RPN: <input name="rpn" value="$rpn_" size="30"><br>
    <input type=submit value="計算">
</form><hr>
<div>答え: $answer</div><hr>
<table><tr><td>操作</td><td>スタック</td></tr>
$history</table>
EOS;