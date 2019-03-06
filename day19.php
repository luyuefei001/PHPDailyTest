<?php 
	function exam($arr,$num)
	{
		//折半查找
		$frist = 0;  //首元素下标
		$last = count($arr); //尾元素下标
		while($frist <= $last){
			$mid = ($frist+$last)/2;
			if($num > $arr[$mid]){
				$frist = $mid + 1;
			}
			elseif($num < $arr[$mid])
			{
				$last = $mid - 1;
			}
			else{
				return $mid;
			}
		}
	}
	echo exam([1,2,3,4,5,6],2);
 ?>