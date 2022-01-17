<?php
//comparing the values 
$a1 = array("1" => "ruma", "4" => "nahar");
$a2 = array("2" => "knr", "3" => "ruma");

$result = array_diff($a2, $a1);

print_r($result);
