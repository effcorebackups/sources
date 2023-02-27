<?php

namespace effcore;

var_dump( core::exponencial_string_normalize(-1)        === -1           );
var_dump( core::exponencial_string_normalize(-1.1)      === -1.1         );
var_dump( core::exponencial_string_normalize('1234')    === '1234'       ); # normal notation      (is_numeric === true)
var_dump( core::exponencial_string_normalize('1.23e-6') === '0.00000123' ); # exponential notation (is_numeric === true)
var_dump( core::exponencial_string_normalize('4.56e-6') === '0.00000456' ); # exponential notation (is_numeric === true)
var_dump( core::exponencial_string_normalize('01234')   === '01234'      ); # octal notation       (is_numeric === true) !!! conversion to number will be incorrect
var_dump( core::exponencial_string_normalize('0b101')   === '0b101'      ); # binary notation      (is_numeric === false)
var_dump( core::exponencial_string_normalize('0x123')   === '0x123'      ); # hexadecimal notation (is_numeric === false)
var_dump( core::exponencial_string_normalize('а123')    === 'а123'       );
var_dump( core::exponencial_string_normalize('123а')    === '123а'       );
var_dump( core::exponencial_string_normalize(true)      === true         );
var_dump( core::exponencial_string_normalize(false)     === false        );
var_dump( core::exponencial_string_normalize(null)      === null         );
var_dump( core::exponencial_string_normalize([])        === []           );
