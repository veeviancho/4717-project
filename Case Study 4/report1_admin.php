<?php
include "report1_function"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>JavaJam Coffee House</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="report_admin_update.js"></script>
</head>

<body>
<div id="wrapper">
    <header>
        <img src="./assets/javalogo.gif">
    </header>

    <div id="leftcolumn">
    <nav><b>
    <ul style="color: #6c4f3d">
        <a href="menu_admin.html"><li>Product<br>Price<br>Update</li></a>
        <li><br></li>
        <a href="report_admin.html"><li>Daily<br>Sales<br>Report</li></a>
    </ul>
    </b></nav>
    </div>

    <div class="rightcolumn">
    <h3>Total Dollar Sales by Product:</h3>

    <div id="menutable">  
    <table>
        <tr>
            <th>Product Name</th>
            <th><?php insert_quantity("Just Java")?></th>
            <th>Total Dollar Sales</th>
        </tr>
        <tr>
            <td>Just Java</td>
            <td><?php insert_quantity("Cafe au Lait")?></td>
            <td>sales</td>
        </tr>
        <tr>
            <td>Cafe au Lait</td>
            <td><?php insert_quantity("Cafe au Lait")?></td>
            <td>sales</td>
        </tr>
        <tr>
            <td>Iced Cappucino</td>
            <td><?php insert_quantity("Iced Cappucino")?></td>
            <td>sales</td>
        </tr>
        <tr>
            <th>Total</th>
            <th><?php insert_quantity("Iced Cappucino")?></th>
            <th>20</th>
        </tr>
    </table>
    </div>

    <p id="report1"></p>
    <p id="report2"></p>

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