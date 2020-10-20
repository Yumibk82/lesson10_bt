<?php

function selectionSort($list)
{
    for ($i = 0; $i < count($list) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($list); $j++) {
            if ($list[$j] < $list[$min]) {
                $min = $j;
            }
        }
        $list = swap_pos($list, $i, $min);
    }
    return $list;
}

function swap_pos($data, $left, $right)
{
    $backup_old_data_right_value = $data[$right];
    $data[$right] = $data[$left];
    $data[$left] = $backup_old_data_right_value;
    return $data;
}
$test=array(1, 9, 4.5, 6.6, 5.7, -4.5);
echo "Origin array :\n";
echo implode(',',$test);
echo "\nSorted array :\n";
echo implode(',',selectionSort($test));