<?php
function selectionSort($array)
{
    for ($i = 0; $i < count($array) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$j] < $array[$min]) {
                $min = $j;
            }
        }
        if ($min != $i) {
            $temp = $array[$i];
            $array[$i] = $array[$min];
            $array[$min] = $temp;
        }
    }
    return $array;
}

$array1 = array(7,3,9,5,11,20,13,17);
echo implode(', ', $array1) . "<br>";
echo implode(', ', selectionSort($array1));