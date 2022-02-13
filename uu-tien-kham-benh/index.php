<?php
include_once "Patient.php";
include_once "PatientList.php";

$patient1 = new Patient('John', 1);
$patient2 = new Patient('Paul', 1);
$patient3 = new Patient('George', 2);
$patient4 = new Patient('Ringo', 3);
$list = new PatientList();
$stmt = $list->__toString();
echo $stmt;
$list->enqueue($patient1);