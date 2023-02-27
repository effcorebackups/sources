<?php

namespace effcore;

var_dump( core::data_stringify(-1       ) === '-1'        );
var_dump( core::data_stringify(-1.1     ) === '-1.1'      );
var_dump( core::data_stringify(0.0000001) === '0.0000001' );
var_dump( core::data_stringify(123e1    ) === '1230'      ); # exponential notation
var_dump( core::data_stringify(0x123    ) === '291'       ); # hexadecimal notation
var_dump( core::data_stringify(01234    ) === '668'       ); # octal notation
var_dump( core::data_stringify(0b101    ) === '5'         ); # binary notation
var_dump( core::data_stringify('а123'   ) === "'а123'"    );
var_dump( core::data_stringify('123а'   ) === "'123а'"    );
var_dump( core::data_stringify(true     ) === 'true'      );
var_dump( core::data_stringify(false    ) === 'false'     );
var_dump( core::data_stringify(null     ) === 'null'      );

print nl.nl;

# array
var_dump(
    core::data_stringify([
         100,
        '200',
        'item3' =>  300,
        'item4' => '400',
        'item5' => 'value500'
    ]) === "[".
        "0 => 100, ".
        "1 => '200', ".
        "'item3' => 300, ".
        "'item4' => '400', ".
        "'item5' => 'value500']"
);

# object
var_dump(
    core::data_stringify((object)[
        'prop1' =>  100,
        'prop2' => '200',
        'prop3' => 'value300'
    ]) === "(object)[".
        "'prop1' => 100, ".
        "'prop2' => '200', ".
        "'prop3' => 'value300']"
);

# array with object
var_dump(
    core::data_stringify([
         100,
        '200',
        'item3' => (object)['prop1' =>  1, 'prop2' => '2', 'prop3' => 'value3'],
        'item4' => '400',
        'item5' => 'value500'
    ]) === "[".
        "0 => 100, ".
        "1 => '200', ".
        "'item3' => (object)['prop1' => 1, 'prop2' => '2', 'prop3' => 'value3'], ".
        "'item4' => '400', ".
        "'item5' => 'value500']"
);

# object with array
var_dump(
    core::data_stringify((object)[
        'prop1' =>  1,
        'prop2' => '2',
        'prop3' => [100, '200', 'item3' => '300', 'item4' => 'value400'],
        'prop4' => 'value4'
    ]) === "(object)[".
        "'prop1' => 1, ".
        "'prop2' => '2', ".
        "'prop3' => [0 => 100, 1 => '200', 'item3' => '300', 'item4' => 'value400'], ".
        "'prop4' => 'value4']"
);
