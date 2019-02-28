<?php
function exam($arr,$n)
{
    $arr1 = [];
    for ($i=0; $i < count($arr); $i++) { 
        for ($j=1; $j < count($arr); $j++) { 
            $sum = $arr[$i] + $arr[$j];
            if(count($arr1) > 2){
                break;
            }
            if($sum == $n){
                $arr1[] = $arr[$i] * $arr[$j];               
            }
            
        }
    }
    print_r($arr1);
}
exam([1,2,3,4,5],3);
?>