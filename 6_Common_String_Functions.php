<?php
$output=substr('Hello',1); # result=> 'ello'
$output1=substr('Hello',1,3); # result=> 'ell'
$output2=substr('Hello',-2); # result=> 'lo'

#length of string
$output3=strlen('Hello World'); # result=> 11
#string position
$output4=strpos('Hello World', 'o'); # result=> 4
$output5=strrpos('Hello World', 'o'); # result=> 7 last position
#Trimming white space
$output6=trim('Hello              World            ');
var_dump($output6);# result 11 space is gone 

$output7=strtoupper('Hello World'); # result=> 'HELLO WORLD'
$output8=strtolower('Hello World'); # result=> 'hello world'
$output9=ucwords('hello world'); # result=> 'Hello World'
#string replace
$output10=('Hello World'); 
str_replace('World', 'Everyone', $output10);# 'Hello Everyone'

$output11=is_string($output10);# result 1 (means true )

?>