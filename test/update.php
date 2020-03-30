<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

$id=$_POST['id'];
$name1=$_POST['name1'];


session_start();
$_SESSION['id']=$id;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE test01 SET name1 = '".$name1 ."' WHERE id =".$id;

if ($conn->query($sql) === TRUE) {
    echo "Record UPDATED successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>