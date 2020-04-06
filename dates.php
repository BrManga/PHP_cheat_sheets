<?php
//echo date('d');//day
//echo date('m');//month
//echo date('y');//year iki rakam formati 'Y' 4 rakam formati
//echo date('l');//day of the week
//echo date('m/d/Y');//formatli tarih
//echo date('m-d-Y');
//echo date('h');//hour
//echo date('i');//minutes
//echo date('s');//seconds
//echo date('a');//AM/PM

//Set timezone
date_default_timezone_set('Europe/Berlin');
//echo date('h:i:sa');//formatli
//$timestamp=mktime(10, 14, 54, 7, 24, 1981 );//hours, minutes, seconds, month, day,year
//echo date('d-m-Y h:i:sa', $timestamp);
$timestamp2=strtotime('7:00pm March 22 2017');
$timestamp3=strtotime('tomorrow');
$timestamp4=strtotime('next sunday');
$timestamp5=strtotime('+2 days'); //months,years also possible
//echo $timestamp2;
echo date('d/m/y', $timestamp5)
?>