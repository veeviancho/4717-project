<?php
function insert_quantity($coffee_name) {
    
    @ $db = new mysqli('localhost','f32ee','f32ee','f32ee'); 

    if (mysqli_connect_errno()) {
        echo "Error! Can't connect to database.";
        exit;
    }

    $sql = "SELECT coffee_price FROM f32ee.coffee WHERE coffee_name LIKE '%$coffee_name%';";
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

<?php
function insert_price($id) {

    @ $db = new mysqli('localhost','f32ee','f32ee','f32ee');

    if (mysqli_connect_errno()) {
        echo "Error! Can't connect to database.";
        exit;
    }

    $sql = "SELECT coffee_price FROM f32ee.coffee WHERE coffee_id = $id;";
	$result = $db -> query($sql);

    for ($i=1; $i<=$result->num_rows; $i++) {
        //Fetch result row as associative array
        $row = $result -> fetch_assoc();
        echo $row;
    };

    for($i = 1; $i <= $result->num_rows; $i++) {
    }
	
	if ($result) {
		$row = mysqli_fetch_row($result);
		echo number_format((float)$row[0], 2, '.', '');
	} else {
		echo "Failed fetching data from database.";
	}
	mysqli_close($db);
}
?>