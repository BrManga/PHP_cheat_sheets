<?php
#LOOPS
#FOR
/*for($i=0;$i<=10;$i++){
    echo 'Number'.$i;
}*/
#WHILE
$i=0;
/*while($i<10){
    echo $i;
    $i++;
}*/
#DO ... WHILE

/*do {
    echo $i;
    $i++;
} while($i<10);*/

#FOREACH
$people=array('Brad', 'Willy', 'Bora');
foreach($people as $person){
    echo $person.' ';
}

$people=array('Brad'=>'brad@gmail.com', 'Willy'=>'willy@gmx.de', 'Bora'=>'bora@my.net');
foreach($people as $person => $email){
    echo $person.' :'.$email;
}
?>