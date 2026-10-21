<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration Result</title>
</head>
<body>

<?php
require_once 'functions.php';

// Employee Full Name
if (!empty($_POST['fullName'])) {
    $fullName = $_POST['fullName'];
    echo "Employee Full Name: " . $fullName . "<hr>";
} else {
    $fullName = '';
    echo "Employee Full Name is required.<hr>";
}

// Employee ID
if (!empty($_POST['employeeId'])) {
    $employeeId = $_POST['employeeId'];
    echo "Employee ID: " . $employeeId . "<hr>";
} else {
    $employeeId = '';
    echo "Employee ID is required.<hr>";
}

// Gender
if (!empty($_POST['gender'])) {
    $gender = $_POST['gender'];
    echo "Gender: " . $gender . "<hr>";
} else {
    $gender = '';
    echo "Gender is required.<hr>";
}

// Department
if (!empty($_POST['department'])) {
    $department = $_POST['department'];
    echo "Department: " . $department . "<hr>";
} else {
    $department = '';
    echo "Department is required.<hr>";
}

// Basic Salary
if (!empty($_POST['basicSalary'])) {
    $basicSalary = $_POST['basicSalary'];
    echo "Basic Salary: " . $basicSalary . "<hr>";
} else {
    $basicSalary = 0;
    echo "Basic Salary is required.<hr>";
}

// Allowance
if (isset($_POST['allowance']) && $_POST['allowance'] !== '') {
    $allowance = $_POST['allowance'];
    echo "Allowance: " . $allowance . "<hr>";
} else {
    $allowance = 0;
    echo "Allowance is required.<hr>";
}

// Deduction
if (isset($_POST['deduction']) && $_POST['deduction'] !== '') {
    $deduction = $_POST['deduction'];
    echo "Deduction: " . $deduction . "<hr>";
} else {
    $deduction = 0;
    echo "Deduction is required.<hr>";
}

// Salary Calculations
$grossSalary = calculateGrossSalary($basicSalary, $allowance);

$bonus = calculateBonus($basicSalary);

$netSalary = calculateNetSalary(
    $grossSalary,
    $bonus,
    $deduction
);

$salaryStatus = checkSalaryStatus($netSalary);

// Display Salary Results
echo "<h2>Salary Results</h2>";

echo "Gross Salary: " . $grossSalary . "<hr>";

echo "Bonus: " . $bonus . "<hr>";

echo "Net Salary: " . $netSalary . "<hr>";

echo "Salary Status: " . $salaryStatus . "<hr>";

// Employee Document
if (!empty($_FILES['employeeDocument']['name'])) {

    $allowed = ["pdf", "doc", "docx", "jpg", "jpeg", "png"];

    $EXTs = explode(".", $_FILES['employeeDocument']['name']);
    $EXTs = strtolower(end($EXTs));

    if (in_array($EXTs, $allowed)) {
        echo "Document Name: " . $_FILES['employeeDocument']['name'] . "<hr>";
        echo "File Size: " . $_FILES['employeeDocument']['size'] . " bytes<hr>";
        echo "File Type: " . $_FILES['employeeDocument']['type'] . "<hr>";
    } else {
        echo "Document extension is not allowed.<hr>";
    }

} else {
    echo "Please select an employee document.<hr>";
}
?>

</body>
</html>