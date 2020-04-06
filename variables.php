<?php
/* $output = 'Hello World';
echo $output; */
//ARRAYS
//$people=array("Bora", "Jovan", "Hasan");
$cars=["Honda", "Ford", "VW"];
$cars[3]="Chevy";
$cars[]="BMW"; //Bos birakinca sona yazar

//echo $cars[3];
//print_r($cars);//Tüm array i yazdirir
//echo count($cars);//Array de kac eleman var
//var_dump($cars);//array ve icindekilerin tiplerini de gösterir

//Associative arrays (key and value)
$people=array('Bora'=>35, 'Brad'=>35);
//echo $people['Bora'];//key ile yazdiriyoruuz
$ids=[22=>"Brad", 39=>"Bora"];
//echo $ids[22];
//$people['Jill']=42;

//Multi-dimensional Array
$cars=array(
    array('Honda', 20,10),
    array('BMW', 10,5),
    array('VW', 25,13)
);
//echo $cars[1][0];
print_r($cars)
?>
