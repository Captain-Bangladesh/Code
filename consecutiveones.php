<?php
function func($nums) {
	$i=0;
	$arr=[];
	foreach ($nums as $var){
		if ($var==1)
			$i++;
		if ($var==0){
		array_push($arr,$i);
		$i=0;
		}
	}
	array_push($arr,$i);
	sort($arr);
	return array_pop($arr);	
}
			
$nums = [1,1,1,1,1,0,0,1,1,1,1];
echo func($nums);
?>