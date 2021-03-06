/*
Celine Leano
1/6/2019
328/cupcakes/validate.js
Validates form
 */

document.getElementById("cupcake").onsubmit = validate;

function validate() {
    // Clear error messages
    var clearAll = document.getElementsByClassName("err");
    for (var i = 0; i < clearAll.length; i++) {
        clearAll[i].style.visibility = "hidden";
    }

    var isValid = true;

    // Check name
    var fullName = document.getElementById("fullName").value;
    if (fullName == "") {
        var errName = document.getElementById("err-name");
        errName.style.visibility = "visible";
        isValid = false;
    }

    // Check for at least one cupcake
    var cupcakes = document.getElementsByName("cupcakes[]");
    var checked = 0;

    for (i = 0; i < cupcakes.length; i++) {
        if (cupcakes[i].checked) {
            checked++;
        }
    }

    if (checked < 1) {
        var errCupcake = document.getElementById("err-cupcake");
        errCupcake.style.visibility = "visible";
        isValid = false;
    }

    return isValid;
}