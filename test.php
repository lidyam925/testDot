<?php

require_once 'employee.php';
require_once 'department.php';
require_once 'company.php';

$name1 = new Department("Product Development");

$name2 = new Company("Dot Malang");

$name3 = new Employee("Lidya");



print_r($name1);

print_r($name2);

print_r($name3);

?>