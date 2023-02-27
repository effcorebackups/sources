<?php

namespace effcore;

$object_text = new text('some translated text');
$object_text->custom_preperty = 'string';
$object_text->is_apply_tokens = null;             /* error */
$object_text->is_apply_tokens = ['arg' => '123']; /* error */
$object_text->is_apply_tokens = true;
$object_text->is_apply_translation = null;             /* error */
$object_text->is_apply_translation = ['arg' => '123']; /* error */
$object_text->is_apply_translation = true;
$object_text->args = null;                     /* error */
$object_text->args = (object)['arg' => '123']; /* error */
$object_text->args = (object)['arg' => null];  /* error */
$object_text->args =         ['arg' => '123'];
$object_text->weight = null;             /* error */
$object_text->weight = ['arg' => '123']; /* error */
$object_text->weight = 0;
$object_text->delimiter = null;             /* error */
$object_text->delimiter = ['arg' => '123']; /* error */
$object_text->delimiter = '';
$object_text->text = null;             /* error */
$object_text->text = ['arg' => '123']; /* error */
$object_text->text = '';

$object_text_simple = new text_simple('some raw text');
$object_text_simple->custom_preperty = 'string';
$object_text_simple->weight = null;             /* error */
$object_text_simple->weight = ['arg' => '123']; /* error */
$object_text_simple->weight = 0;
$object_text_simple->delimiter = null;             /* error */
$object_text_simple->delimiter = ['arg' => '123']; /* error */
$object_text_simple->delimiter = '';
$object_text_simple->text = null;             /* error */
$object_text_simple->text = ['arg' => '123']; /* error */
$object_text_simple->text = '';

$result = data_validator::get('attributes')->validate([
    'attributes_other_1' => /* error */ [[['some value 1']]],
    'attributes_other_2' => /* error */ [[['some value 2']]],
    'attributes'         => /* error */ 123,
    'attributes'         => [
        'object_text'        => $object_text,
        'object_text_simple' => $object_text_simple,
        'object_empty'       => /* error */ (object)[],
        'object'             => /* error */ (object)['property_1' => 'value 1', 'property_2' => 'value 2', 'property_3' => 'value 3'],
        'object_nested'      => /* error */ (object)[0 => (object)[0 => 'nested value']],
        'resource'           => /* error */ curl_init(),
        'string'             => 'text',
        'string_empty'       => '',
        'string_true'        => 'true',
        'string_false'       => 'false',
        'integer'            => 123,
        'float'              => 0.000001,
        'boolean_true'       => true,
        'boolean_false'      => false,
        'null'               => null,
        'array_empty'        => [],
        'array'              => [
            'item_string'             => 'text',
            'item_string_empty'       => '',
            'item_string_true'        => 'true',
            'item_string_false'       => 'false',
            'item_integer'            => 123,
            'item_float'              => 0.000001,
            'item_boolean_true'       => /* error */ true,
            'item_boolean_false'      => /* error */ false,
            'item_null'               => /* error */ null,
            'item_array_empty'        => /* error */ [],
            'item_array_nested'       => /* error */ ['nested string'],
            'item_object_text'        => /* error */ $object_text,
            'item_object_text_simple' => /* error */ $object_text_simple,
            'item_object_empty'       => /* error */ (object)[],
            'item_object'             => /* error */ (object)['property_1' => 'value 1', 'property_2' => 'value 2', 'property_3' => 'value 3'],
            'item_object_nested'      => /* error */ (object)[0 => (object)[0 => 'nested value']],
            'item_resource'           => /* error */ curl_init()
        ],
    ],
    'attributes_other_3' => /* error */ [[['some value 3']]],
    'attributes_other_4' => /* error */ [[['some value 4']]],
]);

var_dump(
    md5(serialize($result['trace_info'])) === '68b6a893cd4e7a2bf708b1fc2d8192c8'
);

foreach ($result['errors'] ?? [] as $c_result) {
    message::insert($c_result, 'error');
}
