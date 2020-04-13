<?php
$loggedIn=true;
echo ($loggedIn)?'Welcome':'Please sign in';

$isRegistered=($loggedIn==true)?true:false;

$age=20;
$score=15;

echo 'Your score is:'.($score>10?($age>10?'Average':'Excepional'):($age>10?'Horrible':'Average'));

?>
