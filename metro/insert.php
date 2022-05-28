<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "mohon";
$password = "dragon007";
$dbname = "metro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

// if ($conn == true) {
//   echo "conection sucsess";
// }


$fn = $_REQUEST["fname"];
$ln = $_REQUEST["lname"];
$uname = $_REQUEST["username"];
$em = $_REQUEST["email"];
$gen = $_REQUEST["gender"];
$phone = $_REQUEST["telephone"];
$pass = $_REQUEST["Password"];
$conpass = $_REQUEST["confirmpass"];

// $sql = "INSERT INTO registration (fn, ln, uname, em, gen, phone, pass, conpass)
// VALUES ($fn, $ln, $uname, $em, $gen, $phone, $pass, $conpass)";

// $sql = "INSERT INTO registration ( fname, lname, username, email, gender, telephone, Password, confirmpass) 
// VALUES ( 'kirito', 'kazuya', 'sakatagin', 'gin@gm.com', 'male', '54545456', '1414', '1414')";

$sql = "INSERT INTO registration ( fname, lname, username, email, gender, telephone, Password, confirmpass) 
VALUES ( '$fn', '$ln', '$uname', '$em', '$gen', '$phone', '$pass', '$conpass')";

if($conn->query($sql)){
  echo "successfully inserted";
}

$conn->close();


?> 
</body>
</html>