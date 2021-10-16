<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "./classes/EmployeeData.php";
require "./classes/CompareDate.php";

$fileName = 'employee-birthdates.txt';



$lineGeneratorEmployee = EmployeeData::getEmployeeData($fileName);
//$lineGeneratorCompareDates = EmployeeData::CompareDates($fileName);

foreach ($lineGeneratorEmployee as $lineEmployee) {
  //var_dump($lineEmployee);
  // var_dump($lineGeneratorCompareDates->current());
if ($lineGeneratorEmployee->current()->name == "") {
  exit();
}
  $currentDay = $lineGeneratorEmployee->current()->birthDay;

  $currentDay = new \DateTime($currentDay);
  $nextDates = $lineGeneratorEmployee->next();
  $nextDates = $lineGeneratorEmployee->current();
  $nextDates = new \DateTime($nextDates->birthDay);

  $dateDiff = date_diff($nextDates, $currentDay);

  if ($dateDiff->d == 1){
    echo $lineEmployee->name. "</br>";
    echo $lineEmployee->birthDay. "</br>";
    echo $lineGeneratorEmployee->current()->name. "</br>";
    echo $lineGeneratorEmployee->current()->birthDay. "</br>";
  }

  //var_dump($lineEmployee);
    
    //var_dump($dateDiff->d);

    
    
    //$dateDiff = $nextDates - $currentDay;

    // var_dump(gettype($nextDates));
    
    //$lineGeneratorCompareDates->next();
}


// $both = new MultipleIterator();
// $both->attachIterator($lineGeneratorEmployee);
// $both->attachIterator($lineGeneratorCompareDates);


// foreach ($both as list($valueA, $valueB)) {
  
  

//   }
  




// foreach ($lineGeneratorDayMonth as $lineDayMonth) {
//   $birthDate = $lineGeneratorEmployee->
//   $dateOfBirth = new \DateTime($birthDate);
//   $dateOfBirth = $dateOfBirth->format('m-d');
//   if 
//   var_dump($lineDayMonth);
// }