<?php

namespace effcore;

# conversion matrix:
# ┌──────────────────────────────────────────╥────────────────┐
# │ input value (undefined | string | array) ║ result value   │
# ╞══════════════════════════════════════════╬════════════════╡
# │ source[field] === undefined              ║ return ''      │
# │ source[field] === ''                     ║ return ''      │
# │ source[field] === 'value'                ║ return 'value' │
# ├──────────────────────────────────────────╫────────────────┤
# │ source[field] === [undefined]            ║ return ''      │
# │ source[field] === [0 => '']              ║ return ''      │
# │ source[field] === [0 => 'value']         ║ return 'value' │
# └──────────────────────────────────────────╨────────────────┘

$_POST = [];                $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = null;      $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = true;      $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = false;     $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = 0;         $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = 1;         $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = 0.0;       $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = 1.0;       $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = '';        $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = '0';       $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '0' );
$_POST['test'] = '1';       $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '1' );
$_POST['test'] = 'X';       $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === 'X' );
$_POST['test'] = [];        $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = [null];    $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = [true];    $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = [false];   $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = [0];       $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = [1];       $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = [0.0];     $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = [1.0];     $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = [''];      $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = ['0'];     $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '0' );
$_POST['test'] = ['1'];     $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '1' );
$_POST['test'] = ['X'];     $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === 'X' );
$_POST['test'] = [[]];      $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = [[null]];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = [[true]];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = [[false]]; $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = [[0]];     $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = [[1]];     $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = [[0.0]];   $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = [[1.0]];   $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = [['']];    $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = [['0']];   $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = [['1']];   $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = [['X']];   $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST['test'] = [[[]]];    $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );

$_POST = [];                $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = null;      $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = true;      $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = false;     $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = 0;         $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = 1;         $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = 0.0;       $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = 1.0;       $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = '';        $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = '0';       $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '0' ); # $number is ignored on 1-st level
$_POST['test'] = '1';       $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '1' ); # $number is ignored on 1-st level
$_POST['test'] = 'X';       $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === 'X' ); # $number is ignored on 1-st level
$_POST['test'] = [];        $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [null];    $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [true];    $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [false];   $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [0];       $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [1];       $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [0.0];     $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [1.0];     $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [''];      $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = ['0'];     $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = ['1'];     $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = ['X'];     $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [[]];      $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [[null]];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [[true]];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [[false]]; $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [[0]];     $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [[1]];     $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [[0.0]];   $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [[1.0]];   $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [['']];    $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [['0']];   $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [['1']];   $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [['X']];   $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST['test'] = [[[]]];    $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );

###############################
### transpositions in array ###
###############################

# [undefined|undefined]
# [''       |undefined]
# ['value'  |undefined]
# ---------------------
# [undefined|''       ]
# [''       |''       ]
# ['value'  |''       ]
# ---------------------
# [undefined|'value'  ]
# [''       |'value'  ]
# ['value'  |'value'  ]

$_POST = ['test' => [                  ]];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST = ['test' => [0 => ''           ]];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST = ['test' => [0 => 'X'          ]];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === 'X' );
# ------------------------------------------------------------------------------------------------------------------------------------------
$_POST = ['test' => [          1 => '' ]];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' ); # index '1' convert to '0' after sanitization
$_POST = ['test' => [0 => '',  1 => '' ]];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST = ['test' => [0 => 'X', 1 => '' ]];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === 'X' );
# ------------------------------------------------------------------------------------------------------------------------------------------
$_POST = ['test' => [          1 => 'Y']];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === 'Y' ); # index '1' convert to '0' after sanitization
$_POST = ['test' => [0 => '',  1 => 'Y']];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === '' );
$_POST = ['test' => [0 => 'X', 1 => 'Y']];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 0, '_POST') === 'X' );

$_POST = ['test' => [                  ]];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST = ['test' => [0 => ''           ]];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST = ['test' => [0 => 'X'          ]];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
# ------------------------------------------------------------------------------------------------------------------------------------------
$_POST = ['test' => [          1 => '' ]];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' ); # index '1' convert to '0' after sanitization
$_POST = ['test' => [0 => '',  1 => '' ]];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
$_POST = ['test' => [0 => 'X', 1 => '' ]];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' );
# ------------------------------------------------------------------------------------------------------------------------------------------
$_POST = ['test' => [          1 => 'Y']];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === '' ); # index '1' convert to '0' after sanitization
$_POST = ['test' => [0 => '',  1 => 'Y']];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === 'Y' );
$_POST = ['test' => [0 => 'X', 1 => 'Y']];  $_POST = request::sanitize('_POST');  var_dump( request::value_get('test', 1, '_POST') === 'Y' );
