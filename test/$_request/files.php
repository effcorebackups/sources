<?php

##########################
### non automatic test ###
##########################

$test['field_1_file'         ] = ['name' => 'file.png',                           'type' => 'image/png',                          'tmp_name' => '/tmp/phpxxxxxxxx',                                 'error' => 0,                'size' => 1000                  ];
$test['field_1_file_multiple'] = ['name' => [0 => 'file.png'                   ], 'type' => [0 => 'image/png'                  ], 'tmp_name' => [0 => '/tmp/phpxxxxxxxx'                         ], 'error' => [0 => 0        ], 'size' => [0 => 1000           ]];
$test['field_1_file_ws_empty'] = ['name' => [0 => '',          1 => 'file.png' ], 'type' => [0 => '',          1 => 'image/png'], 'tmp_name' => [0 => '',                 1 => '/tmp/phpyyyyyyyy'], 'error' => [0 => 4, 1 => 0], 'size' => [0 => 0,    1 => 2000]];
$test['field_2_files'        ] = ['name' => [0 => 'file1.png', 1 => 'file2.png'], 'type' => [0 => 'image/png', 1 => 'image/png'], 'tmp_name' => [0 => '/tmp/phpxxxxxxxx', 1 => '/tmp/phpyyyyyyyy'], 'error' => [0 => 0, 1 => 0], 'size' => [0 => 1000, 1 => 2000]];
$test['error_1'              ] = ['name' => 'file.png',                           'type' => '',                                   'tmp_name' => '',        'size' => 0,                             'error' => UPLOAD_ERR_INI_SIZE                               ];
$test['error_2'              ] = ['name' => 'file.png',                           'type' => '',                                   'tmp_name' => '',        'size' => 0,                             'error' => UPLOAD_ERR_FORM_SIZE                              ];
$test['error_3'              ] = ['name' => 'file.png',                           'type' => '',                                   'tmp_name' => '',        'size' => 0,                             'error' => UPLOAD_ERR_PARTIAL                                ];
$test['error_4'              ] = ['name' => '',                                   'type' => '',                                   'tmp_name' => '',        'size' => 0,                             'error' => UPLOAD_ERR_NO_FILE                                ];
$test['error_6'              ] = ['name' => 'file.png',                           'type' => '',                                   'tmp_name' => '',        'size' => 0,                             'error' => UPLOAD_ERR_NO_TMP_DIR                             ];
$test['error_7'              ] = ['name' => 'file.png',                           'type' => '',                                   'tmp_name' => '',        'size' => 0,                             'error' => UPLOAD_ERR_CANT_WRITE                             ];
$test['error_8'              ] = ['name' => 'file.png',                           'type' => '',                                   'tmp_name' => '',        'size' => 0,                             'error' => UPLOAD_ERR_EXTENSION                              ];
$test['error_X'              ] = ['name' => 'file.png',                           'type' => '',                                   'tmp_name' => '',        'size' => 0,                             'error' => 'X'                                               ];
$test['error_1_multiple'     ] = ['name' => [0 => 'error.png'],                   'type' => [0 => ''],                            'tmp_name' => [0 => ''], 'size' => [0 => 0],                      'error' => [0 => UPLOAD_ERR_INI_SIZE                        ]];
$test['error_2_multiple'     ] = ['name' => [0 => 'error.png'],                   'type' => [0 => ''],                            'tmp_name' => [0 => ''], 'size' => [0 => 0],                      'error' => [0 => UPLOAD_ERR_FORM_SIZE                       ]];
$test['error_3_multiple'     ] = ['name' => [0 => 'error.png'],                   'type' => [0 => ''],                            'tmp_name' => [0 => ''], 'size' => [0 => 0],                      'error' => [0 => UPLOAD_ERR_PARTIAL                         ]];
$test['error_4_multiple'     ] = ['name' => [0 => ''         ],                   'type' => [0 => ''],                            'tmp_name' => [0 => ''], 'size' => [0 => 0],                      'error' => [0 => UPLOAD_ERR_NO_FILE                         ]];
$test['error_6_multiple'     ] = ['name' => [0 => 'error.png'],                   'type' => [0 => ''],                            'tmp_name' => [0 => ''], 'size' => [0 => 0],                      'error' => [0 => UPLOAD_ERR_NO_TMP_DIR                      ]];
$test['error_7_multiple'     ] = ['name' => [0 => 'error.png'],                   'type' => [0 => ''],                            'tmp_name' => [0 => ''], 'size' => [0 => 0],                      'error' => [0 => UPLOAD_ERR_CANT_WRITE                      ]];
$test['error_8_multiple'     ] = ['name' => [0 => 'error.png'],                   'type' => [0 => ''],                            'tmp_name' => [0 => ''], 'size' => [0 => 0],                      'error' => [0 => UPLOAD_ERR_EXTENSION                       ]];
$test['error_X_multiple'     ] = ['name' => [0 => 'error.png'],                   'type' => [0 => ''],                            'tmp_name' => [0 => ''], 'size' => [0 => 0],                      'error' => [0 => 'X'                                        ]];

# check file
$_FILES = ['file' => $test['field_1_file']];
# check files
$_FILES = ['file' => $test['field_1_file_multiple']];
$_FILES = ['file' => $test['field_1_file_ws_empty']];
$_FILES = ['file' => $test['field_2_files'        ]];
# check error
$_FILES = ['file' => $test['error_1']];
$_FILES = ['file' => $test['error_2']];
$_FILES = ['file' => $test['error_3']];
$_FILES = ['file' => $test['error_4']]; # alert if required is enabled
$_FILES = ['file' => $test['error_6']];
$_FILES = ['file' => $test['error_7']];
$_FILES = ['file' => $test['error_8']];
$_FILES = ['file' => $test['error_X']];
# check errors
$_FILES = ['file' => $test['error_1_multiple']];
$_FILES = ['file' => $test['error_2_multiple']];
$_FILES = ['file' => $test['error_3_multiple']];
$_FILES = ['file' => $test['error_4_multiple']]; # alert if required is enabled
$_FILES = ['file' => $test['error_6_multiple']];
$_FILES = ['file' => $test['error_7_multiple']];
$_FILES = ['file' => $test['error_8_multiple']];
$_FILES = ['file' => $test['error_X_multiple']];
# check files + errors
$_FILES = ['file' => [
    'name'     => [$test['field_1_file_multiple']['name'    ][0], $test['error_1_multiple']['name'][0]],
    'type'     => [$test['field_1_file_multiple']['type'    ][0], $test['error_1_multiple']['type'][0]],
    'tmp_name' => [$test['field_1_file_multiple']['tmp_name'][0], $test['error_1_multiple']['tmp_name'][0]],
    'error'    => [$test['field_1_file_multiple']['error'   ][0], $test['error_1_multiple']['error'][0]],
    'size'     => [$test['field_1_file_multiple']['size'    ][0], $test['error_1_multiple']['size'][0]]
]];
$_FILES = ['file' => [
    'name'     => [$test['field_1_file_multiple']['name'    ][0], $test['error_2_multiple']['name'][0]],
    'type'     => [$test['field_1_file_multiple']['type'    ][0], $test['error_2_multiple']['type'][0]],
    'tmp_name' => [$test['field_1_file_multiple']['tmp_name'][0], $test['error_2_multiple']['tmp_name'][0]],
    'error'    => [$test['field_1_file_multiple']['error'   ][0], $test['error_2_multiple']['error'][0]],
    'size'     => [$test['field_1_file_multiple']['size'    ][0], $test['error_2_multiple']['size'][0]]
]];
$_FILES = ['file' => [
    'name'     => [$test['field_1_file_multiple']['name'    ][0], $test['error_3_multiple']['name'][0]],
    'type'     => [$test['field_1_file_multiple']['type'    ][0], $test['error_3_multiple']['type'][0]],
    'tmp_name' => [$test['field_1_file_multiple']['tmp_name'][0], $test['error_3_multiple']['tmp_name'][0]],
    'error'    => [$test['field_1_file_multiple']['error'   ][0], $test['error_3_multiple']['error'][0]],
    'size'     => [$test['field_1_file_multiple']['size'    ][0], $test['error_3_multiple']['size'][0]]
]];
$_FILES = ['file' => [
    'name'     => [$test['field_1_file_multiple']['name'    ][0], $test['error_4_multiple']['name'    ][0]],
    'type'     => [$test['field_1_file_multiple']['type'    ][0], $test['error_4_multiple']['type'    ][0]],
    'tmp_name' => [$test['field_1_file_multiple']['tmp_name'][0], $test['error_4_multiple']['tmp_name'][0]],
    'error'    => [$test['field_1_file_multiple']['error'   ][0], $test['error_4_multiple']['error'   ][0]],
    'size'     => [$test['field_1_file_multiple']['size'    ][0], $test['error_4_multiple']['size'    ][0]]
]];
$_FILES = ['file' => [
    'name'     => [$test['field_1_file_multiple']['name'    ][0], $test['error_6_multiple']['name'    ][0]],
    'type'     => [$test['field_1_file_multiple']['type'    ][0], $test['error_6_multiple']['type'    ][0]],
    'tmp_name' => [$test['field_1_file_multiple']['tmp_name'][0], $test['error_6_multiple']['tmp_name'][0]],
    'error'    => [$test['field_1_file_multiple']['error'   ][0], $test['error_6_multiple']['error'   ][0]],
    'size'     => [$test['field_1_file_multiple']['size'    ][0], $test['error_6_multiple']['size'    ][0]]
]];
$_FILES = ['file' => [
    'name'     => [$test['field_1_file_multiple']['name'    ][0], $test['error_7_multiple']['name'    ][0]],
    'type'     => [$test['field_1_file_multiple']['type'    ][0], $test['error_7_multiple']['type'    ][0]],
    'tmp_name' => [$test['field_1_file_multiple']['tmp_name'][0], $test['error_7_multiple']['tmp_name'][0]],
    'error'    => [$test['field_1_file_multiple']['error'   ][0], $test['error_7_multiple']['error'   ][0]],
    'size'     => [$test['field_1_file_multiple']['size'    ][0], $test['error_7_multiple']['size'    ][0]]
]];
$_FILES = ['file' => [
    'name'     => [$test['field_1_file_multiple']['name'    ][0], $test['error_8_multiple']['name'    ][0]],
    'type'     => [$test['field_1_file_multiple']['type'    ][0], $test['error_8_multiple']['type'    ][0]],
    'tmp_name' => [$test['field_1_file_multiple']['tmp_name'][0], $test['error_8_multiple']['tmp_name'][0]],
    'error'    => [$test['field_1_file_multiple']['error'   ][0], $test['error_8_multiple']['error'   ][0]],
    'size'     => [$test['field_1_file_multiple']['size'    ][0], $test['error_8_multiple']['size'    ][0]]
]];
$_FILES = ['file' => [
    'name'     => [$test['field_1_file_multiple']['name'    ][0], $test['error_X_multiple']['name'    ][0]],
    'type'     => [$test['field_1_file_multiple']['type'    ][0], $test['error_X_multiple']['type'    ][0]],
    'tmp_name' => [$test['field_1_file_multiple']['tmp_name'][0], $test['error_X_multiple']['tmp_name'][0]],
    'error'    => [$test['field_1_file_multiple']['error'   ][0], $test['error_X_multiple']['error'   ][0]],
    'size'     => [$test['field_1_file_multiple']['size'    ][0], $test['error_X_multiple']['size'    ][0]]
]];

##########################
### collect statistics ###
##########################

$test['undefined'] = [
];

$test['error_1'] = [
    'field_n' => [
        'name'     => 'file.png',
        'type'     => '',
        'tmp_name' => '',
        'error'    => UPLOAD_ERR_INI_SIZE,
        'size'     => 0
    ]
];

$test['error_1-array'] = [
    'field_n' => [
        'name'     => [0 => 'file.png'],
        'type'     => [0 => ''],
        'tmp_name' => [0 => ''],
        'error'    => [0 => UPLOAD_ERR_INI_SIZE],
        'size'     => [0 => 0]
    ]
];

$test['error_2'] = [
    'field_n' => [
        'name'     => 'file.png',
        'type'     => '',
        'tmp_name' => '',
        'error'    => UPLOAD_ERR_FORM_SIZE,
        'size'     => 0
    ]
];

$test['error_2-array'] = [
    'field_n' => [
        'name'     => [0 => 'file.png'],
        'type'     => [0 => ''],
        'tmp_name' => [0 => ''],
        'error'    => [0 => UPLOAD_ERR_FORM_SIZE],
        'size'     => [0 => 0]
    ]
];

$test['error_3'] = [
    'field_n' => [
        'name'     => 'file.png',
        'type'     => '',
        'tmp_name' => '',
        'error'    => UPLOAD_ERR_PARTIAL,
        'size'     => 0
    ]
];

$test['error_3-array'] = [
    'field_n' => [
        'name'     => [0 => 'file.png'],
        'type'     => [0 => ''],
        'tmp_name' => [0 => ''],
        'error'    => [0 => UPLOAD_ERR_PARTIAL],
        'size'     => [0 => 0]
    ]
];

$test['error_4'] = [
    'field_n' => [
        'name'     => '',
        'type'     => '',
        'tmp_name' => '',
        'error'    => UPLOAD_ERR_NO_FILE,
        'size'     => 0
    ]
];

$test['error_4-array'] = [
    'field_n' => [
        'name'     => [0 => ''],
        'type'     => [0 => ''],
        'tmp_name' => [0 => ''],
        'error'    => [0 => UPLOAD_ERR_NO_FILE],
        'size'     => [0 => 0]
    ]
];

$test['error_6'] = [
    'field_n' => [
        'name'     => 'file.png',
        'type'     => '',
        'tmp_name' => '',
        'error'    => UPLOAD_ERR_NO_TMP_DIR,
        'size'     => 0
    ]
];

$test['error_6-array'] = [
    'field_n' => [
        'name'     => [0 => 'file.png'],
        'type'     => [0 => ''],
        'tmp_name' => [0 => ''],
        'error'    => [0 => UPLOAD_ERR_NO_TMP_DIR],
        'size'     => [0 => 0]
    ]
];

$test['error_7'] = [
    'field_n' => [
        'name'     => 'file.png',
        'type'     => '',
        'tmp_name' => '',
        'error'    => UPLOAD_ERR_CANT_WRITE,
        'size'     => 0
    ]
];

$test['error_7-array'] = [
    'field_n' => [
        'name'     => [0 => 'file.png'],
        'type'     => [0 => ''],
        'tmp_name' => [0 => ''],
        'error'    => [0 => UPLOAD_ERR_CANT_WRITE],
        'size'     => [0 => 0]
    ]
];

$test['error_8'] = [
    'field_n' => [
        'name'     => 'file.png',
        'type'     => '',
        'tmp_name' => '',
        'error'    => UPLOAD_ERR_EXTENSION,
        'size'     => 0
    ]
];

$test['error_8-array'] = [
    'field_n' => [
        'name'     => [0 => 'file.png'],
        'type'     => [0 => ''],
        'tmp_name' => [0 => ''],
        'error'    => [0 => UPLOAD_ERR_EXTENSION],
        'size'     => [0 => 0]
    ]
];

# input[name="file",value="file.png"]
$test['string-file'] = [
    'field_n' => [
        'name'     => 'file.png',
        'type'     => 'image/png',
        'tmp_name' => '/tmp/phpxxxxxxxx',
        'error'    => 0,
        'size'     => 1000
    ]
];

# input[name="file[]",value="file.png"]
$test['array-file'] = [
    'field_n' => [
        'name'     => [0 => 'file.png'],
        'type'     => [0 => 'image/png'],
        'tmp_name' => [0 => '/tmp/phpxxxxxxxx'],
        'error'    => [0 => 0],
        'size'     => [0 => 1000]
    ]
];

# input[name="file[]",value="file1.png,file2.png",multiple="multiple"]
$test['array-file1-file2-multiple'] = [
    'field_n' => [
        'name'     => [0 => 'file1.png',        1 => 'file2.png'],
        'type'     => [0 => 'image/png',        1 => 'image/png'],
        'tmp_name' => [0 => '/tmp/phpxxxxxxxx', 1 => '/tmp/phpyyyyyyyy'],
        'error'    => [0 => 0,                  1 => 0],
        'size'     => [0 => 1000,               1 => 1000]
    ]
];

# input[name="file[]",value="",multiple="multiple"]
# input[name="file[]",value="",multiple="multiple"]
$test['array-multiple-array-multiple'] = [
    'field_n' => [
        'name'     => [0 => '',                 1 => ''],
        'type'     => [0 => '',                 1 => ''],
        'tmp_name' => [0 => '',                 1 => ''],
        'error'    => [0 => UPLOAD_ERR_NO_FILE, 1 => UPLOAD_ERR_NO_FILE],
        'size'     => [0 => 0,                  1 => 0]
    ]
];

# input[name="file[]",value="file1.png",multiple="multiple"]
# input[name="file[]",value="",         multiple="multiple"]
$test['array-file1-multiple-array-multiple'] = [
    'field_n' => [
        'name'     => [0 => 'file1.png',        1 => ''],
        'type'     => [0 => 'image/png',        1 => ''],
        'tmp_name' => [0 => '/tmp/phpxxxxxxxx', 1 => ''],
        'error'    => [0 => 0,                  1 => UPLOAD_ERR_NO_FILE],
        'size'     => [0 => 1000,               1 => 0]
    ]
];

# input[name="file[]",value="",         multiple="multiple"]
# input[name="file[]",value="file2.png",multiple="multiple"]
$test['array-multiple-array-file2-multiple'] = [
    'field_n' => [
        'name'     => [0 => '',                 1 => 'file2.png'],
        'type'     => [0 => '',                 1 => 'image/png'],
        'tmp_name' => [0 => '',                 1 => '/tmp/phpyyyyyyyy'],
        'error'    => [0 => UPLOAD_ERR_NO_FILE, 1 => 0],
        'size'     => [0 => 0,                  1 => 1000]
    ]
];

# input[name="file[]",value="file1.png",multiple="multiple"]
# input[name="file[]",value="file2.png",multiple="multiple"]
$test['array-file1-multiple-array-file2-multiple'] = [
    'field_n' => [
        'name'     => [0 => 'file1.png',        1 => 'file2.png'],
        'type'     => [0 => 'image/png',        1 => 'image/png'],
        'tmp_name' => [0 => '/tmp/phpxxxxxxxx', 1 => '/tmp/phpyyyyyyyy'],
        'error'    => [0 => 0,                  1 => 0],
        'size'     => [0 => 1000,               1 => 1000]
    ]
];

############
### test ###
############

$expected['undefined'] = [
    'field_n' => []
];

$expected['error_1'] = [
    'field_n' => [
        0 => (object)[
            'name'     => 'file.png',
            'type'     => '',
            'tmp_name' => '',
            'error'    => UPLOAD_ERR_INI_SIZE,
            'size'     => 0
        ]
    ]
];

$expected['error_1-array'] = [
    'field_n' => [
        0 => (object)[
            'name'     => 'file.png',
            'type'     => '',
            'tmp_name' => '',
            'error'    => UPLOAD_ERR_INI_SIZE,
            'size'     => 0
        ]
    ]
];

$expected['error_2'] = [
    'field_n' => [
        0 => (object)[
            'name'     => 'file.png',
            'type'     => '',
            'tmp_name' => '',
            'error'    => UPLOAD_ERR_FORM_SIZE,
            'size'     => 0
        ]
    ]
];

$expected['error_2-array'] = [
    'field_n' => [
        0 => (object)[
            'name'     => 'file.png',
            'type'     => '',
            'tmp_name' => '',
            'error'    => UPLOAD_ERR_FORM_SIZE,
            'size'     => 0
        ]
    ]
];

$expected['error_3'] = [
    'field_n' => [
        0 => (object)[
            'name'     => 'file.png',
            'type'     => '',
            'tmp_name' => '',
            'error'    => UPLOAD_ERR_PARTIAL,
            'size'     => 0
        ]
    ]
];

$expected['error_3-array'] = [
    'field_n' => [
        0 => (object)[
            'name'     => 'file.png',
            'type'     => '',
            'tmp_name' => '',
            'error'    => UPLOAD_ERR_PARTIAL,
            'size'     => 0
        ]
    ]
];

$expected['error_4'] = [
    'field_n' => []
];

$expected['error_4-array'] = [
    'field_n' => []
];

$expected['error_6'] = [
    'field_n' => [
        0 => (object)[
            'name'     => 'file.png',
            'type'     => '',
            'tmp_name' => '',
            'error'    => UPLOAD_ERR_NO_TMP_DIR,
            'size'     => 0
        ]
    ]
];

$expected['error_6-array'] = [
    'field_n' => [
        0 => (object)[
            'name'     => 'file.png',
            'type'     => '',
            'tmp_name' => '',
            'error'    => UPLOAD_ERR_NO_TMP_DIR,
            'size'     => 0
        ]
    ]
];

$expected['error_7'] = [
    'field_n' => [
        0 => (object)[
            'name'     => 'file.png',
            'type'     => '',
            'tmp_name' => '',
            'error'    => UPLOAD_ERR_CANT_WRITE,
            'size'     => 0
        ]
    ]
];

$expected['error_7-array'] = [
    'field_n' => [
        0 => (object)[
            'name'     => 'file.png',
            'type'     => '',
            'tmp_name' => '',
            'error'    => UPLOAD_ERR_CANT_WRITE,
            'size'     => 0
        ]
    ]
];

$expected['error_8'] = [
    'field_n' => [
        0 => (object)[
            'name'     => 'file.png',
            'type'     => '',
            'tmp_name' => '',
            'error'    => UPLOAD_ERR_EXTENSION,
            'size'     => 0
        ]
    ]
];

$expected['error_8-array'] = [
    'field_n' => [
        0 => (object)[
            'name'     => 'file.png',
            'type'     => '',
            'tmp_name' => '',
            'error'    => UPLOAD_ERR_EXTENSION,
            'size'     => 0
        ]
    ]
];

$expected['string-file'] = [
    'field_n' => [
        0 => (object)[
            'name'     => 'file.png',
            'type'     => 'image/png',
            'tmp_name' => '/tmp/phpxxxxxxxx',
            'error'    => 0,
            'size'     => 1000
        ]
    ]
];

$expected['array-file'] = [
    'field_n' => [
        0 => (object)[
            'name'     => 'file.png',
            'type'     => 'image/png',
            'tmp_name' => '/tmp/phpxxxxxxxx',
            'error'    => 0,
            'size'     => 1000
        ]
    ]
];

$expected['array-file1-file2-multiple'] = [
    'field_n' => [
        0 => (object)[
            'name'     => 'file1.png',
            'type'     => 'image/png',
            'tmp_name' => '/tmp/phpxxxxxxxx',
            'error'    => 0,
            'size'     => 1000],
        1 => (object)[
            'name'     => 'file2.png',
            'type'     => 'image/png',
            'tmp_name' => '/tmp/phpyyyyyyyy',
            'error'    => 0,
            'size'     => 1000
        ]
    ]
];

$expected['array-multiple-array-multiple'] = [
    'field_n' => []
];

$expected['array-file1-multiple-array-multiple'] = [
    'field_n' => [
        0 => (object)[
            'name'     => 'file1.png',
            'type'     => 'image/png',
            'tmp_name' => '/tmp/phpxxxxxxxx',
            'error'    => 0,
            'size'     => 1000
        ]
    ]
];

$expected['array-multiple-array-file2-multiple'] = [
    'field_n' => [
        1 => (object)[
            'name'     => 'file2.png',
            'type'     => 'image/png',
            'tmp_name' => '/tmp/phpyyyyyyyy',
            'error'    => 0,
            'size'     => 1000
        ]
    ]
];

$expected['array-file1-multiple-array-file2-multiple'] = [
    'field_n' => [
        0 => (object)[
            'name'     => 'file1.png',
            'type'     => 'image/png',
            'tmp_name' => '/tmp/phpxxxxxxxx',
            'error'    => 0,
            'size'     => 1000],
        1 => (object)[
            'name'     => 'file2.png',
            'type'     => 'image/png',
            'tmp_name' => '/tmp/phpyyyyyyyy',
            'error'    => 0,
            'size'     => 1000
        ]
    ]
];

# conversion matrix (expected: undefined|array):
# ─────────────────────────────────────────────────────────────────────
# - $_FILES[field] == undefined                             -> return []
# - $_FILES[field] == [error = 4]                           -> return []
# - $_FILES[field] == [name = 'file']                       -> return [0 => (object)[name = 'file']]
# - $_FILES[field] == [name = [0 => 'file']]                -> return [0 => (object)[name = 'file']]
# - $_FILES[field] == [name = [0 => 'file1', 1 => 'file2']] -> return [0 => (object)[name = 'file1'], 1 => (object)[name = 'file2']]
# ─────────────────────────────────────────────────────────────────────

function algorithm($data, $name) {
    $return = [];
    if (isset($data[$name]['name'    ]) &&
        isset($data[$name]['type'    ]) &&
        isset($data[$name]['size'    ]) &&
        isset($data[$name]['tmp_name']) &&
        isset($data[$name]['error'   ])) {
        $info = $data[$name];
        if (!is_array($info['name'    ])) $info['name'    ] = [$info['name'    ]];
        if (!is_array($info['type'    ])) $info['type'    ] = [$info['type'    ]];
        if (!is_array($info['size'    ])) $info['size'    ] = [$info['size'    ]];
        if (!is_array($info['tmp_name'])) $info['tmp_name'] = [$info['tmp_name']];
        if (!is_array($info['error'   ])) $info['error'   ] = [$info['error'   ]];
        foreach ($info as $c_prop => $c_values) {
            foreach ($c_values as $c_index => $c_value) {
                if ($info['error'][$c_index] !== UPLOAD_ERR_NO_FILE) {
                    if (!isset($return[$c_index]))
                               $return[$c_index] = new \stdClass();
                    $return[$c_index]->{$c_prop} = $c_value;
                }
            }
        }
    }
    return $return;
}

foreach ($test as $id => $null) {
    var_dump( algorithm($test[$id], 'field_n') == $expected[$id]['field_n'] );
}


################
### sanitize ###
################

$_FILES = [
    'file' => [
        'name'     => 'file.png',
        'name'     => 'web.config',
        'name'     => 'file /...htaccess',
        'name'     => 'file \\...htaccess',
        'name'     => 'file with unix path parts /...png',
        'name'     => 'file with windows path parts \...png',
        'name'     => '.file with dot prefix.png',
        'name'     => 'file with dot suffix.png.',
        'name'     => 'file with many dots 1.....png',
        'name'     => '....file with many dots 2.png',
        'name'     => 'file with .... many dots 3.png',
        'name'     => 'file with many dots 4.png....',
        'name'     => 'file without extension',
        'name'     => 'file with long name'.str_repeat('x', 500).'.png',
        'name'     => 'file with long extension.png'.str_repeat('x', 500),
        'name'     => 'file with double.types.sh____spaces',
        'name'     => "file ' with single quotation mark.png",
        'name'     => 'file " with double quotation mark.png',
        'name'     => 'file ../ with unix path parts.png',
        'name'     => 'file \\.. with windows path parts.png',
        'name'     => 'file Ффф with unicode.png',
        'name'     => 'file with null \0 byte 1.png',
        'name'     => "file with null \0 byte 2.png",
        'type'     => 'image/png',
        'tmp_name' => '/var/tmp/demo.png',
        'error'    => 0,
        'size'     => 1000
    ]
];
