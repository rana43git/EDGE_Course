<!DOCTYPE html>
<html>

<head>
    <title>Data Edit Page</title>
</head>

<body>
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

<h1 align="center">Data Edit Page</h1><br>
    <div style="display: flex;justify-content: center;">
        
        <table border="1">
        <?php
        $sl = $_GET["sl"];
        $sql = "SELECT * FROM newtable WHERE sl='$sl'";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($result,MYSQLI_ASSOC);
        ?>

            <form action="data_edit.php" method="post">
                <tr style="font-weight: bold;">
                    <th>SL</th>
                    <th>Segment</th>
                    <th>Country</th>
                    <th>Product</th>
                    <th>Units Sold</th>
                    <th>Sale Price</th>
                    <th>Gross Sales</th>
                    <th>Date</th>
                </tr>
                <tr>
                    <td><input type="text" name="sl" value="<?php echo $data["sl"]?>"readonly></td>
                    <td><input type="text" name="segment" value="<?php echo $data["segment"]?>"></td>
                    <td><input type="text" id="country" value="<?php echo $data["country"]?>"></td>
                    <td><input type="text" id="product" value="<?php echo $data["product"]?>"></td>
                    <td><input type="text" id="units" value="<?php echo $data["units"]?>"></td>
                    <td><input type="text" id="price" value="<?php echo $data["price"]?>"></td>
                    <td><input type="text" id="sales" value="<?php echo $data["sales"]?>"></td>
                    <td><input type="text" id="date" value="<?php echo $data["date"]?>"></td>
                </tr>
                <tr>
                    <td colspan="8"><button type="submit" name="submit" id="save" value="save"
                            style="width: 1460px; height: 50px; font-weight: bold;">Save</button></td>
                </tr>
            </form>
            
        </table>
    </div>
<?php mysqli_close($conn); ?>
</body>

</html>