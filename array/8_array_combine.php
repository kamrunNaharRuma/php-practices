<?php
$name = array("ruma", "heea", "isha");
$birthdays =  array(12, 15, 20);

$combined = array_combine($name, $birthdays);

print_r($combined);
