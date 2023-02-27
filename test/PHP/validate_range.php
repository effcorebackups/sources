<?php

namespace effcore;

var_dump( core::validate_range('-1', '1', '0.000002', '-2') === false );
var_dump( core::validate_range('-1', '1', '0.000002', '-1') === true );
var_dump( core::validate_range('-1', '1', '0.000002',  '0') === true );
var_dump( core::validate_range('-1', '1', '0.000002',  '1') === true );
var_dump( core::validate_range('-1', '1', '0.000002',  '2') === false );

var_dump( core::validate_range('-1', '1', '0.000003', '-2') === false );
var_dump( core::validate_range('-1', '1', '0.000003', '-1') === true );
var_dump( core::validate_range('-1', '1', '0.000003',  '0') === false );
var_dump( core::validate_range('-1', '1', '0.000003',  '1') === true );
var_dump( core::validate_range('-1', '1', '0.000003',  '2') === false );

# ◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦

$f_min  = '-1.0';
$f_max  =  '1.0';
$f_step =  '0.000003';
$i_min  = -1000000;
$i_max  = +1000000;
$i_step = +3;

for ($i = 0; $i < 1000000; $i++) {
    $c_f_value = bcmul($i, '0.000001', 6);
    $c_result_i = core::validate_range($f_min, $f_max, $f_step, $c_f_value);
    $c_result_f = core::validate_range($i_min, $i_max, $i_step, $i);
    $c_result_alternative = (($i - $i_min) % $i_step) === 0;
    if ($c_result_i !== $c_result_alternative ||
        $c_result_f !== $c_result_alternative) {
        print $c_f_value.' | result f = '.          ($c_result_i           ? '#' : '-').
                         ' | result i = '.          ($c_result_f           ? '#' : '-').
                         ' | result alternative = '.($c_result_alternative ? '#' : '-').nl;
    }
}
