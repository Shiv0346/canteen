<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
    <style>
        th, tr,td{
            border:1px solid black;
        }
    </style>
</head>
<body>
    


<?php
$username = "root";
$servername = "localhost";
$password ="";
$database ="htmlproject";
//creating database connection ;

$conn = new mysqli($servername , $username , $password , $database);


#checking connection

// if($conn){
//     die("Connection failed : " . mysqli_connect_error()); //procedural approach
// }

//object oriented

if($conn->connect_error){
    die("Connection Failed :" . $conn->connect_error());
}
else{
    echo "<h1>Kathmandu Business Campus - Student Database</h1>";
}

$sql ="select * from studentinfo";

$result = $conn->query($sql);
?>
<table>

<tr>
<th>Roll</th>
<th>First name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>Phone no</th>
<th>E-mail</th>
<th>Address</th>
<th colspan ="2">Actions</th>

</tr>
<?php
if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row['roll'] . "</td><td>" . $row['fname'] .
         "</td><td>" . $row['mname'] . "</td><td>" . $row['lname'] . 
         "</td><td>" . $row['phone'] . "</td><td>" . $row['email'] .
          "</td><td>" . $row['address'] .  "</td>";
   ;

        echo "  <td><a href='delete.php?&id=$row[roll]'>Delete</a></td>";
        echo "  <td><a href='admin.php?&id=$row[roll]'>Update</a></td></tr>";
    }

}else{
    echo "0 result";
}$conn->close();





?>
</table>
    
</body>
</html>