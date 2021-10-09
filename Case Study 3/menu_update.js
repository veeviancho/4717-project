function computeJava() {
    var quantity = document.getElementById("java").value;
    var total = quantity * 2;
    document.getElementById("java_total").value = "$" + total;
    totalCost();
}

//quantity first
function computeCafe(price) {
    var quantity = document.getElementById("cafe").value;
    if (quantity == 0) {
        alert("Please enter quantity first!");
        var ele = document.getElementsByName("cafeButton");
        for(var i=0; i<ele.length; i++)
           ele[i].checked = false;
    } else {
        var total = quantity * price;
        document.getElementById("cafe_total").value = "$" + total;
    }
    totalCost();
}

//radio button first
function computeIced() {
    var quantity = document.getElementById("iced").value;
    var ele = document.getElementsByName("icedButton");
    for (i=0; i<ele.length; i++) {
        if (ele[i].checked == true) {
            selected = ele[i].value;
        }
    }

    switch (selected) {
        case "single":
            var total = quantity * 4.75;
            document.getElementById("iced_total").value = "$" + total;
            totalCost();
            break;
        case "double":
            var total = quantity * 5.75;
            document.getElementById("iced_total").value = "$" + total;
            totalCost();
            break;
        default:
            break;
    }
}

function totalCost() {
    var java = document.getElementById("java_total").value || "$0";
    var cafe = document.getElementById("cafe_total").value || "$0";
    var iced = document.getElementById("iced_total").value || "$0";

    console.log("cafe" + cafe);

    var java_int = parseFloat(java.substring(1, java.length));
    var cafe_int = parseFloat(cafe.substring(1, cafe.length));
    var iced_int = parseFloat(iced.substring(1, iced.length));

    console.log("cafe int" + cafe);

    var total = java_int + cafe_int + iced_int;

    console.log("total" + total);

    document.getElementById("total_cost").value = "$" + total; 
}

// this function just keeps adding everytime you change

// function finaltotalCost(total) {
//     var total = parseFloat(total);
//     var initial = document.getElementById("total_cost").value || "$0";
//     // if (isNaN(initial)) initial = "0";

//     // convert to number
//     var total = parseFloat(total);
//     var initial_int = parseFloat(initial.substring(1, initial.length));

//     var final = initial_int + total;
//     document.getElementById("total_cost").value = "$" + final;
// }
