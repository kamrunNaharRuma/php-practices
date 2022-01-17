<?php
$not_filtered_array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
function returnsEven($arr)
{
    return ($arr % 2 === 0);
}

$filtered_array = array_filter($not_filtered_array, "returnsEven");


print_r($filtered_array);
