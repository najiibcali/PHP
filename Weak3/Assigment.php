<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assigment weak3 </title>
</head>

<style>
table {
  border-collapse: collapse;
}

th{
  backround-color :blue;
}
</style>
<body>

<?php

$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

//print all numbers of array


echo "print all numbers of array <br>";

foreach($numbers as $number){
    echo $number . "<br>";
}

echo "<br>";

//calculate total of elements of array

$total= 0;

for($i=0;$i<count($numbers);$i++){
    if($numbers >0){
        $total +=$numbers[$i];
    }
}

echo "<br>";

echo "total of array is $total <br>";


//Calculate and print total of even elements

$totalofEvenNumbers = 0;

for($i=0;$i<count($numbers);$i++){
    if($numbers[$i] % 2 ==0 && $numbers >0){
       $totalofEvenNumbers +=$numbers[$i];
    }
}

echo "total of even numbers of array is $totalofEvenNumbers <br>";



//Calculate and print total of odd elements

$totalofOddNumbers = 0;

for($i=0;$i<count($numbers);$i++){
    if($numbers[$i] % 2 !=0){
       $totalofOddNumbers +=$numbers[$i];
    }
}

echo "total of odd numbers of array is $totalofOddNumbers <br>";



$Max = 0;

for($i=0;$i<count($numbers);$i++){
    if($numbers[$i] > $numbers[$Max]){
        $Max = $numbers[$i];
    }
}
 

echo "the max number of array is $numbers[$Max] and the posstion is $Max";

$Min = 0;

for($i=0;$i<count($numbers);$i++){
    if($numbers[$Min] > $numbers[$i]){
        $Min = $numbers[$i];
    }
}

echo "the min number of array is $numbers[$Min]  and the posstion is $Min";






?>

/*Write PHP program that declares an associative array of two dimensions where row names are 
Light, Normal, and Dark, column names are Red, Green, Blue. Array elements are shown in 
the below table, then print array elements as shown in the table. */


<table>
    
    <thead>
        <tr>
            <th></th>
            <th>Red</th>
            <th>Green</th>
            <th>blue</th>
        </tr>
    </thead>
    <?php
    $colors = array (
    array ("Light Red","Light Green","Light Blue"),
    array("Normal Red","Normal Green","Normal Blue"),
    array("Dark Red","Dark Green","Dark Blue")
);

$fristcolum = array("Light","Normal","Dark");

    for ($j = 0; $j < count($colors); $j++) {

            echo "<tr>
            <td>{$fristcolum[$j]}</td>
                    <td>{$colors[$j][0]}</td>
                    <td>{$colors[$j][1]}</td>
                    <td>{$colors[$j][2]}</td>
            </tr>";
        }


       
    ?>
</table>


<table>
    
    <thead>
        <tr>
            <th></th>
            <th>Name</th>
            <th>phone</th>
            <th>address</th>
        </tr>
    </thead>
    <?php
    $personinfo = array (
    array ("Mohamed Ahmed Ali","0648440403","Laba Dhagax, Wardhiigley"),
    array("Ahmed Abdi Jama","0647223201","Taleex, Hodan"),
    array("Amina Nur Adan","0646990276","Macmacaanka, Dharkeynley")
);

$class = array("CA221","CA223","CA221");

    for ($j = 0; $j < count($colors); $j++) {

            echo "<tr>
            <td>{$class[$j]}</td>
                    <td>{$colors[$j][0]}</td>
                    <td>{$colors[$j][1]}</td>
                    <td>{$colors[$j][2]}</td>
            </tr>";
        }


       
    ?>
</table>
    
</body>
</html>