<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "./classes/EmployeeData.php";
require "./classes/CompareDate.php";

$fileName = 'employee-birthdates.txt';



$lineGeneratorEmployee = EmployeeData::getEmployeeData($fileName);
$lineGeneratorCompareDates = EmployeeData::getEmployeeData($fileName);

foreach ($lineGeneratorEmployee as $lineEmployee) {
if ($lineGeneratorEmployee->current()->name == "") {
  exit();
}
  $currentDay = $lineEmployee->birthDay;
  $currentDay = new \DateTime($currentDay);
  $nextDates = $lineGeneratorCompareDates->next();
  $nextDates = $lineGeneratorCompareDates->current()->birthDay;
  $nextDates = new \DateTime($nextDates);

  $dateDiff = date_diff($nextDates, $currentDay);

  if ($dateDiff->d == 1){
    echo $lineEmployee->name. "</br>";
    echo $lineEmployee->birthDay. "</br>";
    echo $lineGeneratorCompareDates->current()->name. "</br>";
    echo $lineGeneratorCompareDates->current()->birthDay. "</br>";
  }

}