<?php
function insert_quantity($coffee_name) {
    
    @ $db = new mysqli('localhost','f32ee','f32ee','f32ee'); 

    if (mysqli_connect_errno()) {
        echo "Error! Can't connect to database.";
        exit;
    }

    $sql = "SELECT quantity FROM f32ee.orders WHERE coffee_name = $coffee_name;";
	$result = $db->query($sql);

    if ($result) {
		$row = mysqli_fetch_row($result);
		echo $row[0];
	} else {
		echo "Failed fetching data from database.";
	}

	mysqli_close($db);
}
?>