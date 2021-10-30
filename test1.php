<?php
function func($arr) {
		foreach($arr as $key => $v){
			if ($v==0){
				array_splice($arr,-1,1);
				
				//$arr = array_fill(current($arr),1,0);
			print_r($arr);
			}
			else continue;
		}
//		print_r($arr);
}
			
$nums =[1,0,2,3,0,4,5,0];
func($nums);
?>