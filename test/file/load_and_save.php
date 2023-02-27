<?php

$test = new file(dir_dynamic.'test.txt');
$data = $test->data_get();
$data.= url::get_current()->full_get();
$data.= "\n";
$test->data_set($data);
$test->save();
