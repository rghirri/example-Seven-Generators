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
  
  $currentName = $lineEmployee->name;
  $currentDay = $lineEmployee->birthDay;
  $nextDay = $lineGeneratorCompareDates->next();
  $nextDay = $lineGeneratorCompareDates->current()->birthDay;
  
  $IsDateRow = CakeDay::IsDateRow($nextDay, $currentDay);

  // if ($IsDateRow){
  //   $currentDay =  $lineEmployee->birthDay;
  //   $nextDay =  $lineGeneratorCompareDates->current()->birthDay;
  //   $currentName =  $lineEmployee->name;
  //   $nextName =  $lineGeneratorCompareDates->current()->name;
  //   echo "Row dates </br>";
  //   echo $currentName."</br>";
  //   echo $currentDay."</br>";
  //   echo $nextName."</br>";
  //   echo $nextDay."</br>";
  // }

  
  $IsDateDup = CakeDay::IsDateDup($currentDay,$fileName);

  // if ($IsDateDup){
  //   echo $currentName. "</br>";
  //   echo $currentDay. "</br>";
    // echo $lineGeneratorCompareDates->current()->name. "</br>";
    // echo $lineGeneratorCompareDates->current()->birthDay. "</br>";
  // }

  $IsDateFri = CakeDay::IsDateFri($currentDay);

  if ($IsDateFri){
    // echo $currentName. "</br>";
    // echo $currentDay. "</br>";
    // echo $lineGeneratorCompareDates->current()->name. "</br>";
    // echo $lineGeneratorCompareDates->current()->birthDay. "</br>";
  }

  $IsDateSat = CakeDay::IsDateSat($currentDay);

  if ($IsDateSat){
    echo $currentName. "</br>";
    echo $currentDay. "</br>";
    // echo $lineGeneratorCompareDates->current()->name. "</br>";
    // echo $lineGeneratorCompareDates->current()->birthDay. "</br>";
  }

  $IsDateSun = CakeDay::IsDateSun($currentDay);

  if ($IsDateSun){
    // echo $currentName. "</br>";
    // echo $currentDay. "</br>";
    // echo $lineGeneratorCompareDates->current()->name. "</br>";
    // echo $lineGeneratorCompareDates->current()->birthDay. "</br>";
  }
  

}