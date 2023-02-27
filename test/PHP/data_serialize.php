<?php

namespace effcore;

class T {
    public $prop_string        = 'string';
    public $prop_integer       = 123;
    public $prop_float         = 0.000001;
    public $prop_boolean_true  = true;
    public $prop_boolean_false = false;
    public $prop_null          = null;
    public $prop_array         = [
        'string'              => 'key string',
        123                   => 'key integer',
        0.000001              => 'key float',
        true                  => 'key boolean:true',
        false                 => 'key boolean:false',
        null                  => 'key null',
        'value string'        => 'string',
        'value integer'       => 123,
        'value float'         => 0.000001,
        'value boolean:true'  => true,
        'value boolean:false' => false,
        'value null'          => null,
        'value array'         => [],
    ];
}

$test_string        = 'string';
$test_integer       = 123;
$test_float         = 0.000001;
$test_boolean_true  = true;
$test_boolean_false = false;
$test_null          = null;
$test_object_simple = new \stdCLass;
$test_object        = new T;
$test_array         = [
    'string'              => 'key string',
    123                   => 'key integer',
    0.000001              => 'key float',
    true                  => 'key boolean:true',
    false                 => 'key boolean:false',
    null                  => 'key null',
    'value string'        => 'string',
    'value integer'       => 123,
    'value float'         => 0.000001,
    'value boolean:true'  => true,
    'value boolean:false' => false,
    'value null'          => null,
    'value array'         => [],
    'value object simple' => new \stdCLass,
    'value object'        => new T
];

var_dump ( core::data_serialize($test_string,        false) === serialize($test_string)        );
var_dump ( core::data_serialize($test_integer,       false) === serialize($test_integer)       );
var_dump ( core::data_serialize($test_float,         false) === serialize($test_float)         );
var_dump ( core::data_serialize($test_boolean_true,  false) === serialize($test_boolean_true)  );
var_dump ( core::data_serialize($test_boolean_false, false) === serialize($test_boolean_false) );
var_dump ( core::data_serialize($test_null,          false) === serialize($test_null)          );
var_dump ( core::data_serialize($test_object_simple, false) === serialize($test_object_simple) );
var_dump ( core::data_serialize($test_object,        false) === serialize($test_object)        );
var_dump ( core::data_serialize($test_array,         false) === serialize($test_array)         );

var_dump ( core::data_serialize($test_string,        false) === 's:6:"string";'       );
var_dump ( core::data_serialize($test_integer,       false) === 'i:123;'              );
var_dump ( core::data_serialize($test_float,         false) === 'd:1.0E-6;'           );
var_dump ( core::data_serialize($test_boolean_true,  false) === 'b:1;'                );
var_dump ( core::data_serialize($test_boolean_false, false) === 'b:0;'                );
var_dump ( core::data_serialize($test_null,          false) === 'N;'                  );
var_dump ( core::data_serialize($test_object_simple, false) === 'O:8:"stdClass":0:{}' );
var_dump ( core::data_serialize($test_object,        false) === 'O:9:"effcore\T":7:{s:11:"prop_string";s:6:"string";s:12:"prop_integer";i:123;s:10:"prop_float";d:1.0E-6;s:17:"prop_boolean_true";b:1;s:18:"prop_boolean_false";b:0;s:9:"prop_null";N;s:10:"prop_array";a:12:{s:6:"string";s:10:"key string";i:123;s:11:"key integer";i:0;s:17:"key boolean:false";i:1;s:16:"key boolean:true";s:0:"";s:8:"key null";s:12:"value string";s:6:"string";s:13:"value integer";i:123;s:11:"value float";d:1.0E-6;s:18:"value boolean:true";b:1;s:19:"value boolean:false";b:0;s:10:"value null";N;s:11:"value array";a:0:{}}}' );
var_dump ( core::data_serialize($test_array,         false) === 'a:14:{s:6:"string";s:10:"key string";i:123;s:11:"key integer";i:0;s:17:"key boolean:false";i:1;s:16:"key boolean:true";s:0:"";s:8:"key null";s:12:"value string";s:6:"string";s:13:"value integer";i:123;s:11:"value float";d:1.0E-6;s:18:"value boolean:true";b:1;s:19:"value boolean:false";b:0;s:10:"value null";N;s:11:"value array";a:0:{}s:19:"value object simple";O:8:"stdClass":0:{}s:12:"value object";O:9:"effcore\T":7:{s:11:"prop_string";s:6:"string";s:12:"prop_integer";i:123;s:10:"prop_float";d:1.0E-6;s:17:"prop_boolean_true";b:1;s:18:"prop_boolean_false";b:0;s:9:"prop_null";N;s:10:"prop_array";a:12:{s:6:"string";s:10:"key string";i:123;s:11:"key integer";i:0;s:17:"key boolean:false";i:1;s:16:"key boolean:true";s:0:"";s:8:"key null";s:12:"value string";s:6:"string";s:13:"value integer";i:123;s:11:"value float";d:1.0E-6;s:18:"value boolean:true";b:1;s:19:"value boolean:false";b:0;s:10:"value null";N;s:11:"value array";a:0:{}}}}' );

var_dump ( core::data_serialize($test_string       ) === 's:6:"string";'        );
var_dump ( core::data_serialize($test_integer      ) === 'i:123;'               );
var_dump ( core::data_serialize($test_float        ) === 'd:0.000001;'          );
var_dump ( core::data_serialize($test_boolean_true ) === 'b:1;'                 );
var_dump ( core::data_serialize($test_boolean_false) === 'b:0;'                 );
var_dump ( core::data_serialize($test_null         ) === 'N;'                   );
var_dump ( core::data_serialize($test_object_simple) === 'O:8:"stdClass":0:{}'  );
var_dump ( core::data_serialize($test_object       ) === 'O:9:"effcore\T":0:{}' );
var_dump ( core::data_serialize($test_array        ) === 'a:14:{s:6:"string";s:10:"key string";i:123;s:11:"key integer";i:0;s:17:"key boolean:false";i:1;s:16:"key boolean:true";s:0:"";s:8:"key null";s:12:"value string";s:6:"string";s:13:"value integer";i:123;s:11:"value float";d:0.000001;s:18:"value boolean:true";b:1;s:19:"value boolean:false";b:0;s:10:"value null";N;s:11:"value array";a:0:{}s:19:"value object simple";O:8:"stdClass":0:{}s:12:"value object";O:9:"effcore\T":0:{}}' );
