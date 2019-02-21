<?php
function exam($n,$m){
    //如果只有一个人那么该小朋友的下标为0
    if($n == 1){
        return 0;
    }
    for ($i=2; $i <$n ; $i++) { 
        $a = ($m+$n)%$i;
    }
    echo $a;
}
exam(8,2);
?>