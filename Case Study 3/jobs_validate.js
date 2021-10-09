function validate_name() {
    var name = document.getElementById("name").value;
    // var regexp = /^[a-zA-Z ]{2,30}$/;
    // var regexp = /^[A-Za-z ]$/;

    // start of str [any alphabet lower & upper, space], 0 or more characters acceptable, end of string
    var regexp = /^[a-zA-Z ]*$/;
    // console.log(regexp.test(name));
    if (regexp.test(name) == false) {
        alert("Name should only contain alphabet characters & character spaces!")
        document.getElementById("name").value = "";
    }
}

function validate_email() {
    var email = document.getElementById("email").value;
    console.log(email);
    // var regexp = /@(?=[\w]).*\.(?=[\w])/;
    // var regexp = /(?=.*[\.])(?=.*[@])/;

    // The email field contains a user name part follows by “@” and a domain name part. 
    // The user name contains word characters including hyphen (“-”) and period (“.”).
    // The domain name contains two to four address extensions.
    // Each extension is string of word characters and separated from the others by a period (“.”).
    // The last extension must have two to three characters.
    // var regexp = /^[\w.-]+@([\w]+\.){2,3}[\w]{2,3}$/;
    var regexp = /^[\w.-]+@([\w]+\.){1,2}([\w]+\.)?[\w]{2,3}$/;

    console.log("hello@google.com --> " + regexp.test("hello@google.com")); //username@domain (true)
    console.log("he!!o@google.com --> " + regexp.test("he!!o@google.com")); //username not word character (false)
    console.log("he o@google.com --> " + regexp.test("he o@google.com")); //username not word character (false)
    console.log("hellogoogle --> " + regexp.test("hellogoogle")); //no @ (false)

    console.log("hel-lo@google.com --> " + regexp.test("hel-lo@google.com")); //include hyphen (true)
    console.log("hel.lo@google.com --> " + regexp.test("hel.lo@google.com")); //include period (true)

    console.log("hello@google.com.com.com --> " + regexp.test("hello@google.com.com.com")); //4 address extensions (true), each extension are word char (true)
    console.log("hello@com --> " + regexp.test("hello@com")); //1 address extension (false)
    console.log("hello@google.com.com.com.com --> " + regexp.test("hello@google.com.com.com.com")); //5 address extensions (false)

    console.log("hello@google.*o*.com --> " + regexp.test("hello@google.*o*.com")); //extension not word characters (false)
    console.log("hello@goo le.com.com --> " + regexp.test("hello@goo le.com.com")); //extension not word characters (false)

    console.log("hello@google --> " + regexp.test("hello@google")); //last extension must have 2-3 characters (false)
    console.log("hello@google.com.comma -->" + regexp.test("hello@google.com.comma")); //last extension must have 2-3 characters (false)

    if (regexp.test(email) == false) {
        alert("Please enter valid email!")
    }
}

function validate_date() {
    // convert to Date objects to compare
    var date = document.getElementById("date").value;
    var date_object = new Date(date)
    var today = new Date();

    if (date_object <= today) {
        alert("Date cannot be today or the past!");
        document.getElementById("date").value = "";
        //date = ""; //doesn't work
    }
}

