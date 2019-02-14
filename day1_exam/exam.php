<?php
function exam($string){
    $len = strlen($string);
    $arr = [];
    for($i=0;$i<$len;$i++){
       if(isset($arr[$string[$i]])){
           $arr[$string[$i]]++;
       }
       else{
           $arr[$string[$i]] = 1;
       }

       if($arr[$string[$i]] == 3){
          echo $string[$i]; break;
       }
    }
}

exam('Have you ever gone shopping and');
?>