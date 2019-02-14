<?php
function exam($num){
    //获取百位上的数
    $baiwei = floor($num/100);
    //获取十位上的数
    $shiwei = floor($num/10)%10;
    //获取个位上的数
    $gewei = floor($num%10);
    // echo "百位上的数是:$baiwei,十位上的数是:$shiwei,个位上的数是:$gewei";
    $sum = ($baiwei*$baiwei*$baiwei)+($shiwei*$shiwei*$shiwei)+($gewei*$gewei*$gewei);
    //判断是否是水仙花数
    if($num == $sum){
        echo "是水仙花数";
    }
    else{
        echo "不是水仙花数";
    }
}
exam(153);
?>