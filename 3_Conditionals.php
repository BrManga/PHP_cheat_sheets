
<?php
#CONDITIONAL

/*$num=15;
if($num=='5'){
    echo true;
}else if ($num==15) {
    echo 'passed';
}
else {
    echo 'did not pass';
}*/
$num=5;
/*if($num>4){
    if($num<=10){
        echo 'number is between 5 and 10';
    }else{
        echo 'number is greater than 10';
    }
}else{
    echo 'number is smaller than 5';
}*/

#LOGICAL OPERATORS  AND &&  ----  or || ------ xor

/*if($num>4 and $num<10){
    echo 'number is between 4 and 10';
}*/

#SWITCHES
$favColor='green';
switch ($favColor){
case 'red':
    echo 'color is red';
    break;
case 'blue':
    echo 'color is blue';
    break;
default;
    echo 'no color match';
}

?>
