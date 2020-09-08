<?php
$mid = ceil(9/2);
$midH;
$midL;
for($y=5;$y>0;$y--){
    if($y==5){
        for($x=1;$x<=9;$x++){
            if($x == $mid){
                echo"O";
            }else{
                echo"<font color='white'>O</font>";
            }
        }
        $midH = $mid+1;
        $midL = $mid-1;
    }else{
        for($x=1;$x<=9;$x++){
            if($x >= $midL && $x <= $midH){
                echo"O";
            }else{
                echo"<font color='white'>O</font>";
            }
        }
        $midH++;
        $midL--;   
    }
    echo"<br>";
}
?>