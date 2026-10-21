
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Results</title>
</head>
<body>

<?php
require_once 'functions.php';

$hasErrors = false;

// Student Full Name
if (!empty($_POST['fullName'])) {
    $fullName = $_POST['fullName'];
} else {
    $fullName = '';
    echo "Student Full Name is required.<hr>";
    $hasErrors = true;
}

// Student ID
if (!empty($_POST['studentId'])) {
    $studentId = $_POST['studentId'];
} else {
    $studentId = '';
    echo "Student ID is required.<hr>";
    $hasErrors = true;
}

// Gender
if (isset($_POST['gender']) && !empty($_POST['gender'])) {
    $gender = $_POST['gender'];
} else {
    $gender = '';
    echo "Gender is required.<hr>";
    $hasErrors = true;
}

// Faculty
if (!empty($_POST['faculty'])) {
    $faculty = $_POST['faculty'];
} else {
    $faculty = '';
    echo "Faculty is required.<hr>";
    $hasErrors = true;
}

// PHP Mark
if (isset($_POST['phpMark']) && $_POST['phpMark'] !== '') {
    $phpMark = $_POST['phpMark'];

    if (!is_numeric($phpMark) || $phpMark < 0 || $phpMark > 100) {
        echo "PHP Mark must be between 0 and 100.<hr>";
        $hasErrors = true;
    }
} else {
    $phpMark = 0;
    echo "PHP Mark is required.<hr>";
    $hasErrors = true;
}

// Database Mark
if (isset($_POST['databaseMark']) && $_POST['databaseMark'] !== '') {
    $databaseMark = $_POST['databaseMark'];

    if (!is_numeric($databaseMark) || $databaseMark < 0 || $databaseMark > 100) {
        echo "Database Mark must be between 0 and 100.<hr>";
        $hasErrors = true;
    }
} else {
    $databaseMark = 0;
    echo "Database Mark is required.<hr>";
    $hasErrors = true;
}

// Networking Mark
if (isset($_POST['networkingMark']) && $_POST['networkingMark'] !== '') {
    $networkingMark = $_POST['networkingMark'];

    if (!is_numeric($networkingMark) || $networkingMark < 0 || $networkingMark > 100) {
        echo "Networking Mark must be between 0 and 100.<hr>";
        $hasErrors = true;
    }
} else {
    $networkingMark = 0;
    echo "Networking Mark is required.<hr>";
    $hasErrors = true;
}

// Certificate
if (!empty($_FILES['certificate']['name'])) {

    $certificateName = $_FILES['certificate']['name'];
    $fileSize = $_FILES['certificate']['size'];
    $fileType = $_FILES['certificate']['type'];

    if ($_FILES['certificate']['error'] != 0) {
        echo "Certificate upload failed.<hr>";
        $hasErrors = true;
    }

    if ($fileSize > 2 * 1024 * 1024) {
        echo "Certificate must not exceed 2 MB.<hr>";
        $hasErrors = true;
    }

    if (file_exists('uploads/' . $certificateName)) {
        echo "Certificate already exists.<hr>";
        $hasErrors = true;
    }

} else {
    $certificateName = '';
    $fileSize = 0;
    $fileType = '';
    echo "Please select a certificate.<hr>";
    $hasErrors = true;
}

// Stop if errors exist
if ($hasErrors) {
    echo "Please correct the errors and try again.<hr>";
    echo '<a href="index.html">Return to Form</a>';
    exit;
}

// Upload Certificate
if (move_uploaded_file(
    $_FILES['certificate']['tmp_name'],
    'uploads/' . $certificateName
)) {
    $uploadStatus = "Uploaded Successfully";
} else {
    echo "Certificate upload failed.<hr>";
    exit;
}

// Calculate Results
$total = calculateTotal($phpMark, $databaseMark, $networkingMark);
$average = calculateAverage($total);
$grade = calculateGrade($average);
$result = checkResult($average);

// Display Results
echo "<h2>Student Examination Results</h2>";

echo "<table border='1' cellpadding='8'>";

echo "<tr><th>Information</th><th>Result</th></tr>";
echo "<tr><td>Student Full Name</td><td>$fullName</td></tr>";
echo "<tr><td>Student ID</td><td>$studentId</td></tr>";
echo "<tr><td>Gender</td><td>$gender</td></tr>";
echo "<tr><td>Faculty</td><td>$faculty</td></tr>";
echo "<tr><td>PHP Mark</td><td>$phpMark</td></tr>";
echo "<tr><td>Database Mark</td><td>$databaseMark</td></tr>";
echo "<tr><td>Networking Mark</td><td>$networkingMark</td></tr>";
echo "<tr><td>Total Marks</td><td>$total</td></tr>";
echo "<tr><td>Average Marks</td><td>$average</td></tr>";
echo "<tr><td>Grade</td><td>$grade</td></tr>";
echo "<tr><td>Pass or Fail</td><td>$result</td></tr>";
echo "<tr><td>Certificate Name</td><td>$certificateName</td></tr>";
echo "<tr><td>File Type</td><td>$fileType</td></tr>";
echo "<tr><td>File Size</td><td>" . ($fileSize / 1024) . " KB</td></tr>";
echo "<tr><td>Upload Status</td><td>$uploadStatus</td></tr>";

echo "</table>";

echo '<br><a href="index.html">Register Another Student</a>';

?>

</body>
</html>
