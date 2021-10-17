<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class cakeDay{


  public static function IsDateRow($nextDay, $currentDay){

    $currentDay = new \DateTime($currentDay);
    $nextDay = new \DateTime($nextDay);
    $dateDiff = date_diff($nextDay, $currentDay);

    if ($dateDiff->d == 1){
      return true;
    }
    return false;
  
}

public static function IsDateDup($currentDay,$fileName){
  $dupDay = self::datePattern($fileName);
  $currentDay = new \DateTime($currentDay);
  //$nextDay = new \DateTime($nextDay);
  $currentDay = $currentDay->format('m-d');
  //$nextDay = $nextDay->format('m-d');

  //var_dump($dupDate);
 
  // if ((in_array($currentDay, $dupDay)) || (in_array($nextDay, $dupDay))){
  //   return true;
  // }else
  // {
  // return false;
  // }

  if ((in_array($currentDay, $dupDay))){
      return true;
    }else
    {
    return false;
    }

}

public static function datePattern($file){
  $myfile = fopen($file, "r") or die("Unable to open file!");
  $dupPat = [];
// Output one line until end-of-file
while(!feof($myfile)) {
  $str = fgets($myfile);
  $employeeDateArray = explode(",",$str);
  $birthDate = isset($employeeDateArray[1]) ? $employeeDateArray[1] : null;
  $dateOfBirth = new \DateTime($birthDate);
  $dateOfBirth = $dateOfBirth->format('m-d');
  $dupPat [] = $dateOfBirth;

}
fclose($myfile);
return self::dups($dupPat);
}

public static function dups($array){
$array_temp = array();
$patDupReturn = array();
   foreach($array as $val)
   {
     if (!in_array($val, $array_temp))
     {
       $array_temp[] = $val;
     }
     else
     {
      $patDupReturn [] = $val;
     }
   }
   return $patDupReturn;
  }

}