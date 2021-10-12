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
        <a href="menu_admin.php"><li>Product<br>Price<br>Update</li></a>
        <li><br></li>
        <a href="report.php"><li>Daily<br>Sales<br>Report</li></a>
    </ul>
    </b></nav>
    </div>

    <div class="rightcolumn">
    <h3>Click to generate daily sales report:</h3>

    <form action="report1.php" method="post">
        <h3><input type="submit" value="Generate"/> Total dollar sales by products</h3>
    </form>

    <form action="report2.php" method="post">
    <h3><input type="submit" value="Generate"/> Sales quantities by product categories</h3>
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
#button {
    text-align: center;
}

input {
    width: 80px;
}

.newPrice1 {
    display: none;
}
</style>