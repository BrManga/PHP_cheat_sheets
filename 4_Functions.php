<?php
#FUNCTIONS
function simpleFunction(){
    echo 'Hallo';
};
//simpleFunction();

//Function with parameters
function sayHello($name='World'){  //Default da verdik
 echo 'Hello '.$name;   
}
//sayHello('Bora');
//sayHello();

//return something from functions
function addNumbers($num1, $num2){
    return $num1 + $num2;
}
//echo addNumbers(4,7);

//Passing arguments by reference
$myNum=10;
function addFive($num){
    $num+=5;
}
function addTen(&$num){  //& isareti koyarak gönderilen deger degisti
    $num+=10;
}
addFive($myNum);
echo "Value: $myNum";

addTen($myNum);
echo "Value: $myNum" 

?>