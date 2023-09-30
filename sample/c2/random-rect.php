<html><body style="font-size:32px; line-height:32px">
<?php
$colors = array("red", "blue", "yellow", "green", "black");

for($i=0; $i < 256; $i++){
    $r = rand(0, count($colors) - 1);
    $c = $colors[$r];
    echo "<span style='color:$c'>▪️</sapn>";
    if($i % 16 == 15) echo "<br>";
}
?>
</body></html>