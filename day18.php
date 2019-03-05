<?php
function exam($num)
{
    //十进制转换为二进制
    $a = decbin($num);
    $b = 0;
    for ($i=0; $i < strlen($a); $i++) { 
        if($a[$i] == 1){
            $b++;
        }
    }
    echo $b;
}
exam(11);
?>