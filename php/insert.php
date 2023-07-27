<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "htmlproject";

$fname = $_POST['fname'];
$mname = $_POST ['mname'];
$lname =$_POST ['lname'];
$phone=$_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];


// checking form data

echo ("your name is : " . $fname );

//creating data connection

$connect = new mysqli($servername, $username, $password, $database);

// check connection 

if ($connect->connect_error) {
    die("connection failed" . $connect->connect_error);
}


$sql = "insert into studentinfo (fname,mname,lname,phone,email,address) 
        values('$fname', '$mname', '$lname', '$phone', '$email', '$address')";

        if ($connect->query($sql) === TRUE){
            echo "New record created successfully";
            header('location:admin.php');

        }
        else{
            echo "Error: " . $sql . "<br>" . $connect->error;

        }
        $connect->close();



?>

<script>
    <script>
$('form').on('submit',function(){
       alert('submitted');
});
</script>

    
</body>
</html>
