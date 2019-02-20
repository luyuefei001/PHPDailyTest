<?php
function exam($num){
    $n = $num/2;
    if(floor($n) - $n != 0){
        //不是整数那么就 除以3试试
        $n = $n/3;
        if(floor($n) - $n != 0){
            //不是整数那么就 除以5试试
            $n = $n/5;
            if(floor($n) - $n != 0){
                echo "非丑数";
            }
            else{
                if($n == 1){
                    echo "丑数";
                }
                else{
                    exam($n);
                }
            }
        }
        else{
            if($n == 1){
                echo "丑数";
            }
            else{
                exam($n);
            }
        }         
    }
    else{
        if($n == 1){
            echo "丑数";
        }
        else{
            exam($n);
        }
    }
}
exam(4);
?>