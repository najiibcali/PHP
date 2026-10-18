<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    if (!empty($_POST['name'])) {
        echo "Full Name: " . $_POST["name"] . "<hr>";
    } else {
         echo "Name is required <hr>";
    }
    if (!empty($_POST['pob'])) {
        echo "Place of Birth: " . $_POST["pob"] . "<hr>";
    } 
    else {
        echo "Place of Birth is required <hr>";
    }
    if (!empty($_POST['dob'])) {
        echo "Date of Birth: " . $_POST["dob"] . "<hr>";
    }
    else {
        echo "Date of Birth is required <hr>";
    }
    if (!empty($_POST['address'])) {
        echo "Address: " . $_POST["address"] . "<hr>";
    } 
    else {
        echo "Address is required <hr>";
    }
    if (!empty($_POST['gender'])) {
        echo "Gender: " . $_POST["gender"] . "<hr>";
    } 
    else {
        echo "Gender is required <hr>";
    }
    if (!empty($_POST['telephone'])) {
        echo "Telephone: " . $_POST["telephone"] . "<hr>";
    }
    else {
    echo "Telephone is required <hr>";
    }
    if (!empty($_POST['email'])) {
        echo "Email: " . $_POST["email"] . "<hr>";
    } 
    else {
        echo "Email is required <hr>";
    }
    if (!empty($_POST['parent_name'])) {
        echo "Parent Name: " . $_POST["parent_name"] . "<hr>";
    }
    else {
        echo "Parent Name is required <hr>";
    }
    if (!empty($_POST['parent_phone'])) {
        echo "Parent Phone: " . $_POST["parent_phone"] . "<hr>";
    }
    else {
        echo "Parent Telephone is required <hr>";
    }
    if (!empty($_POST['relationship'])) {
        echo "Relationship: " . $_POST["relationship"] . "<hr>";
    }
    else {
        echo "Relationship is required <hr>";
    }
    if(!empty($_POST['student_id'])) {
        echo "Student ID: " . $_POST["student_id"] . "<hr>";
    }
    else {
    echo "Student ID is required <hr>";
    }
    if (!empty($_POST['faculty'])) {
        echo "Faculty: " . $_POST["faculty"] . "<hr>";
    }
    else {
        echo "Faculty is required <hr>";
    }
    if (!empty($_POST['department'])) {
        echo "Department: " . $_POST["department"] . "<hr>";
    }
    else {
    echo "Department is required <hr>";
    }
    if (!empty($_POST['class'])) {
        echo "Class: " . $_POST["class"] . "<hr>";
    }
    else {
    echo "Class is required <hr>";
    }
    if (!empty($_POST['reg_date'])) {
    echo "Registration Date: " . $_POST["reg_date"] . "<hr>";
    }
     else {
    echo "Registration Date is required <hr>";
    }



    if (!empty($_FILES["image"]["name"])) {

        

        $allowed = ["jpg", "jpeg", "png", "gif", "webp"];
        $EXTs =explode(".",$_FILES["image"]["name"]);
        $EXTs = strtolower(end($EXTs));

        if (in_array($EXTs, $allowed)) {
            echo "File name: " . $_FILES["image"]["name"] . "<hr>";
            echo "File size: " . $_FILES["image"]["size"] . " bytes<hr>";
            echo "File type: " . $_FILES["image"]["type"] . "<hr>";
        } else {
           echo "Image extension is not allowed <hr>";
        }
    }
    else {
        echo "Please select a file.";
    }
    ?>
</body>
</html>