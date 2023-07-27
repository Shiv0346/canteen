
<?php
// include connection.php
$email = $_POST['email'];
$password=$_POST['password'];

$servername = "localhost";
$username = "root";
$passwrd="";
$dbname= "htmlproject";


$conn = new mysqli($servername,$username,$passwrd,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "select *from admin where email = '$email' and password= '$password'";

  $result = mysqli_query($conn, $sql);
  // $row = mysqli_fetch_array($result, MYSQLI_ASSOC); s
  $count = mysqli_num_rows($result);
    

  if($count== 1) {
         echo "login  successful";

         header('location:admin.php');
         

  }
  else {
    echo "login error";
  }


?>