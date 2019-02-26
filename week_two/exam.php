<?php
// function exam1($n,$m){
//     //自动生成1~n的编号
//     $boys = range(1,$n);
//     //数到的数值
//     $k = 0;
//     $arr = [];
//     $i = 0;
//     while(count($boys) > 1){
//         //如果数组中的下标不存在
//         if(!isset($boys[$i])){
//             $boys = $arr;
//             //清空$arr数组
//             $arr = [];
//             //从1继续开始
//             $i = 0;
//         }
//         $k++;
//         if($k == $m){
//             unset($boys[$i]);
//             $k = 0;
//         }else{
//             $arr[] = $boys[$i];
//         }
//         $i++;
//     }
//     print_r($boys);
// }
// exam1(3,1);
// function exam2($arr){
//     //从大到小排序
//     rsort($arr);
//     // print_r($arr);
//     //取出三个最大值存放到数组中
//     $array = [
//         [array_shift($arr)],
//         [array_shift($arr)],
//         [array_shift($arr)]
//     ];
//     for ($i=0; $i < count($arr); $i++) { 
//         $array[2][] = $arr[$i];
//         $sum = array_sum($array[2]);
//         if($sum > array_sum($array[0])){
//             $array = [
//                 $array[2],
//                 $array[0],
//                 $array[1]
//             ];
//         }
//         else if($sum > array_sum($array[1])){
//             $array = [
//                 $array[0],
//                 $array[2],
//                 $array[1]
//             ];
//         }
//     }
//     print_r($array);
// }
// exam2([10,20,15,18,25]);
// function exam3($arr){
//     $count = count($arr);
//     for ($i=0; $i < $count; $i++) { 
//         for ($j=0; $j < $count-1; $j++) { 
//             if($arr[$i].''.$arr[$j] > $arr[$j].''.$arr[$i]){
//                 //互换位置
//                 $temp = $arr[$i];
//                 $arr[$i] = $arr[$j];
//                 $arr[$j] = $temp;
//             }
//         }
//     }
//     print_r(implode('',$arr));
// }
// exam3([12,25,31]);
function exam4($active_time,$process_time)
{
    $window = [];
    //等待时间
    $wait_time = 0;
    //到达人数
    $count = count($active_time);
    for ($i=0; $i < $count; $i++) { 
        if(count($window) < 4){
            //就将到达时间里面的一个人拿出来
            $window = $active_time + $process_time;
            continue;
        }
        //将数组排序
        rsort($window);
        //取出最先离开人的时间
        $bye_user = array_shift($window);
        // print_r($bye_user);
        //如果最先离开人的时间 大于 下一个到达人的时间
        if($bye_user > $active_time[$i]){
            // print_r($bye_user);die;
            $wait_time += ($bye_user - $active_time[$i]);
            $now_user_time = $bye_user + $process_time[$i];
        }
        else{
            $now_user_time = $active_time[$i] + $process_time[$i];
        }
        $window = $now_user_time;
        // print_r($wait_time);die;
    }
    print_r($wait_time / $count);
}
exam4([9.01, 9.10, 9.20, 9.21, 9.22],[0.30, 0.18, 0.22, 0.47, 0.11]);
// class Exam{
//     //私有的静态变量
//     private static $Ins;
//     private static $db;
//     //私有的构造方法
//     private function __conructed($config){
//         list($ip,$dbname,$username,$pwd) = $config;
//         self::$Ins = new PDO("mysql:host=$ip;dbname=$dbname",$username,$pwd);
//     }
//     //私有的克隆方法
//     private function __clone(){

//     }

//     public function __getIns(...$config)
//     {
//         if(!self::$Ins instanceof self){
//             return self::$Ins =  new Exam;
//         }
//         return self::$Ins;
//     }

//     public function create()
//     {
//         $sql = "INSERT INTO `mysql`values(null,'12','12','12')";
//         return self::db->exec($sql);
//     }
//     public function select()
//     {
//         $sql = "select from `mysql`";
//         return self::db->query($sql);
//     }
//     public function delete()
//     {
//         $sql = "delete from `mysql` where id = 1";
//         return self::db->exec($sql);
//     }
//     public function delete()
//     {
//         $sql = "update `mysql` set  `` = '1' where id = 1";
//         return self::db->exec($sql);
//     }

// }
// $db1 = this->__getIns(['59.110.152.46','mysql','root','luliuliu666']);
?>