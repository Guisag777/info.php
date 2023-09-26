<?php

function bubbleSort($arr) {
    $n = count($arr);
    $swapped = false;
    
    do {
        $swapped = false;
        
        for ($i = 0; $i < $n - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp;
                $swapped = true;
            }
        }
    } while ($swapped);
    
    return $arr;
}

$array = [64, 34, 25, 12, 22, 11, 90];
$sortedArray = bubbleSort($array);

echo "Array ordenado: ";
print_r($sortedArray);
