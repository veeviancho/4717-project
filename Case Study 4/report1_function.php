<?php

function insert_quantity($coffee_name) {
   
    //Connect to DB
    @ $db = new mysqli('localhost','f32ee','f32ee','f32ee'); 

    if (mysqli_connect_errno()) {
        echo "Error! Can't connect to database.";
        exit;
    }

    //Query formulation
    $sql = "SELECT sum(quantity) FROM f32ee.orders WHERE coffee_name='$coffee_name';";
    //Query submission
    $result = $db->query($sql);

    // $row = mysqli_fetch_row($result);
    // foreach ($row as $key => $value) {
    //     echo $key . "-" . $value . "<br/>";
    // }

    if ($result) {
		$row = mysqli_fetch_row($result);
        if ($row[0]) {
            echo $row[0];
        } else {
            echo "0";
        }
	} else {
		echo "Failed fetching data from database.";
	}

	mysqli_close($db);
}

function insert_price($coffee_name) {
   
    //Connect to DB
    @ $db = new mysqli('localhost','f32ee','f32ee','f32ee'); 

    //Check DB connection
    if (mysqli_connect_errno()) {
        echo "Error! Can't connect to database.";
        exit;
    }

    //Query formulation
    $sql = "SELECT * FROM f32ee.orders WHERE coffee_name='$coffee_name';";
    //Query submission
    $result = $db->query($sql); 

    if ($result) {
        $num_results = $result -> num_rows;
        // echo "Number of orders found: " . $num_results;
        for ($i=0; $i<=$num_results; $i++) {
            $row = $result -> fetch_assoc();
            // foreach ($row as $key => $value) {
            //     echo $key . ":" . $value . "<br/>";
            // }
            
            $current_id = $row['coffee_id'];
            $price_sql = "SELECT coffee_price FROM f32ee.coffee WHERE coffee_id='$current_id';";
            $price_result = $db -> query($price_sql);
            
            if ($price_result) {
                $price_row = mysqli_fetch_row($price_result);
                // foreach ($price_row as $key => $value) {
                //     echo $key . ":" . $value . "<br/>";
                // }
                if ($price_row[0]) {

                    //number_format(float $num, int $how many dp, dp separator, thousands separator)
                    $price = number_format($price_row[0], 2, ".", "");
                    // echo $price . "<br/>";
                    $qty = $row['quantity'];
                    // echo $qty . "<br/>";
                    $total = $total + $price * $qty;
                    // echo $total . "<br/>";
                }
            } else {
                echo "Failed fetching data from database";
            }
        }
        echo $total;
    } else {
        echo "Failed fetching data from database";
    }

	mysqli_close($db);
}

?>