<?php 
    $price1 = $_POST['newPrice1'];
	$price2 = $_POST['newPrice2'];
	$price3 = $_POST['newPrice3'];
	$price4 = $_POST['newPrice4'];
	$price5 = $_POST['newPrice5'];

    // if (mysqli_connect_errno()) {
    //     echo "Error: Could not connect to database.  Please try again later.";
    //     exit;
    // }

    @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

    for($i = 1; $i <= 5; $i++) {
        if ($i == 1) {
            $sql = "UPDATE f32ee.coffee SET coffee_price = $price1 WHERE coffee_id = $i";
            $result = $db->query($sql);
        } elseif ($i == 2) {
            $sql = "UPDATE f32ee.coffee SET coffee_price = $price2 WHERE coffee_id = $i";
            $result = $db->query($sql);
        } elseif ($i == 3) {
            $sql = "UPDATE f32ee.coffee SET coffee_price = $price3 WHERE coffee_id = $i";
            $result = $db->query($sql);
        } elseif ($i == 4) {
            $sql = "UPDATE f32ee.coffee SET coffee_price = $price4 WHERE coffee_id = $i";
            $result = $db->query($sql);
        } elseif ($i == 5) {
            $sql = "UPDATE f32ee.coffee SET coffee_price = $price5 WHERE coffee_id = $i";
            $result = $db->query($sql);
        }
    }

    // if ($result) {
    //     echo  $db->affected_rows." book inserted into database.";
    // } else {
    //       echo "An error has occurred.  The item was not updated.";
    // }

    $db->close();
    header("refresh:0;url=menu_admin.php");
?>