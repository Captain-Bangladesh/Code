<?php
function fact($x)
{
    if ($x === 1) {
        return 1;
    }
    return $x * fact($x - 1);
}

echo fact(4);

/*
5 * 5-1 = 120
4	4-1 = 24
3	3-1 = 6
2	2-1 = 2
1	
*/
?