<?php
$arr = array(
    array(
        'id' => 1,
        'name' => "ruma",
        'district' => "munshiganj"
    ),
    array(
        'id' => 2,
        'name' => "isha",
        'district' => "barisal"
    ),
    array(
        'id' => 1,
        'name' => "heea",
        'district' => "savar"
    )
);

print_r(array_column($arr, 'district', 'id'));
