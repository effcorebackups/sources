<?php

const nl = "\n";

print '%D0%BA%D0%BB%D1%8E%D1%87=%D0%BC%D0%BE%D1%91%20%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%BD%D0%B8%D0%B5' === http_build_query(['ключ' => 'моё значение'], '', '&', PHP_QUERY_RFC3986);
print '%D0%BA%D0%BB%D1%8E%D1%87=%D0%BC%D0%BE%D1%91%2B%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%BD%D0%B8%D0%B5' === http_build_query(['ключ' => 'моё+значение'], '', '&', PHP_QUERY_RFC3986);

# ─────────────────────────────────────────────────────────────────────
# parse_str() test
# ─────────────────────────────────────────────────────────────────────

$query = [
    ''                              => [],
    '='                             => [],
    '=value_1'                      => [],
    'key_1'                         => ['key_1' => ''],
    'key_1='                        => ['key_1' => ''],
    'key_1=value_1'                 => ['key_1' => 'value_1'],
    'key_1=value_1=still_value_1'   => ['key_1' => 'value_1=still_value_1'],
    'key_1=value_1%3Dstill_value_1' => ['key_1' => 'value_1=still_value_1'],
    '&'                             => [],
    '&&&key_2'                      => ['key_2' => ''],
    '&key_2'                        => ['key_2' => ''],
    'key_1&'                        => ['key_1' => ''],
    'key_1&key_2'                   => ['key_1' => '', 'key_2' => ''],
    'key_1=value_1&key_arr[]=value_2&key_arr[]=value_3'       => ['key_1' => 'value_1', 'key_arr' => [    0 => 'value_2',     1 => 'value_3']],
    'key_1=value_1&key_arr[0]=value_2&key_arr[1]=value_3'     => ['key_1' => 'value_1', 'key_arr' => [    0 => 'value_2',     1 => 'value_3']],
    'key_1=value_1&key_arr[2]=value_2&key_arr[3]=value_3'     => ['key_1' => 'value_1', 'key_arr' => [    2 => 'value_2',     3 => 'value_3']],
    'key_1=value_1&key_arr[k-1]=value_2&key_arr[k-2]=value_3' => ['key_1' => 'value_1', 'key_arr' => ['k-1' => 'value_2', 'k-2' => 'value_3']],
    'key_1=value_1&key_arr[]=value_2&key_arr[k-2]=value_3' => ['key_1' => 'value_1', 'key_arr' => [    0 => 'value_2', 'k-2' => 'value_3']],
    'key_1=value_1&key_arr[k-1]=value_2&key_arr[]=value_3' => ['key_1' => 'value_1', 'key_arr' => ['k-1' => 'value_2',     0 => 'value_3']],
    '%D0%BA%D0%BB%D1%8E%D1%87=%D0%BC%D0%BE%D1%91%20%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%BD%D0%B8%D0%B5' => ['ключ' => 'моё значение'],
    '%D0%BA%D0%BB%D1%8E%D1%87=%D0%BC%D0%BE%D1%91%2B%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%BD%D0%B8%D0%B5' => ['ключ' => 'моё+значение'],
    'key_arr[][]=value_1'     => ['key_arr' => [0 =>             [0 => 'value_1']]],
    'key_arr[][][]=value_1'   => ['key_arr' => [0 => [0 =>       [0 => 'value_1']]]],
    'key_arr[][][][]=value_1' => ['key_arr' => [0 => [0 => [0 => [0 => 'value_1']]]]],
  # 'key_arr=value_1&key_arr[]=value_2' => ['key_arr' => [0 => 'value_2']],
  # 'key_arr[]=value_1&key_arr=value_2' => ['key_arr' =>       'value_2'],
  # 'key_arr[=value_1' => ['key_arr_' => 'value_1'],
  # 'key_arr]=value_1' => ['key_arr]' => 'value_1']
];


foreach ($query as $c_value => $c_expected) {
    $c_parse_result = null;
    $c_info = parse_str($c_value, $c_parse_result);
    $c_result = serialize($c_parse_result) === serialize($c_expected);
    if ($c_result)
         print 'true "' .$c_value.'" '.serialize($c_info).nl;
    else print 'FALSE "'.$c_value.'"'.nl;
}

