<?php
$arr = array("key1" => "val1", "key2" => "val2");
$key = "key3";

if (array_key_exists($key, $arr)) {
    print_r("exists");
} else {
    print_r("doesnt exist");
}
