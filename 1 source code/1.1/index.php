<?php
    for($y=5;$y>0;$y--){
        for($x=1;$x<=5;$x++){
            $d= $y-$x;
            if($d <= 0){
                echo"O";
            }else{
                echo"<font color='white'>O</font>";
            }
        }
        echo"<br>";
    }
?>