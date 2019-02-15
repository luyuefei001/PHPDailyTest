<?php
//递归方法
function exam($num){
    if($num == 0){
        return 0;
    }

    if($num == 1 || $num == 2){
        return 1;
    }

    return exam($num-1)+exam($num-2);
}
// echo exam(4);
//非递归方法
function exam1($num){
    $arr = [];
    if($num == 0){
        return 0;
    }

    if($num == 1 || $num == 2){
        return 1;
    }
    //第一个与第二个都为1
    $arr[0] = $arr[1] = 1;
    for ($i=2; $i <=$num-1 ; $i++) { 
        $arr[$i] = $arr[$i-1]+$arr[$i-2];
    }
    return $arr[$num-1];
}

echo exam1(6);
//效率比较  自我感觉递归方法效率更高一点
?>