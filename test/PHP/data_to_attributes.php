<?php

namespace effcore;

$attributes = [
    'string'             => 'text',
    'string_empty'       => '',
    'string_true'        => 'true',
    'string_false'       => 'false',
    'integer'            => 123,
    'float'              => 0.000001,
    'boolean_true'       => true,
    'boolean_false'      => false,
    'null'               => null,
    'object_text'        => new text('some translated text'),
    'object_text_simple' => new text_simple('some raw text'),
    'object_empty'       => (object)[],
    'object'             => (object)['property_1' => 'value 1', 'property_2' => 'value 2', 'property_3' => 'value 3'],
    'object_nested'      => (object)[0 => (object)[0 => 'nested value']],
    'resource'           => curl_init(),
    'array_empty'        => [],
    'array_nested'       => [
        'item_string'             => 'nested text',
        'item_string_empty'       => '',
        'item_string_true'        => 'true',
        'item_string_false'       => 'false',
        'item_integer'            => 456,
        'item_float'              => 0.000002,
        'item_boolean_true'       => true,
        'item_boolean_false'      => false,
        'item_null'               => null,
        'item_object_text'        => new text('some nested translated text'),
        'item_object_text_simple' => new text_simple('some nested raw text'),
        'item_object_empty'       => (object)[],
        'item_object'             => (object)['property_4' => 'value 4', 'property_5' => 'value 5', 'property_6' => 'value 6'],
        'item_object_nested'      => (object)[0 => (object)[0 => 'nested/nested value']],
        'item_resource'           => curl_init(),
        'item_array_empty'        => []
    ]
];

print_R(
    core::data_to_attributes($attributes) === 'string="text" string_empty="" string_true="true" string_false="false" integer="123" float="0.000001" boolean_true object_text="some translated text" object_text_simple="some raw text" object_empty="__NO_RENDERER__" object="__NO_RENDERER__" object_nested="__NO_RENDERER__" resource="__UNSUPPORTED_TYPE__" array_empty="" array_nested="nested text true false 456 0.000002 __UNSUPPORTED_TYPE__ __UNSUPPORTED_TYPE__ __UNSUPPORTED_TYPE__ __UNSUPPORTED_TYPE__ __UNSUPPORTED_TYPE__ __UNSUPPORTED_TYPE__ __UNSUPPORTED_TYPE__ __UNSUPPORTED_TYPE__ __UNSUPPORTED_TYPE__ __UNSUPPORTED_TYPE__"'
);
