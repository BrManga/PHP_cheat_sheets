<?php
#Validate data in input
if (filter_has_var(INPUT_POST,'data')){
    echo 'Data Found';
} else {
    echo 'No Data';
}
#Validate if it is an email
if (filter_has_var(INPUT_POST,'data')){
if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
    echo 'Email is valid';
} else{ 
    echo 'Email is not valid';
}
}

#Integer Validation
$var=23;
if(filter_var($var, FILTER_VALIDATE_INT)){
    echo $var. ' is a number';
}

$number='4543j5kbnk5345435jkn3j5n43l5435434';
var_dump(filter_var($number, FILTER_SANITIZE_NUMBER_INT)); #Just numbers stay

#filter array
$filter=array(
    "data"=>FILTER_VALIDATE_EMAIL,
    "data2"=>array(
        "filter"=>FILTER_VALIDATE_INT,
        "options"=>array(
            "min_range"=>1,
            "max_range"=>100
        )
        )
        );
print_r(filter_input_array(INPUT_POST, $filter));

$arr=array(
    "name"=>"brad",
    "age"=>"22",
    "email"=>"br@gmail.com"
);
$filter1=array(
    "name"=>array(
       "filter"=>FILTER_CALLBACK,
       "options"=>"ucwords" 
    ),
    "age"=>array(
        "filter"=>FILTER_VALIDATE_INT,
    "options"=>array(
        "min_range"=>1,
        "max_range"=>120
    )
    ),
    "email"=>FILTER_VALIDATE_EMAIL

);
print_r(filter_var_array($arr, $filter1));
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"># for method="get" write INPUT_GET
<input type="text" name="data">
<input type="text" name="data2">
<button type="submit">Submit</button>
</form>