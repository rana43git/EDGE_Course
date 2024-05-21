<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Data Show Page</h1><br>
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

?>

<table border="1">

<tr style="font-weight: bold;">
<th>SL</th>
<th>Segment</th>
<th>Country</th>
<th>Product</th>
<th>Units Sold</th>
<th>Sale Price</th>
<th>Gross Sales</th>
<th>Date</th>
<th>Edit</th>
</tr>

<?php 

$sql = "SELECT * FROM newtable";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    ?>

<tr>
<td><?php echo $row["SL"] ?></td>
<td><?php echo $row["Segment"] ?></td>
<td><?php echo $row["Country"] ?></td>
<td><?php echo $row["Product"] ?></td>
<td><?php echo $row["Units Sold"] ?></td>
<td><?php echo $row["Sale Price"] ?></td>
<td><?php echo $row["Gross Sales"] ?></td>
<td><?php echo $row["Date"] ?></td>
<td><a href="data_edit_form.php?sl=<?php echo $row["SL"]?>">Edit</a></td>
</tr>
<?php
  }
}

mysqli_close($conn);
?>
</table>
</div>
</body>

</html>