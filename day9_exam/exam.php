<?php
function exam($arr){
    //应用基数算法
    //生成0~9个桶 下标为0~9
    $t = [];
    for ($i=0; $i < 10; $i++) { 
        $t[] = [];
    }
    // print_r($t);
    //取出数组中最大的值
    $max = max($arr);
    //取出最大值的位数
    $max_len = strlen($max);
    //数组的长度
    $count = count($arr);
    for ($i=0; $i < $max_len; $i++) { 
        $pow = pow(10,$i); //10的几次方 
        for ($j=0; $j < $count; $j++) { 
            //求出该数 个十百位上的数字  然后进行对比
            $num = floor($arr[$j] / $pow) %10;
            //将相应的数字放到对应下标的桶里面
            $t[$num][] = $arr[$j];
        }
        $arr1 = [];
        //循环遍历该数组
        for ($k=0; $k < 10; $k++) { 
            $arr1[] = $t[$k];
            $arr1 = [];
        }
    }
    print_r($arr1);
}
exam([3,32,321])
?>