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
            <td>name</td>
            <td>Year of Birth</td>
            <td>Address</td>
            <td>phone</td>
        </tr>
    </thead>

    <tbody>
        <?php

        $list = array(
            array("ahmed", 1999, "hodan", "single"),
            array("hassan", 1999, "hodan", "single"),
            array("ali", 1999, "hodan", "single")
        );

        // for ($j = 0; $j < count($list); $j++) {

        //     echo "<tr>
        //             <td>{$list[$j][0]}</td>
        //             <td>{$list[$j][1]}</td>
        //             <td>{$list[$j][2]}</td>
        //             <td>{$list[$j][3]}</td>
        //           </tr>";
        // }

        foreach ($list as $row) {
            echo "<tr>
                    <td>{$row[0]}</td>
                    <td>{$row[1]}</td>
                    <td>{$row[2]}</td>
                    <td>{$row[3]}</td>
                  </tr>";
        }

        ?>
    </tbody>
</table>


<?php

$info = array(
    array("ahmed", 1999, "hodan", "single"),
    array("hassan", 1999, "hodan", "single"),
    array("ali", 1999, "hodan", "single")
);

//check if it array
if(is_array($info)){
    echo "yes its";
}
else {
    echo " no is not";
};


//check if specfic array
if(in_array("ahmed",$info[0])){
    echo "yes its";
}
else{
    echo " no is not";
}

//count of array
echo "size of array".count($info);

//creating funcation
function hello(){
    print "hello world";
};

hello();

//another function addition 2 number

function add($x,$y){
    echo $x + $y;
}

add(10,20);
?>
</body>
</html>