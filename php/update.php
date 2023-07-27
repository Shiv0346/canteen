<?php

//$newName = $_POST['name'];
$id = $_POST['id'];
$fname = $_POST['fname'];
$mname = $_POST ['mname'];
$lname =$_POST ['lname'];
$phone=$_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];


$servername = "localhost";
$username ="root";;
$password ="";
$db_name = "htmlproject";

$conn = new mysqli ($servername,$username,$password,$db_name);

if($conn->connect_error){

    die("Connection Failed " . $conn->connect_error );
}

$sql = "update studentinfo set roll = '$id', fname = '$fname' , mname = '$mname' ,
lname = '$lname' , phone='$phone', email='$email', address ='$address'   where roll = $id";

if($conn->query($sql)===TRUE){

    echo "data updated successfully";
    header('location:list.php');

}
else{
    "Error :" . $conn->error;
}


$conn ->close();