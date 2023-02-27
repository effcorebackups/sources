<?php

const nl = "\n";

print http_build_query(['ключ' => 'моё значение'], '', '&', PHP_QUERY_RFC3986) === '%D0%BA%D0%BB%D1%8E%D1%87=%D0%BC%D0%BE%D1%91%20%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%BD%D0%B8%D0%B5';
print http_build_query(['ключ' => 'моё+значение'], '', '&', PHP_QUERY_RFC3986) === '%D0%BA%D0%BB%D1%8E%D1%87=%D0%BC%D0%BE%D1%91%2B%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%BD%D0%B8%D0%B5';

# ─────────────────────────────────────────────────────────────────────
# http_build_query() test
# ─────────────────────────────────────────────────────────────────────

$query = [
    ''                                                                => [],
    'key_1='                                                          => ['key_1' => ''],
    'key_1=value_1'                                                   => ['key_1' => 'value_1'],
    'key_1=value_1%3Dstill_value_1'                                   => ['key_1' => 'value_1=still_value_1'],
    'key_1=&key_2='                                                   => ['key_1' => '', 'key_2' => ''],
    'key_1=value_1&key_arr%5B0%5D=value_2&key_arr%5B1%5D=value_3'     => ['key_1' => 'value_1', 'key_arr' => [0 => 'value_2', 1 => 'value_3']],
    'key_1=value_1&key_arr%5B2%5D=value_2&key_arr%5B3%5D=value_3'     => ['key_1' => 'value_1', 'key_arr' => [2 => 'value_2', 3 => 'value_3']],
    'key_1=value_1&key_arr%5Bk-1%5D=value_2&key_arr%5Bk-2%5D=value_3' => ['key_1' => 'value_1', 'key_arr' => ['k-1' => 'value_2', 'k-2' => 'value_3']],
    '%D0%BA%D0%BB%D1%8E%D1%87=%D0%BC%D0%BE%D1%91%20%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%BD%D0%B8%D0%B5' => ['ключ' => 'моё значение'],
    '%D0%BA%D0%BB%D1%8E%D1%87=%D0%BC%D0%BE%D1%91%2B%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%BD%D0%B8%D0%B5' => ['ключ' => 'моё+значение']
];


foreach ($query as $c_expected => $c_value) {
    $c_info = http_build_query($c_value, '', '&', PHP_QUERY_RFC3986);
    $c_result = $c_info === $c_expected;
    if ($c_result)
         print 'true "' .$c_expected.'"'.nl;
    else print 'FALSE "'.$c_expected.'"'.nl;
}

