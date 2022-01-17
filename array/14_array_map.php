<?php

$arr = array(1, 2, 3, 4, 5, 6, 7);
function array_to_be_mapped($var)
{
    return $var * 10;
};

$new_arr = array_map("array_to_be_mapped", $arr);

print_r($arr);
print_r($new_arr);
