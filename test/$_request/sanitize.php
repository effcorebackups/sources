<?php

namespace effcore;

# ─────────────────────────────────────────────────────────────────────
# sanitize(…, $is_files === false) of requests:
# ═════════════════════════════════════════════════════════════════════
#   (string)key => (string)value
# ◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦
#   (string)key => [
#     (int)0 => (string)value,
#     (int)1 => (string)value …
#     (int)N => (string)value
#   ]
# ─────────────────────────────────────────────────────────────────────

$_POST = [
    'select' => 'option_1',
    'select_multiple' => [
        0 => 'option_1',
        1 => 'option_2'
    ],
    'checkboxes' => [
        0 => 'checkbox_1',
        1 => 'checkbox_2'
    ]
];

# ◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦

$_POST_WS_ERRORS = [
    'value_null' => null,
    'value_bool_true' => true,
    'value_bool_false' => false,
    'value_int_0' => 0,
    'value_int_1' => 1,
    'value_float_0' => 0.0,
    'value_float_1' => 1.0,
    'value_string_empty' => '',
    'value_string_0' => '0',
    'value_string_1' => '1',
    'value_string_X' => 'X',
    'value_array_empty' => [],
    'value_array_null' => [null],
    'value_array_bool_true' => [true],
    'value_array_bool_false' => [false],
    'value_array_int_0' => [0],
    'value_array_int_1' => [1],
    'value_array_float_0' => [0.0],
    'value_array_float_1' => [1.0],
    'value_array_string_empty' => [''],
    'value_array_string_0' => ['0'],
    'value_array_string_1' => ['1'],
    'value_array_string_X' => ['X'],
    'value_array_array_empty' => [[]],
    'value_array_ws_wrong_keys' => [
        100 => 'option_1',
        200 => 'option_2'
    ],
];

$_POST_WS_ERRORS_SANITIZED = [
    'value_string_empty' => '',
    'value_string_0' => '0',
    'value_string_1' => '1',
    'value_string_X' => 'X',
    'value_array_string_empty' => [''],
    'value_array_string_0' => ['0'],
    'value_array_string_1' => ['1'],
    'value_array_string_X' => ['X'],
    'value_array_ws_wrong_keys' => [
        0 => 'option_1',
        1 => 'option_2'
    ],
];

# ─────────────────────────────────────────────────────────────────────
# sanitize(…, $is_files !== false) of requests:
# ═════════════════════════════════════════════════════════════════════
#   (string)key => [
#     (string)key => (string)|(int)value
#   ]
# ◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦◦
#   (string)key => [
#     (string)key => [
#       (int)0 => (string)|(int)value,
#       (int)1 => (string)|(int)value …
#       (int)N => (string)|(int)value
#     ]
#   ]
# ─────────────────────────────────────────────────────────────────────

$_FILES = [
    'file_ws_error' => [
        'name'     => '',
        'type'     => '',
        'tmp_name' => '',
        'error'    => 4,
        'size'     => 0
    ],
    'file' => [
        'name'     => 'text.txt',
        'type'     => 'text/plain',
        'tmp_name' => '/private/var/tmp/php000000',
        'error'    => 0,
        'size'     => 3
    ],
    'file_multiple_ws_error' => [
        'name'     => [0 => ''],
        'type'     => [0 => ''],
        'tmp_name' => [0 => ''],
        'error'    => [0 => 4],
        'size'     => [0 => 0]
    ],
    'file_multiple' => [
        'name'     => [0 => 'test.png'],
        'type'     => [0 => 'image/png'],
        'tmp_name' => [0 => '/private/var/tmp/php000000'],
        'error'    => [0 => 0],
        'size'     => [0 => 6270]
    ]
];

# ─────────────────────────────────────────────────────────────────────

var_dump(request::sanitize('_POST')           === $_POST);
var_dump(request::sanitize('_POST_WS_ERRORS') === $_POST_WS_ERRORS_SANITIZED);
var_dump(request::sanitize('_FILES', true)    === $_FILES);
print "\n\n\n";

print_r($_POST);           print_r(request::sanitize('_POST')); print "\n\n\n";
print_r($_POST_WS_ERRORS); print_r(request::sanitize('_POST_WS_ERRORS')); print "\n\n\n";
print_r($_FILES);          print_r(request::sanitize('_FILES', true));
