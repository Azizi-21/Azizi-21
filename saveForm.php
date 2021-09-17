<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfilo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_GET['name'];
$email = $_GET["email"];
$number = $_GET["number"];
$message =$_GET['message'];

function processText($text) {
    $text = strip_tags($text);
    $text = trim($text);
    $text = htmlspecialchars($text);
    return $text;
}

 

$sql = "INSERT INTO contact VALUES (null , '$name', '$email' ,'$number' ,'$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: http://localhost/Azizi%20porfolio/"); 

?>