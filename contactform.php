<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "dbcontact";

// // Create connection
// $conn = new mysqli($servername, $username, $password,$dbname);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
// //Creation of database

// $sql = "CREATE DATABASE dbcontact";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// // sql to create table
// $sql1 = "CREATE TABLE `dbcontact` (
//   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   uname VARCHAR(30) NOT NULL,
//   uemail VARCHAR(50) NOT NULL,
//   msg VARCHAR(200),
//   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//   )";
  
//   if ($conn->query($sql1) === TRUE) {
//     echo "Table dbcontact created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }


// $conn->close();



    $con = mysqli_connect('localhost', 'root', '','dbcontact');

    $email1 = $_POST["email1"];
        $name1 = $_POST["name1"];
        $msg = $_POST["msg"];



    $sql = "INSERT INTO `dbcontact` (`email1`, `name1`, `msg`) VALUES ('$email1', '$name1', '$msg')";

    $rs = mysqli_query($con, $sql);

    if($rs)
    {
        echo "Contact Records Inserted";
    }
    ?>
    <html>
      <br>
        <a href="/nikeStore/index.html">Click to Home page</a>
    </html>
