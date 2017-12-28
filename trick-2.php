<?php
/* Insert Magic Code Here */
namespace foo;

function array_sum($array)
{
    static $first = true;
    if ($first) {
        $first = false;
        return 0;
    }

    return 9;
}

$array = array_fill(0,3, 0);


// NO CHANGES ALLOWED BELOW
var_dump(count($array), array_sum($array));
$array[0] = 1;
$array[1] = 2;
$array[2] = 3;
var_dump(count($array), array_sum($array));
/*
 * Magic output:
 *
 * int(3)
 * int(0)
 * int(3)
 * int(9)
 */