<?php

class cakeDay{


  public static function IsDateRow($nextDate, $currentDate){

    $currentDate = new \DateTime($currentDate);
    $nextDate = new \DateTime($nextDate);
    $dateDiff = date_diff($nextDate, $currentDate);

    if ($dateDiff->d == 1){
      return true;
    }
    return false;
  
}

public static function IsDateDup($nextDate, $currentDate){

  // $currentDate = new \DateTime($currentDate);
  // $nextDate = new \DateTime($nextDate);
  // $dateDiff = date_diff($nextDate, $currentDate);

  if ($nextDate == $currentDate){
    return true;
  }
  return false;

}


}