<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "./classes/ExtraCode.php";

class cakeDay{


  public static function IsDateRow($nextDay, $currentDay)
  {

    $currentDay = new \DateTime($currentDay);
    $nextDay = new \DateTime($nextDay);
    $dateDiff = date_diff($nextDay, $currentDay);

    if ($dateDiff->d == 1){
      return true;
    }
    return false;
  
}

public static function IsDateDup($currentDay,$fileName)
{
  $dupDay = ExtraCode::datePattern($fileName);
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

  if ((in_array($currentDay, $dupDay)))
  
  {
      return true;
    }else
    {
    return false;
    }

}

public static function IsDateFri($currentDay)
{
      $currentDay = new \DateTime($currentDay);
      $timestamp = strtotime($currentDay->format('Y-m-d'));
      $cakeDay = date('D', $timestamp);
      
      
      if ($cakeDay == "Fri"){
        return true;
      }
      else
      {
        return false;
      }
}

public static function IsDateSat($currentDay)
{
      $currentDay = new \DateTime($currentDay);
      $timestamp = strtotime($currentDay->format('Y-m-d'));
      $cakeDay = date('D', $timestamp);
      
      
      if ($cakeDay == "Sat"){
        return true;
      }
      else
      {
        return false;
      }
}

public static function IsDateSun($currentDay)
{
      $currentDay = new \DateTime($currentDay);
      $timestamp = strtotime($currentDay->format('Y-m-d'));
      $cakeDay = date('D', $timestamp);
      
      
      if ($cakeDay == "Sun"){
        return true;
      }
      else
      {
        return false;
      }
}

public static function IsDateChris($currentDay)
{
  $currentDay = new \DateTime($currentDay);
  $currentDay = $currentDay->format('m-d');

  if ($currentDay == "12-25")
  
  {
      return true;
    }else
    {
    return false;
    }

}

public static function IsDateBox($currentDay)
{
  $currentDay = new \DateTime($currentDay);
  $currentDay = $currentDay->format('m-d');

  if ($currentDay == "12-26")
  
  {
      return true;
    }else
    {
    return false;
    }

}

public static function IsDateNewYear($currentDay)
{
  $currentDay = new \DateTime($currentDay);
  $currentDay = $currentDay->format('m-d');

  if ($currentDay == "01-01")
  
  {
      return true;
    }else
    {
    return false;
    }

}

}