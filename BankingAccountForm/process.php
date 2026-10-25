
<?php

require_once("function.php");

if(!empty($_POST['Customer_FullName'])){
    echo "Customer_FullName :" .$_POST['Customer_FullName'] . "<hr>"; 
}
else {
    echo "Customer_FullName is required";
}

if(!empty($_POST['Account_Number'])){
    echo "Account_Number :" .$_POST['Account_Number']. "<hr>";
}
else {
    echo "Account_Number is required";
}

if (!empty($_POST['gender'])) {
    $gender = $_POST['gender'];
    echo $gender . "<hr>";
} else {
    echo "Gender is required.<hr>";
}

if (!empty($_POST['Account_Type'])) {
    $Account_Type = $_POST['Account_Type'];
    echo $Account_Type . "<hr>";
} else {
    echo "Account_Type is required.<hr>";
}

if (isset($_POST['Opening_Balance']) && !empty($_POST['Opening_Balance'])) {
    $Opening_Balance = $_POST['Opening_Balance'];
    echo $Opening_Balance . "<hr>";
} else {
    echo "Opening_Balance is required.<hr>";
}

if (!empty($_POST['Transaction_Type'] )) {
    $Transaction_Type = $_POST['Transaction_Type'];
    echo $Transaction_Type . "<hr>";
} else {
    echo "Transaction_Type is required.<hr>";
}

if (!empty($_POST['Account_Duration'] )) {
    $Account_Duration = $_POST['Account_Duration'];
    echo $Account_Duration . "<hr>";
} else {
    echo "Account_Duration is required.<hr>";
}


if (!empty($_FILES['image']['name'])) {

    $image = $_FILES['image']['name'] ;
    $fileSize = $_FILES['image']['size'];
    $fileType = $_FILES['image']['type'];

    echo "filename :" . $image . "</hr>";
    echo "fileSize :" . $fileSize . "</hr>";
    echo "fileType :" >$fileType . "</hr>";
    if ($fileSize > 2 * 1024 * 1024) {
        echo "file must be less then  2 MB.<hr>";
    }

    if (file_exists('uploads/' . $image)) {
        echo "file already exists.<hr>";
    }

    if (move_uploaded_file(
    $_FILES['image']['tmp_name'],
    'uploads/' . $image))
     {
        echo "suceesfull";
     } 
     else {
    echo "file upload failed.<hr>";
    }

    
}
else{
    echo "file is required";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <table>
        <thead>
        <tr>
        <th>Customer Full Name</th>
        <th>Account Number</th>
        <th>Gender</th>
        </tr>
        </thead>
        <tbody>
            <th>
            <td>
            <?php $_POST['Customer_FullName'] ?>
            </td>
            </th>


            <th>

            <td>
            <?php $_POST['Account_Number'] ?>
            </td>
            </th>


            </th>
             <td>
            <?php $_POST['gender'] ?>
            </td>
            </th>
        </tbody>
    </table> -->
</body>
</html>