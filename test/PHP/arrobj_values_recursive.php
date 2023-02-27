<?php

class type_1 {
    public $id;
    public $children = [];
    function __construct($properties) {
        foreach ($properties as $c_key => $c_value) {
            $this->{$c_key} = $c_value;
        }
    }
}

$data['type_1']['module_1']['row_id_1'] = new T(['id' => 'type_1-module_1-row_id_1']);
$data['type_1']['module_1']['row_id_2'] = new T(['id' => 'type_1-module_1-row_id_2']);
$data['type_1']['module_1']['row_id_3'] = new T(['id' => 'type_1-module_1-row_id_3']);
$data['type_1']['module_2']['row_id_4'] = new T(['id' => 'type_1-module_2-row_id_4']);
$data['type_1']['module_2']['row_id_5'] = new T(['id' => 'type_1-module_2-row_id_5']);
$data['type_1']['module_2']['row_id_6'] = new T(['id' => 'type_1-module_2-row_id_6']);
$data['type_1']['module_3']['row_id_7'] = new T(['id' => 'type_1-module_3-row_id_7']);
$data['type_1']['module_3']['row_id_8'] = new T(['id' => 'type_1-module_3-row_id_8']);
$data['type_1']['module_3']['row_id_9'] = new T(['id' => 'type_1-module_3-row_id_9',
    'children' => [
        'child_1' => new T(['id' => 'type_1-module_3-row_id_9-children-child_1']),
        'child_2' => new T(['id' => 'type_1-module_3-row_id_9-children-child_2']),
        'child_3' => new T(['id' => 'type_1-module_3-row_id_9-children-child_3']),
    ]
]);

$expected[0] = [
    '0'  => 'type_1/module_1/row_id_1/id',
    '1'  => 'type_1/module_1/row_id_2/id',
    '2'  => 'type_1/module_1/row_id_3/id',
    '3'  => 'type_1/module_2/row_id_4/id',
    '4'  => 'type_1/module_2/row_id_5/id',
    '5'  => 'type_1/module_2/row_id_6/id',
    '6'  => 'type_1/module_3/row_id_7/id',
    '7'  => 'type_1/module_3/row_id_8/id',
    '8'  => 'type_1/module_3/row_id_9/children/child_1/id',
    '9'  => 'type_1/module_3/row_id_9/children/child_2/id',
    '10' => 'type_1/module_3/row_id_9/children/child_3/id',
    '11' => 'type_1/module_3/row_id_9/id'
];

$expected[1] = [
    '0'  => 'type_1',
    '1'  => 'type_1/module_1',
    '2'  => 'type_1/module_1/row_id_1',
    '3'  => 'type_1/module_1/row_id_1/children',
    '4'  => 'type_1/module_1/row_id_1/id',
    '5'  => 'type_1/module_1/row_id_2',
    '6'  => 'type_1/module_1/row_id_2/children',
    '7'  => 'type_1/module_1/row_id_2/id',
    '8'  => 'type_1/module_1/row_id_3',
    '9'  => 'type_1/module_1/row_id_3/children',
    '10' => 'type_1/module_1/row_id_3/id',
    '11' => 'type_1/module_2',
    '12' => 'type_1/module_2/row_id_4',
    '13' => 'type_1/module_2/row_id_4/children',
    '14' => 'type_1/module_2/row_id_4/id',
    '15' => 'type_1/module_2/row_id_5',
    '16' => 'type_1/module_2/row_id_5/children',
    '17' => 'type_1/module_2/row_id_5/id',
    '18' => 'type_1/module_2/row_id_6',
    '19' => 'type_1/module_2/row_id_6/children',
    '20' => 'type_1/module_2/row_id_6/id',
    '21' => 'type_1/module_3',
    '22' => 'type_1/module_3/row_id_7',
    '23' => 'type_1/module_3/row_id_7/children',
    '24' => 'type_1/module_3/row_id_7/id',
    '25' => 'type_1/module_3/row_id_8',
    '26' => 'type_1/module_3/row_id_8/children',
    '27' => 'type_1/module_3/row_id_8/id',
    '28' => 'type_1/module_3/row_id_9',
    '29' => 'type_1/module_3/row_id_9/children',
    '30' => 'type_1/module_3/row_id_9/children/child_1',
    '31' => 'type_1/module_3/row_id_9/children/child_1/children',
    '32' => 'type_1/module_3/row_id_9/children/child_1/id',
    '33' => 'type_1/module_3/row_id_9/children/child_2',
    '34' => 'type_1/module_3/row_id_9/children/child_2/children',
    '35' => 'type_1/module_3/row_id_9/children/child_2/id',
    '36' => 'type_1/module_3/row_id_9/children/child_3',
    '37' => 'type_1/module_3/row_id_9/children/child_3/children',
    '38' => 'type_1/module_3/row_id_9/children/child_3/id',
    '39' => 'type_1/module_3/row_id_9/id'
];

$values_1 = array_keys(core::arrobj_select_values_recursive($data));
$values_2 = array_keys(core::arrobj_select_values_recursive($data, true));
sort($values_1);
sort($values_2);
print_R( ($values_1 == $expected[0] ? 'true' : 'FALSE').nl );
print_R( ($values_2 == $expected[1] ? 'true' : 'FALSE').nl );
