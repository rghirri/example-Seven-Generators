<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "./classes/EmployeeData.php";
require "./classes/CakeDay.php";

$fileName = 'employee-birthdates.txt';



$lineGeneratorEmployee = EmployeeData::getEmployeeData($fileName);
$lineGeneratorCompareDates = EmployeeData::getEmployeeData($fileName);

foreach ($lineGeneratorEmployee as $lineEmployee) {
if ($lineGeneratorEmployee->current()->name == "") {
  exit();
}
  
  
  $currentDay = $lineEmployee->birthDay;
  $nextDates = $lineGeneratorCompareDates->next();
  $nextDates = $lineGeneratorCompareDates->current()->birthDay;
  
  // $IsDateRow = CakeDay::IsDateRow($nextDates, $currentDay);

  // if ($IsDateRow){
  //   echo $lineEmployee->name. "</br>";
  //   echo $lineEmployee->birthDay. "</br>";
  //   echo $lineGeneratorCompareDates->current()->name. "</br>";
  //   echo $lineGeneratorCompareDates->current()->birthDay. "</br>";
  // }

  //  $IsDateDup = CakeDay::IsDateDup($nextDates, $currentDay);

  // if ($IsDateDup){
  //   echo $lineEmployee->name. "</br>";
  //   echo $lineEmployee->birthDay. "</br>";
  //   echo $lineGeneratorCompareDates->current()->name. "</br>";
  //   echo $lineGeneratorCompareDates->current()->birthDay. "</br>";
  // }

  
  

}