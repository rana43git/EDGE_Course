<!DOCTYPE html>
<html>

<head>
    <title>Menu Page</title>
</head>

<body>
<h1 align="center">Data Inserted Successfully!</h1><br>
    <div style="display: flex;justify-content: center;">
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdb27";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$PSL = $_POST["sl"];
$PSegment = $_POST["segment"];
$PCountry = $_POST["country"];
$PProduct = $_POST["product"];
$PUnits = $_POST["units"];
$PPrice = $_POST["price"];
$PSales = $_POST["sales"];
$PDate = $_POST["date"];


$sqlP = "INSERT INTO newtable VALUES ('$PSL','$PSegment', '$PCountry', '$PProduct', '$PUnits', '$PPrice', '$PSales', '$PDate')";
mysqli_query($conn, $sqlP);

mysqli_close($conn);
?>
    </div>
</body>

</html>