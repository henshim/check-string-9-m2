<?php
include_once 'Symmetrical.php';

$test=new Symmetrical();
$test->setString('able was I ere I saw elba');
$test->pushArray();
echo '<pre>';
print_r($test->queue);
print_r($test->stack);
print_r($test->testSymmetrical());