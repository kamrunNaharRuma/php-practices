<?php
$array = array("name" => "kamrun nahar ruma");
print_r(array_change_key_case($array, CASE_UPPER));

print_r(array_change_key_case(["i am agreat software engineer" => "YES 100%"], CASE_UPPER));
