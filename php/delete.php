<?php

$roll = $_GET['id'];

$servername = "localhost";
$username ="root";
$password = "";
$database = "htmlproject";

$con = new mysqli($servername, $username, $password, $database);

if($con->connect_error){

    die("Connection Failed :" . $con->connect_error);

}

$sql = "delete from studentinfo where roll = $roll";

if($con->query($sql)===TRUE) {

    echo "data delete sucessfylly:";
    header('location:list.php');
    
}
else {
    echo "Error Occured while deleting:";
}

$con->close();
?>