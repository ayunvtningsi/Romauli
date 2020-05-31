<?php

/* 
 Romauli Feronica Siregar
 */

require_once 'Employee.php';
require_once 'Department.php';
require_once 'Company.php';

$emp1= new Employee();

echo "DATA KARYAWAN:";

$emp1->setEmployeeName("roma");
echo '';

$emp1->getEmployeeTitle();
echo '<br>';

$emp1->getEmployeeMontlySalary();
echo '<br>';

$emp1->getProfileEmployee();
echo '<br>';

$emp2= new Department();
echo $emp2->getDepartmentName();


$emp3= new Company();
echo $emp3->getCompanyName();

