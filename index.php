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
  $nextName = $lineGeneratorCompareDates->current()->name;
  
  
  $IsDateRow = CakeDay::IsDateRow($nextDay, $currentDay);

  if ($IsDateRow){
      //  Fri, Sat, Sun, Christmasday, Boxingday, NewYear test
      // Fri
      $IsDateFriNext = CakeDay::IsDateFri($nextDay);
      $IsDateFriCurrent = CakeDay::IsDateFri($currentDay);
      //*************************************************** */
      // Sat
      $IsDateSatNext = CakeDay::IsDateSat($nextDay);
      $IsDateSatCurrent = CakeDay::IsDateSat($currentDay);
      /**************************************************** */
      // Sun
      $IsDateSunNext = CakeDay::IsDateSun($nextDay);
      $IsDateSunCurrent = CakeDay::IsDateSun($currentDay);
      /**************************************************** */
      if ($IsDateFriNext){
        $currentDays = '5';
        $nextDays = '4';
        CakeDay::DisplayOutput($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays);
      }
      elseif ($IsDateFriCurrent){
        $currentDays = '4';
        $nextDays = '3';
        CakeDay::DisplayOutput($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays);
      }
      elseif ($IsDateSatNext){
        $currentDays = '5';
        $nextDays = '4';
        CakeDay::DisplayOutput($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays);
      }
      elseif ($IsDateSatCurrent){
        $currentDays = '3';
        $nextDays = '2';
        CakeDay::DisplayOutput($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays);
      }

      elseif ($IsDateSunNext){
        $currentDays = '5';
        $nextDays = '4';
        CakeDay::DisplayOutput($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays);
      }
      elseif ($IsDateSunCurrent){
        $currentDays = '3';
        $nextDays = '2';
        CakeDay::DisplayOutput($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays);
      }


      else
      {
        $currentDays = '2';
        $nextDays = '1';
        CakeDay::DisplayOutput($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays);
      }

      
    // $currentDay =  $lineEmployee->birthDay;
    // $nextDay =  $lineGeneratorCompareDates->current()->birthDay;
    // $currentName =  $lineEmployee->name;
    // $nextName =  $lineGeneratorCompareDates->current()->name;
    // echo "Row dates </br>";
    // echo $currentName."</br>";
    // echo $currentDay."</br>";
    // echo $nextName."</br>";
    // echo $nextDay."</br>";
  }

  
  //$IsDateDup = CakeDay::IsDateDup($currentDay,$fileName);

  // if ($IsDateDup){
  //   echo $currentName. "</br>";
  //   echo $currentDay. "</br>";
    // echo $lineGeneratorCompareDates->current()->name. "</br>";
    // echo $lineGeneratorCompareDates->current()->birthDay. "</br>";
  // }

  //$IsDateFri = CakeDay::IsDateFri($currentDay);

  //if ($IsDateFri){
    // echo $currentName. "</br>";
    // echo $currentDay. "</br>";
    // echo $lineGeneratorCompareDates->current()->name. "</br>";
    // echo $lineGeneratorCompareDates->current()->birthDay. "</br>";
  //}

 // $IsDateSat = CakeDay::IsDateSat($currentDay);

//   if ($IsDateSat){
//     // echo $currentName. "</br>";
//     // echo $currentDay. "</br>";
//     // echo $lineGeneratorCompareDates->current()->name. "</br>";
//     // echo $lineGeneratorCompareDates->current()->birthDay. "</br>";
//   }

//  // $IsDateSun = CakeDay::IsDateSun($currentDay);

//   if ($IsDateSun){
//     // echo $currentName. "</br>";
//     // echo $currentDay. "</br>";
//     // echo $lineGeneratorCompareDates->current()->name. "</br>";
//     // echo $lineGeneratorCompareDates->current()->birthDay. "</br>";
//   }

//  // $IsDateChris = CakeDay::IsDateChris($currentDay);
  
//   if ($IsDateChris){
//     // echo $currentName. "</br>";
//     // echo $currentDay. "</br>";
//     // echo $lineGeneratorCompareDates->current()->name. "</br>";
//     // echo $lineGeneratorCompareDates->current()->birthDay. "</br>";
//   }

//   //$IsDateBox = CakeDay::IsDateBox($currentDay);
  
//   if ($IsDateBox){
//     // echo $currentName. "</br>";
//     // echo $currentDay. "</br>";
//     // echo $lineGeneratorCompareDates->current()->name. "</br>";
//     // echo $lineGeneratorCompareDates->current()->birthDay. "</br>";
//   }

//   //$IsDateNewYear = CakeDay::IsDateNewYear($currentDay);
  
//   if ($IsDateNewYear){
//     // echo $currentName. "</br>";
//     // echo $currentDay. "</br>";
//     // echo $lineGeneratorCompareDates->current()->name. "</br>";
//     // echo $lineGeneratorCompareDates->current()->birthDay. "</br>";
//   }


}