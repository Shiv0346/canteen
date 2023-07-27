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


$email = $_POST['email'];
$passwrd = $_POST['password'];



//creating data connection

$connect = new mysqli($servername, $username, $password, $database);

// check connection 

if ($connect->connect_error) {
    die("connection failed" . $connect->connect_error);
}


$sql = "insert into admin (email, password) 
        values( '$email', '$passwrd')";

        if ($connect->query($sql) === TRUE){
            echo "New record created successfully";
             header('location:signIn.php');

        }
        else{
            echo "Error: " . $sql . "<br>" . $connect->error;

        }
        $connect->close();



?>

<script>
    <script>

</script>

    
</body>
</html>
