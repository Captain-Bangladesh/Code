<?php

   function func($arr){
      $fin_arr=[];
      $i=0;
      foreach($arr as $v){
            if ($v==0){
               array_push($fin_arr,0,0);
               $i++;
            } else 
               array_push($fin_arr,$v);
         }
         array_splice($fin_arr,-$i,$i);
      $arr=$fin_arr;
      return $fin_arr;
   }
   
   $arr = [1,0,2,3,0,4,5,0];
   echo "<pre>";
   print_r (func($arr));
   echo "</pre>";
?>
