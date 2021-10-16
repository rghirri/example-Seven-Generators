<?php
require "./classes/CakeDay.php";

class EmployeeData{

  public static function getEmployeeData($fileName)
  {
    $myfile = fopen($fileName, "r") or die("Unable to open file!");
    // Output one line until end-of-file
    $lineArray = array();
    while(!feof($myfile)) {
      $str = fgets($myfile);
      $employeeDateArray = explode(",",$str);
      $lineArray = array('name' => $employeeDateArray[0], 'birthDay' => isset($employeeDateArray[1]) ? $employeeDateArray[1] : null);
      
      $dateOfBirth = new \DateTime($lineArray['birthDay']);
      $currentDate = $dateOfBirth->format(date("Y")."-m-d");
      $age = date_diff($dateOfBirth, date_create($currentDate));
      $years = "P".$age->format("%y")."Y";
      $dateOfBirth->add(new DateInterval($years));
      $dateOfBirth = $dateOfBirth->format('Y-m-d');
      $employee = new CakeDay($lineArray['name'], $dateOfBirth);
      
      
  
      yield $employee;

    }
    fclose($myfile);
  }

  // public static function CompareDates($fileName)
  // {
  //   $myfile = fopen($fileName, "r") or die("Unable to open file!");
  //   // Output one line until end-of-file
  //   $lineArray = array();
  //   while(!feof($myfile)) {
  //     $str = fgets($myfile);
  //     $employeeDateArray = explode(",",$str);
  //     $lineArray = array('compareDates' => isset($employeeDateArray[1]) ? $employeeDateArray[1] : null);
      
  //     $dateOfBirth = new \DateTime($lineArray['compareDates']);
  //     $currentDate = $dateOfBirth->format(date("Y")."-m-d");
  //     $age = date_diff($dateOfBirth, date_create($currentDate));
  //     $years = "P".$age->format("%y")."Y";
  //     $dateOfBirth->add(new DateInterval($years));
  //     $dateOfBirth = $dateOfBirth->format('Y-m-d');
  //     $compareDates = new CompareDates($dateOfBirth);
  
  //     yield $compareDates;
   
    
  //   }
  //   fclose($myfile);
  // }


  

}