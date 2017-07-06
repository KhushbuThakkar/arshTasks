<?php
include "src/calculator.php";

try {

    $operation = $argv[1];
    $numbers = (isset($argv[2])) ? $argv[2] : '';
    $calc = new Calculator(new StrParser());
    $calc->setArgs($operation, $numbers);
    print_r($calc->result);

} catch (Exception $e) {
    echo $e->getMessage();
}
