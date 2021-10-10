<?php 
include "menu_displayPrice.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>JavaJam Coffee House</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="menu_admin.js"></script>
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
    <h3>Click to update product prices:</h3>

    <div id="menutable">
    <form action="menu_updateDB.php" method="post">
    <table>
        <tbody>
            <tr>
                <td><input type="checkbox" name="java_check" id="check1" onclick="change1();"></td>
                <td><strong>Just Java</strong></td>
                <td>
                    Regular house blend, decaffeinated coffee, or flavor of the day.
                    <br>
                    Endless Cup $<?php insert_price(1)?> <input id="newPrice1" name="newPrice1" placeholder="Edit price" type="hidden">
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="cafe_check" id="check2" onclick="change2();"></td>
                <td><strong>Cafe au Lait</strong></td>
                <td>
                    House blended coffee infused into a smooth, steamed milk.
                    <br>
                    Single $<?php insert_price(2)?> <input id="newPrice2" name="newPrice2" placeholder="Edit price" type="hidden">
                    Double $<?php insert_price(3)?> <input id="newPrice3" name="newPrice3" placeholder="Edit price" type="hidden">
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="iced_check" id="check3" onclick="change3();"></td>
                <td><strong>Iced Cappucino</strong></td>
                <td>
                    Sweetened espresso blended with icy-cold milk and served in a chilled glass.
                    <br>
                    Single $<?php insert_price(4)?> <input id="newPrice4" name="newPrice4" placeholder="Edit price" type="hidden">
                    Double $<?php insert_price(5)?> <input id="newPrice5" name="newPrice5" placeholder="Edit price" type="hidden">
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <input type="submit" value="Update changes" style="width: 200px">
    </form>
    </div>

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
    width: 70px;
}
</style>