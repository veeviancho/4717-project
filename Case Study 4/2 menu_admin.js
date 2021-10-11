function change1() {
    x = document.getElementById("check1");
    price = document.getElementById("newPrice1") 
    if (x.checked) {
        price.type = "number";
    } else {
        price.type = "hidden";
    }
}

function change2() {
    x = document.getElementById("check2");
    priceA = document.getElementById("newPrice2") 
    priceB = document.getElementById("newPrice3") 
    if (x.checked) {
        priceA.type = "number";
        priceB.type = "number";
    } else {
        priceA.type = "hidden";
        priceB.type = "hidden";
    }
}

function change3() {
    x = document.getElementById("check3");
    priceA = document.getElementById("newPrice4") 
    priceB = document.getElementById("newPrice5") 
    if (x.checked) {
        priceA.type = "number";
        priceB.type = "number";
    } else {
        priceA.type = "hidden";
        priceB.type = "hidden";
    }
}