<?php
$servername = "localhost";
$username = "admin";
$password = "";
$db_name = "admin";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db_name);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
// $sql = "CREATE TABLE `admin`.`user2` (`id` INT UNSIGNED NOT NULL AUTO_INCREMENT , `name` VARCHAR(30) NULL DEFAULT NULL , `email` VARCHAR(30) NOT NULL , `address` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
// if ($conn->query($sql) === TRUE) {
//   echo "Table User created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql= "INSERT INTO `user`( name, email, address) 
VALUES ('nữ','test3@gmail.com','quang nam')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>