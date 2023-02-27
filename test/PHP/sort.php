<?php

namespace effcore;

$test = [
    'a' => ['weight' =>  4],
    'b' => ['weight' => 10],
    'c' => ['weight' => 10],
    'd' => ['weight' => 10],
    'e' => ['weight' =>  4],
];
$test_result = [
    'b' => ['weight' => 10],
    'c' => ['weight' => 10],
    'd' => ['weight' => 10],
    'a' => ['weight' =>  4],
    'e' => ['weight' =>  4],
];

core::array_sort_by_weight($test, 'weight', 'a');
print_R($test);
var_dump($test === $test_result);

$test = [
    'a' => ['weight' =>  4],
    'b' => ['weight' => 10],
    'c' => ['weight' => 10],
    'd' => ['weight' => 10],
    'e' => ['weight' =>  4],
];
$test_result = [
    'a' => ['weight' =>  4],
    'e' => ['weight' =>  4],
    'b' => ['weight' => 10],
    'c' => ['weight' => 10],
    'd' => ['weight' => 10],
];

core::array_sort_by_weight($test, 'weight', 'd');
print_R($test);
var_dump($test === $test_result);
