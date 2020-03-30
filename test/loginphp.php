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

echo " Welcome ID:".$_SESSION['id'];



$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome Home</title>
</head>
<body>

<?php
 echo"<br> <a href='updateform.php?id=".$_SESSION['id']."'>Edit Profile </a>";
?>

<?php
 echo"<br> <a href='select.php'>View Table Entries </a>";
?>

</body>
</html>

