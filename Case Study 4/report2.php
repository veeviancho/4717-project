<?php
include "report2_function.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>JavaJam Coffee House</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<div id="wrapper">
    <header>
        <img src="./assets/javalogo.gif">
    </header>

    <div id="leftcolumn">
    <nav><b>
    <ul style="color: #6c4f3d">
        <a href="menu_admin.php"><li>Product<br>Price<br>Update</li></a>
        <li><br></li>
        <a href="report_admin.php"><li>Daily<br>Sales<br>Report</li></a>
    </ul>
    </b></nav>
    </div>

    <div class="rightcolumn">
    <h3>Sales Report by Category:</h3>

    <div id="menutable">  
    <table>
        <tr>
            <th>Category</th>
            <th>Quantity</th>
            <th>Total Dollar Sales</th>
        </tr>
        <tr>
            <td>Endless Cup</td>
            <td><?php insert_quantity("Endless Cup")?></td>
            <td><?php insert_price("Endless Cup")?></td>
        </tr>
        <tr>
            <td>Single Shot</td>
            <td><?php insert_quantity("Single")?></td>
            <td><?php insert_price("Single")?></td>
        </tr>
        <tr>
            <td>Double Shot</td>
            <td><?php insert_quantity("Double")?></td>
            <td><?php insert_price("Double")?></td>
        </tr>
        <tr>
            <th>Total</th>
            <th id='quantity'></th>
            <th id='price'></th>
        </tr>
    </table>
    </div>

    <a href="report_admin.php">Go back to previous page</a>

    </div>

    <footer>
        <small><i>
            Copyright &copy; 2014 JavaJam Coffee House
            <br>
            <a href="mailto:Vivian@ChoWengYann.com">Vivian@ChoWengYann.com</a>
        </i></small>
    </footer>
</div>
</body>
</html>

<style>
input {
    width: 50px;
}

.newPrice1 {
    display: none;
}
</style>

<script type="text/javascript">
    var a = <?php insert_quantity("Endless Cup")?>;
    var b = <?php insert_quantity("Single")?>;
    var c = <?php insert_quantity("Double")?>;
    document.getElementById('quantity').innerHTML = a + b + c;

    var x = <?php insert_price("Endless Cup")?>;
    var y = <?php insert_price("Single")?>;
    var z = <?php insert_price("Double")?>;
    document.getElementById('price').innerHTML = x + y + z;
</script>
