function change1() {
    x = document.getElementById("newPrice1");
    x_value = document.getElementById("newPrice1").value;
    if (x.readOnly == true) {
        x.readOnly = false;
    } else {
        x.readOnly = true;
        //send data to database
        // x.value = "";
    }
}

function change2() {
    x = document.getElementById("newPrice2a")
    y = document.getElementById("newPrice2b")
    x_value = document.getElementById("newPrice2a").value;
    y_value = document.getElementById("newPrice2b").value;
    if (x.readOnly == true) {
        x.readOnly = false;
    } else {
        x.readOnly = true;
        //send data to database
    }
    if (y.readOnly == true) {
        y.readOnly = false;
    } else {
        y.readOnly = true;
        //send data to database
    }
}

function change3() {
    x = document.getElementById("newPrice3a")
    y = document.getElementById("newPrice3b")
    x_value = document.getElementById("newPrice3a").value;
    y_value = document.getElementById("newPrice3b").value;
    if (x.readOnly == true) {
        x.readOnly = false;
    } else {
        x.readOnly = true;
        //send data to database
    }
    if (y.readOnly == true) {
        y.readOnly = false;
    } else {
        y.readOnly = true;
        //send data to database
    }
}






//     document.getElementById("price1").onfocus = this.focus();
// }

// function change2() {
//     document.getElementById("price2").readOnly = false;
// }

// function change3() {
//     var checkBox = document.getElementById("checkbox3");
//     var text = document.getElementById("text");
//     if (checkBox.checked == true) {
//         text.style.display = "block";
//         document.getElementById("price3") = price;
//     } else {
//         text.style.display = "none";
//     }
// }