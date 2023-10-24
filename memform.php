<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "nikeStore";

// // Create connection
// $conn = new mysqli($servername, $username, $password,$dbname);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
//Creation of database

// $sql = "CREATE DATABASE nikeStore";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// $sql1 = "CREATE TABLE `nikeStore` (
//   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   email VARCHAR(30) NOT NULL,
//   fname VARCHAR(50) NOT NULL,
//   lname VARCHAR(50) NOT NULL,
//   pass VARCHAR(50) NOT NULL,
//   gen VARCHAR(50) NOT NULL,
//   Country VARCHAR(50) NOT NULL,
  
//   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//   )";
  
//   if ($conn->query($sql1) === TRUE) {
//     echo "Table nikeStore created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }


// $conn->close();

$con = mysqli_connect('localhost', 'root', '','nikeStore');

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gen = $_POST['radioFruit'];
    $country=$_POST['country'];

$sql = "INSERT INTO `nikeStore` (`email`, `fname`, `lname`, `pass`, `gen`,`Country`) VALUES ('$email','$fname','$lname','$pass','$gen','$country')";

$rs = mysqli_query($con, $sql);

if($rs)
{
    echo "Contact Records Inserted";
    header("location: ../nikeStore/shop.html");
}
?>
<!-- <html>
  <br>
    <a href="/nikeStore/index.html">Click to Home page</a>
</html> -->


