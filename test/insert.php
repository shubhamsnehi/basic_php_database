<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

$id=$_POST['id'];
$name1=$_POST['name1'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO test01(id, name1)
VALUES($id, '$name1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <br> <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<a href='login.php'> Login </a>";

$conn->close();
?>