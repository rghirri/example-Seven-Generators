<?php

class ExtraCode{ 

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