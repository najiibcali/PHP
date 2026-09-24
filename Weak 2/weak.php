<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weak 2</title>
</head>
<body>

<?php
define("AGE",10);

// echo AGE;
$age = 58;
if($age > 18)
    echo 'adult';
else
    echo "child";
$marks = 75;

switch($marks){
    case ($marks >= 90):
        echo "A+";
        break;
    case ($marks >= 80):
        echo "A";
        break;
    case ($marks >= 70):
        echo "B";
        break;
    case ($marks >= 60):
        echo "C";
        break;
    default:
        echo "fail";
        break;
}

$fuel = 1.1;
echo $fuel <= 1 ? "Fill tank now" : "there's enough fuel";

$count1 = 1;

while($count1 <= 5){
    echo $count1;
    $count1++;
}

do{
    echo $count1;
    $count1++;
}while($count1 <= 5);

for($count = 1; $count <=12;$count++){
    echo "$count times 12 is ". $count*12 . "<br>";
}

for($i = 1; $i<=10;$i++){
    echo "the square of $i ". $i * $i ."<br>";
}

for($i= 1;$i<=3;$i++){
    for($j=1;$j<=5;$j++){
        echo "$i * $j".($i*$j);
    }
}


for($i=1; $i<=2;$i++){
    for($j=1;$j<=5;$j++){
        echo "row is $i , column is $j result is".($i*$j) . "<br>";
    }
}

//create array + intail value
$numbers = array("Apple","Banana","Watermelon");

//print array using echo and var_dump
echo $numbers[0];
var_dump($numbers);

// //display array using print-r and pre tag or var_dum
echo "<pre>";
// print_r($numbers);
var_dump($numbers);
echo "<pre>";

for($count = 0;$count <count($numbers);$count++){
    echo $numbers[$count];
};


$info = array(
    "id"=> 1,
    "name"=> "hassan",
    "age"=>29,
    "status"=> "single"
);


var_dump($info);



?>
    
</body>
</html>