<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<table>
<thead>
<tr>
<th>name</th>
</tr>
</thead>
<tbody>
 <?php

// foreach($info as $row);

$info = array(
    "name"=>"ali",
);
// ?>
<tr>
<?php
   foreach($info as $value){
    '<td>$value</td>';
   }
   ?>
</tr>

</tbody>
</table>

<?php
$number1 = 10;
$number2 = 20;
$number3 = 30;

if($number1 > $number2 && $number1 > $number3){
    echo "greatest is : $number1 <br>";
    if($number2 < $number3){
        echo "smallest is $number2 <br>";
    }
    else{
        echo "smallest is $number3 <br>";
    }
}
elseif($number2 > $number2 && $number2 > $number3){
    echo "greatest is : $number2 <br>";
    if($number1 < $number3){
        echo "smallest is $number1 <br>";
    }
    else{
        echo "smallest is $number3 <br>";
    }
}
elseif($number3 > $number1 && $number3 > $number2){
    echo "greatest is : $number3 <br>";
    if($number2 < $number1){
        echo "smallest is $number2 <br>";
    }
    else{
        echo "smallest is $number1 <br>";
    }
}


if($number1 % 3 == 0 && $number1 % 5 == 0){
    echo "both <br>";
}
elseif($number1 % 3 ==0){
    echo "divisable 3 only <br>";
}
elseif($number1 % 5 == 0){
    echo "divisable 5 only <br>";
}
else {
    echo "none of them <br>";
};



for($i = 1;$i<20;$i+=2){
    echo "$i <br>";
};


echo "35-7 even numbers <br>";

for($i=34;$i>7;$i-=2){
     echo "$i <br>";
}


echo "50 - 2 number divisable 5 and 2 <br>";
for($i = 50;$i>2;$i--){
    if($i % 2 == 0 && $i % 5 == 0){
     echo "$i <br>";
    }
}



// echo "reverse number ";

$number = 12345;
$reverse = 0;

while ($number > 0) {
    $digit = $number % 10;
    $reverse = ($reverse * 10) + $digit;
    $number = (int)($number / 10);
}

echo "Reverse = " . $reverse;



echo "Least Common Multiple <br>";

$numberone= 12;
$numbertwo= 8; 

for($i=1;$i<50;$i++){
    if($i % $numberone == 0 && $i % $numbertwo ==0){
        echo "number is $i <br>";
        break;
    }
};



echo "Highest Common Factor <br>";


$numbertree= 12;
$numberfour= 8; 
$hcf = 0;

for($i=1;$i<50;$i++){
    if($numbertree % $i == 0 && $numberfour % $i ==0){
        $hcf = $i;
    }
};

echo "number is $hcf";


echo "<table border='1' cellpadding='8'>";

for ($i = 1; $i <= 12; $i++) {

    echo "<tr>";

    for ($j = 1; $j <= 12; $j++) {

        echo "<td>" . ($i * $j) . "</td>";

    }

    echo "</tr>";
}

echo "</table>";



echo "Prime number";

$number = 7;
$isPrime = true;

if ($number <= 1) {
    $isPrime = false;
} else {

    for ($i = 2; $i < $number; $i++) {

        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo "$number is a prime number";
} else {
    echo "$number is a non-prime number";
};


echo "numbers 10-50";


for($i =9;$i <=50;$i++){
    echo "$i<br>";
}




?>
    
</body>
</html>