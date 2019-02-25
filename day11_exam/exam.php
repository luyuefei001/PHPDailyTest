<?php
function exam($str)
{
    $arr  = explode(' ',$str);
    
    //字符串反转
    for ($i=count($arr)-1; $i >= 0; $i--) { 
        $arr1[] = $arr[$i];
    }
    
    $str1 = implode(' ',$arr1);
    print_r($str1);
}
exam('I am a student.')
?>