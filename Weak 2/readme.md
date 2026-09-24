# PHP Practice - Week Two

## Overview

This week focused on PHP control structures, loops, and arrays. I practiced using conditions to control program flow, repeating tasks with different types of loops, and storing multiple values using arrays.

The exercises also helped me understand how PHP can be combined with HTML to display dynamic output in a web page.

## Topics Covered

* Constants with `define()`
* `if...else` statements
* `switch` statements
* Ternary operator
* `while` loop
* `do...while` loop
* `for` loop
* Nested `for` loops
* Indexed arrays
* Associative arrays
* `count()`
* `var_dump()`
* `echo`
* HTML and PHP integration

---

## 1. Constants

I practiced creating a constant using the `define()` function.

A constant is a value that cannot be changed after it has been defined.

### Code

```php
define("AGE", 10);

// echo AGE;
```

In this example, `AGE` is defined as a constant with the value `10`.

---

## 2. If...Else Statement

I practiced using an `if...else` statement to make a decision based on a condition.

### Code

```php
$age = 58;

if ($age > 18)
    echo 'adult';
else
    echo "child";
```

The program checks whether the age is greater than `18`.

* If the condition is true, it displays `adult`.
* Otherwise, it displays `child`.

### Output

```text
adult
```

---

## 3. Switch Statement

I practiced using a `switch` statement to determine a grade based on marks.

### Code

```php
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
```

For example, when the marks are `75`, the program displays:

### Output

```text
B
```

The `break` statement is used to stop the execution of the switch after a matching case is found.



---

## 4. Ternary Operator

I practiced using the ternary operator as a shorter way to write a simple `if...else` condition.

### Code

```php
$fuel = 1.1;

echo $fuel <= 1
    ? "Fill tank now"
    : "there's enough fuel";
```

The condition checks whether the fuel level is less than or equal to `1`.

### Output

```text
there's enough fuel
```


---

## 5. While Loop

I practiced using a `while` loop to repeat a block of code while a condition remains true.

### Code

```php
$count1 = 1;

while($count1 <= 5){
    echo $count1;
    $count1++;
}
```

The loop starts at `1` and continues until the value becomes greater than `5`.

### Output

```text
12345
```

---

## 6. Do...While Loop

I also practiced using a `do...while` loop.

A `do...while` loop executes the code at least once before checking the condition.

### Code

```php
do{
    echo $count1;
    $count1++;
}while($count1 <= 5);
```

---

## 7. For Loop

I practiced using a `for` loop to generate the multiplication table of `12`.

### Code

```php
for($count = 1; $count <= 12; $count++){
    echo "$count times 12 is " . $count * 12 . "<br>";
}
```

### Output

```text
1 times 12 is 12
2 times 12 is 24
3 times 12 is 36
...
12 times 12 is 144
```

---

## 8. Calculating Squares Using a For Loop

I practiced using a `for` loop to calculate the square of numbers from `1` to `10`.

### Code

```php
for($i = 1; $i <= 10; $i++){
    echo "the square of $i " . $i * $i . "<br>";
}
```

### Output

```text
the square of 1 1
the square of 2 4
the square of 3 9
...
the square of 10 100
```


---

## 9. Nested For Loops

I practiced using a loop inside another loop. This is called a nested loop.

### Code

```php
for($i = 1; $i <= 3; $i++){
    for($j = 1; $j <= 5; $j++){
        echo "$i * $j" . ($i * $j);
    }
}
```

A nested loop is useful when working with rows and columns or repeating operations across multiple dimensions.



---

## 10. Rows and Columns with Nested Loops

I also practiced using nested loops to represent rows and columns and calculate their multiplication result.

### Code

```php
for($i = 1; $i <= 2; $i++){
    for($j = 1; $j <= 5; $j++){
        echo "row is $i , column is $j result is "
             . ($i * $j) . "<br>";
    }
}
```

### Example Output

```text
row is 1, column is 1 result is 1
row is 1, column is 2 result is 2
row is 1, column is 3 result is 3
row is 1, column is 4 result is 4
row is 1, column is 5 result is 5
```

---

## 11. Indexed Arrays

I practiced creating an indexed array and accessing its values using indexes.

### Code

```php
$numbers = array("Apple", "Banana", "Watermelon");

echo $numbers[0];
```

PHP automatically assigns numeric indexes to the values:

| Index | Value      |
| ----- | ---------- |
| `0`   | Apple      |
| `1`   | Banana     |
| `2`   | Watermelon |

The first element is accessed using index `0`.

### Output

```text
Apple
```

---

## 12. var_dump()

I practiced using `var_dump()` to inspect the structure and data type of an array.

### Code

```php
var_dump($numbers);
```

`var_dump()` displays detailed information about a variable, including its data type, size, and values.

---

## 13. Displaying Array Values Using a Loop

I practiced using a `for` loop to access and display every element in the array.

### Code

```php
for($count = 0; $count < count($numbers); $count++){
    echo $numbers[$count];
}
```

The `count()` function returns the number of elements in the array.

---

## 14. Associative Arrays

I practiced creating an associative array using named keys instead of numeric indexes.

### Code

```php
$info = array(
    "id" => 1,
    "name" => "hassan",
    "age" => 29,
    "status" => "single"
);

var_dump($info);
```

The array contains the following information:

| Key      | Value    |
| -------- | -------- |
| `id`     | `1`      |
| `name`   | `hassan` |
| `age`    | `29`     |
| `status` | `single` |

Unlike an indexed array, an associative array uses meaningful keys to identify its values.

---

## Conclusion

During Week Two, I practiced important PHP control structures and data structures. I learned how to use conditions, switch statements, loops, nested loops, and different types of arrays.

These exercises helped me understand how PHP controls program flow, repeats operations, and stores multiple values. I also practiced using PHP together with HTML to display dynamic results in a web page.
