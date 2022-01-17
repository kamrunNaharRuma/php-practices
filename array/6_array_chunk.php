<?php
$array = array("one", "two", "three");

$chunked = array_chunk($array, 2);

print_r($chunked[0]);
