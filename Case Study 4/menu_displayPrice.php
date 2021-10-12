<?php
function insert_price($id) {

    @ $db = new mysqli('localhost','f32ee','f32ee','f32ee');

    if (mysqli_connect_errno()) {
        echo "Error! Can't connect to database.";
        exit;
    }

    $sql = "SELECT coffee_price FROM f32ee.coffee WHERE coffee_id = $id;";
	$result = $db->query($sql);

	// foreach ($row as $key => $value) {
	// 	echo $key . "-" . $value . "<br/>";
	// }
	
	if ($result) {
		$row = mysqli_fetch_row($result);

		// number_format(num, dp, dp separator, thousands separator)
		echo number_format($row[0], 2, '.', '');
	} else {
		echo "Failed fetching data from database.";
	}
	mysqli_close($db);
}
?>