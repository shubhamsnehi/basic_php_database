<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

$id=$_GET['id'];

session_start();
$_SESSION['id']=$id;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

$sql = "SELECT id,  name1 FROM test01 WHERE id=".$id;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    }
 else {
    echo "0 results";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>
	<form action="update.php" method="POST">
		ID:<input type="text" name="id" value='<?php echo $row["id"] ?>'>
		<br>
		User Name:<input type="text" name="name1" value='<?php echo $row["name1"] ?>'>
		<br>
		<input type="submit" value="Update">
	</form>
</body>
</html>