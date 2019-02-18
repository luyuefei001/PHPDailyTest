<?php
//一:编写一个程序，实现1+2+3+...+100的和；
function exam1(){
    $sum = 0;
    for ($i=1; $i <=100 ; $i++) { 
        $sum += $i;
    }
    return $sum;
}
// echo exam1();
//二:编写一个程序，实现N的阶乘，公式为：N! = N *（N-1）*（N-2）*...*1
function exam2($number){
    $sum = $number;
    for ($i=1; $i <$number ; $i++) { 
        $sum *= ($number-$i);
    }
    return $sum;
}
// echo exam2(1);
//三:输入一个字符串,判断是否是回文字符串
function exam3($str){
    $len = strlen($str);
    $res = '';
    for ($i=$len-1; $i >=0 ; $i--) { 
        $res .= $str[$i];
    }
    for ($i=0; $i <=floor($len/2)-1 ; $i++) { 
        if($str[$i] != $res[$i]){
            echo "不是回文字符串";
            return false;
        }
    }
    echo "是回文字符串";
    return true;
}
// exam3('abcba');
//四:排序算法:冒泡排序
function exam4($arr){
    $count = count($arr);
    // echo $count;
    for ($i=1; $i <=$count ; $i++) { 
        for ($k=0; $k <$count-$i ; $k++) { 
            //如果前一个大于后一个 那么就互换位置
            if($arr[$k]>$arr[$k+1]){
                $arr[$k] = $arr[$k] ^ $arr[$k+1];
                $arr[$k+1] = $arr[$k] ^ $arr[$k+1];
                $arr[$k] = $arr[$k] ^ $arr[$k+1];
            }
        }
    }
    print_r($arr);
}
// exam4([2,1,5,4,3]);
//五:排序算法:快速排序
//没做出来
function exam5($arr){
    if(count($arr)<=1){
        return $arr;
    }
    //定义一个中间值
    $middle = $arr[0];
    //定义两个数组 一个为小于中间值的数组 另一个为大于中间的数组
    $left = [];
    $right = [];
    for ($i=1; $i <count($arr) ; $i++) { 
        if($arr[$i] > $middle){
            //如果大于中间值
            $right[] = $arr[$i]; 
        }
        else{
            $left[] = $arr[$i];
        }
    }
    $left = exam5($left);
    $right = exam5($right);
    return array_merge($left,[$middle],$right);

}
// print_r(exam5([2,1,5,4,3]));
//六:水仙花
function exam6($num){
    $sum = 0;
    //分别获取百位、十位、个位上的数字
    $baiwei = floor($num/100);
    $shiwei = floor($num/10)%10;
    $gewei = floor($num%10);
    // echo "百位:$baiwei,十位:$shiwei,个位:$gewei";
    $sum = ($baiwei*$baiwei*$baiwei)+($shiwei*$shiwei*$shiwei)+($gewei*$gewei*$gewei);
    if($num == $sum){
        echo "是水仙花数";
    }
    else{
        echo "不是水仙花数";
    }
}
// exam6(153);
//七:a)银行有四个柜台，给定两个数组，一个是用户到达的时间，一个是用户办理业务耗费的时间，求所有用户平均等待的时间
function exam7($daoda,$banli){
    $window = [];
    // print_r($daoda);
    //谁先到的给谁安排柜台
    $count = count($daoda);
    //等待时间
    $wait_time = 0;
    for ($i=0; $i <$count ; $i++) { 
        if(count($window) < 4){
            $window[] = $daoda[$i]+$banli[$i];
            //结束本次循环
            continue;
        }
        //来到这里意思就是窗口已经沾满啦
        sort($window); //将用户离开的时间从小到大排序
        $live_user = array_shift($window); //取出最先离开的用户时间
        if($live_user > $daoda[$i]){
            //如果离开的用户的时间大于下一个用户到达的时间
            //获取用户等待的时间
            $wait_time += $live_user - $daoda[$i];
            //将新到达的用户的离开时间 放入窗口
            $now_user_time = $live_user + $banli[$i];
        }
        else{
            $now_user_time = $daoda[$i]+$banli[$i];
        }
        $window[] = $now_user_time;
    }
    return $wait_time / $count($window);
}
// exam7([1550282454,1550278854,1550279154,1550280654,1550284254],[300,600,1200,60,1800]);
//八:8、给定一个数字，将之转换为对应的英文字母 1=a; 2=b; 26=z; 27=aa; 52=az, 53=ba
function exam8($num){
    $arr = range('a','z');
    // print_r($arr);
    $count = count($arr);
    $list = [];
    while($num){
        $tmp = floor($num/$count); //商
        $rem = $num % $count; //余数
        if($rem == 0){
            $tmp--;
            array_unshift($list,$arr[$count - 1]);
        }
        else{
            array_unshift($list,$arr[$rem - 1]);
        }
        $num = $tmp;
    }
    echo implode('',$list);
}
exam8(702);	
?>