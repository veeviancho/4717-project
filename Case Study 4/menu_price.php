<?php
function insert_price($id) {

    @ $db = new mysqli('localhost','f32ee','f32ee','f32ee');

    if (mysqli_connect_errno()) {
        echo "Error! Can't connect to database.";
        exit;
    }

    $sql = "SELECT coffee_price FROM f32ee.coffee WHERE coffee_id = $id;";
	if ($result = mysqli_query($conn, $sql)) {
		$row = mysqli_fetch_row($result);
		echo number_format((float)$row[0], 2, '.', '');
	} else {
		echo "Failed fetching data from database.";
	}
	mysqli_close($conn);
}
?>