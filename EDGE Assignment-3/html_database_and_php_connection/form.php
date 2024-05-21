<!DOCTYPE html>
<html>

<body>
    <h1 align="center">Data Insert Page</h1><br>
    <div style="display: flex;justify-content: center;">
        
        <table border="1">
            <form action="data_insert.php" method="post">
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
                    <td><input type="text" id="sl" name="sl"></td>
                    <td><input type="text" id="segment" name="segment"></td>
                    <td><input type="text" id="country" name="country"></td>
                    <td><input type="text" id="product" name="product"></td>
                    <td><input type="text" id="units" name="units"></td>
                    <td><input type="text" id="price" name="price"></td>
                    <td><input type="text" id="sales" name="sales"></td>
                    <td><input type="text" id="date" name="date"></td>
                </tr>
                <tr>
                    <td colspan="8"><button type="submit" name="submit" id="submit" value="submit"
                            style="width: 1460px; height: 50px; font-weight: bold;">Submit</button></td>
                </tr>
            </form>
        </table>
    </div>
</body>

</html>