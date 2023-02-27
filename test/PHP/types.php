<?php

namespace effcore;

unset($var);    var_dump( isset($var) === false );
$var = null;    var_dump( isset($var) === false );
$var = true;    var_dump( isset($var) === true );
$var = false;   var_dump( isset($var) === true );
$var = 0;       var_dump( isset($var) === true );
$var = 1;       var_dump( isset($var) === true );
$var = 0.0;     var_dump( isset($var) === true );
$var = 1.0;     var_dump( isset($var) === true );
$var = '';      var_dump( isset($var) === true );
$var = '0';     var_dump( isset($var) === true );
$var = '1';     var_dump( isset($var) === true );
$var = 'X';     var_dump( isset($var) === true );
$var = [];      var_dump( isset($var) === true );
$var = [null];  var_dump( isset($var) === true );
$var = [true];  var_dump( isset($var) === true );
$var = [false]; var_dump( isset($var) === true );
$var = [0];     var_dump( isset($var) === true );
$var = [1];     var_dump( isset($var) === true );
$var = [0.0];   var_dump( isset($var) === true );
$var = [1.0];   var_dump( isset($var) === true );
$var = [''];    var_dump( isset($var) === true );
$var = ['0'];   var_dump( isset($var) === true );
$var = ['1'];   var_dump( isset($var) === true );
$var = ['X'];   var_dump( isset($var) === true );
$var = [[]];    var_dump( isset($var) === true );

print nl;

unset($var);    var_dump( empty($var) === true );
$var = null;    var_dump( empty($var) === true );
$var = true;    var_dump( empty($var) === false );
$var = false;   var_dump( empty($var) === true );
$var = 0;       var_dump( empty($var) === true );
$var = 1;       var_dump( empty($var) === false );
$var = 0.0;     var_dump( empty($var) === true );
$var = 1.0;     var_dump( empty($var) === false );
$var = '';      var_dump( empty($var) === true );
$var = '0';     var_dump( empty($var) === true );
$var = '1';     var_dump( empty($var) === false );
$var = 'X';     var_dump( empty($var) === false );
$var = [];      var_dump( empty($var) === true );
$var = [null];  var_dump( empty($var) === false );
$var = [true];  var_dump( empty($var) === false );
$var = [false]; var_dump( empty($var) === false );
$var = [0];     var_dump( empty($var) === false );
$var = [1];     var_dump( empty($var) === false );
$var = [0.0];   var_dump( empty($var) === false );
$var = [1.0];   var_dump( empty($var) === false );
$var = [''];    var_dump( empty($var) === false );
$var = ['0'];   var_dump( empty($var) === false );
$var = ['1'];   var_dump( empty($var) === false );
$var = ['X'];   var_dump( empty($var) === false );
$var = [[]];    var_dump( empty($var) === false );
 
print nl;

var_dump( is_numeric(''      ) === false );
var_dump( is_numeric('-1'    ) === true  );
var_dump( is_numeric('-1.1'  ) === true  );
var_dump( is_numeric('-1,1'  ) === false );
var_dump( is_numeric('-1 000') === false );
var_dump( is_numeric('123e1' ) === true  ); # exponential notation
var_dump( is_numeric('0x123' ) === false ); # hexadecimal notation
var_dump( is_numeric('01234' ) === true  ); # octal notation
var_dump( is_numeric('0b101' ) === false ); # binary notation
var_dump( is_numeric('а123'  ) === false );
var_dump( is_numeric('123а'  ) === false );
var_dump( is_numeric('true'  ) === false );
var_dump( is_numeric('false' ) === false );
var_dump( is_numeric('null'  ) === false );

print nl;

var_dump( is_float(''      ) === false );
var_dump( is_float('-1'    ) === false );
var_dump( is_float('-1.1'  ) === false );
var_dump( is_float('-1,1'  ) === false );
var_dump( is_float('-1 000') === false );
var_dump( is_float('123e1' ) === false ); # exponential notation
var_dump( is_float('0x123' ) === false ); # hexadecimal notation
var_dump( is_float('01234' ) === false ); # octal notation
var_dump( is_float('0b101' ) === false ); # binary notation
var_dump( is_float('а123'  ) === false );
var_dump( is_float('123а'  ) === false );
var_dump( is_float('true'  ) === false );
var_dump( is_float('false' ) === false );
var_dump( is_float('null'  ) === false );

print nl;

var_dump( is_int(''      ) === false );
var_dump( is_int('-1'    ) === false );
var_dump( is_int('-1.1'  ) === false );
var_dump( is_int('-1,1'  ) === false );
var_dump( is_int('-1 000') === false );
var_dump( is_int('123e1' ) === false ); # exponential notation
var_dump( is_int('0x123' ) === false ); # hexadecimal notation
var_dump( is_int('01234' ) === false ); # octal notation
var_dump( is_int('0b101' ) === false ); # binary notation
var_dump( is_int('а123'  ) === false );
var_dump( is_int('123а'  ) === false );
var_dump( is_int('true'  ) === false );
var_dump( is_int('false' ) === false );
var_dump( is_int('null'  ) === false );

print nl;

var_dump( intval(''      ) === 0    );
var_dump( intval('-1'    ) === -1   );
var_dump( intval('-1.1'  ) === -1   );
var_dump( intval('-1,1'  ) === -1   );
var_dump( intval('-1 000') === -1   );
var_dump( intval('123e1' ) === 1230 ); # exponential notation
var_dump( intval('0x123' ) === 0    ); # hexadecimal notation
var_dump( intval('01234' ) === 1234 ); # octal notation
var_dump( intval('0b101' ) === 0    ); # binary notation
var_dump( intval('а123'  ) === 0    );
var_dump( intval('123а'  ) === 123  );
var_dump( intval('true'  ) === 0    );
var_dump( intval('false' ) === 0    );
var_dump( intval('null'  ) === 0    );

print nl;

var_dump( floatval(''      ) === 0.0    );
var_dump( floatval('-1'    ) === -1.0   );
var_dump( floatval('-1.1'  ) === -1.1   );
var_dump( floatval('-1,1'  ) === -1.0   );
var_dump( floatval('-1 000') === -1.0   );
var_dump( floatval('123e1' ) === 1230.0 ); # exponential notation
var_dump( floatval('0x123' ) === 0.0    ); # hexadecimal notation
var_dump( floatval('01234' ) === 1234.0 ); # octal notation
var_dump( floatval('0b101' ) === 0.0    ); # binary notation
var_dump( floatval('а123'  ) === 0.0    );
var_dump( floatval('123а'  ) === 123.0  );
var_dump( floatval('true'  ) === 0.0    );
var_dump( floatval('false' ) === 0.0    );
var_dump( floatval('null'  ) === 0.0    );

print nl.nl;

var_dump( in_array('',   [''])       === true  );
var_dump( in_array(null, [''])       === true  );
var_dump( in_array(0,    [''])       !== true  );
var_dump( in_array('0',  [''])       === false );
var_dump( in_array('',   [''], true) === true  );
var_dump( in_array(null, [''], true) === false );
var_dump( in_array(0,    [''], true) === false );
var_dump( in_array('0',  [''], true) === false );

print nl.nl;

var_dump( core::gettype('string')             === 'string' );
var_dump( core::gettype(123)                  === 'integer' );
var_dump( core::gettype(0.000001)             === 'double' );
var_dump( core::gettype(true)                 === 'boolean' );
var_dump( core::gettype(false)                === 'boolean' );
var_dump( core::gettype(null)                 === 'null' );
var_dump( core::gettype([])                   === 'array' );
var_dump( core::gettype(new \stdCLass)        === 'object:\\stdClass' );
var_dump( core::gettype(new \stdCLass, false) === 'object' );
var_dump( core::gettype(new Test)             === 'object:test' );
var_dump( core::gettype(new Test, false)      === 'object' );
