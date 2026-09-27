<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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

// $numbers = 1234;
// $reversenumbers = 0;







?>
    
</body>
</html>