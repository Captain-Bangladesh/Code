<?php

function binarySearch($needle, $array){
    $low = 0;
    $high = count($array) - 1;

    while ($low <= $high) {
        $mid = intval(($low + $high)/ 2);
        $guess = $array[$mid];
        if ($guess == $needle) return $mid;

        if ($guess < $needle) $low = $mid + 1;

        if ($guess > $needle) $high = $mid - 1;
    }
    
    return NULL;
}

echo binarySearch(9,[1,3,5,7,9]);

?>