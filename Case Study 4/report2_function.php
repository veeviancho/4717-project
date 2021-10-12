<?php

function insert_quantity($category) {

    //Connect to DB
    @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

    //Check DB connection
    if (mysqli_connect_errno()) {
        echo "Error! Can't connect to database.";
        exit;
    }

    //Query formulation
    $sql = "SELECT sum(f32ee.orders.quantity) FROM f32ee.coffee, f32ee.orders WHERE f32ee.coffee.coffee_category='$category' AND f32ee.coffee.coffee_id=f32ee.orders.coffee_id";
    //Query submission
    $result = $db->query($sql); 

    if ($result) {
        $row = mysqli_fetch_row($result);
        if ($row[0]) {
            echo $row[0];
        } else {
        }
    } else {
        echo "Failed fetching data from database.";
    }
}

function insert_price($category) {
    //Connect to DB
    @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

    //Check DB connection
    if (mysqli_connect_errno()) {
        echo "Error! Can't connect to database.";
        exit;
    }

    //Query formulation
    $sql = "SELECT * FROM f32ee.coffee WHERE coffee_category='$category';";
    //Query submission
    $result = $db->query($sql); 
    
    // $row = mysqli_fetch_row($result);
    // foreach ($row as $key => $value) {
    //     echo $key . "-" . $value . "<br>";
    // }
    $total = 0;

    if ($result) {
        $num_results = $result -> num_rows;
        for ($i=0; $i<=$num_results; $i++) {
            $row = $result -> fetch_assoc();

            // foreach ($row as $key => $value) {
            //     echo $key . "-" . $value . "<br>";
            // }

            $current_id = $row['coffee_id'];
            $qty_sql = "SELECT quantity FROM f32ee.orders WHERE coffee_id = '$current_id'";
            $qty_result = $db -> query($qty_sql);
            if ($qty_result) {
                $qty_row = mysqli_fetch_row($qty_result);
                if ($qty_row[0]) {
                    $qty = $qty_row[0];
                    $price = $row['coffee_price'];
                    $total = $total + $qty * $price;
                }
            } else {
                echo "Error fetching data from DB";
            }
        }
        echo $total;
    } else {
        echo "Failed fetching data from database.";
    }
}

?>