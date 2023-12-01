$(document).ready(function () {
    $("#conditions").hide();

    let fname_err = true;
    let lname_err = true;
    let num_err = true;
    let pin_err = true;
    let email_err = true;
    let pass_err = true;
    //  --------------name validation-------------
    $("#fname").keyup(function () {
        fnameCheck();
    })

    function fnameCheck() {
        let fname = $("#fname").val();

        if (fname.length == '') {
            $("#fnamecheck").html("*enter First name ")
            fname_err = false;
            return false;
        }
        else {
            $("#fnamecheck").html("")

        }
        if (!isNaN(fname)) {
            $("#fnamecheck").html("*enter characters only ")
            fname_err = false;
            return false;
        }
        else {
            $("#fnamecheck").html("")

        }
    }
    $("#lname").keyup(function () {
        lnameCheck();
    })

    function lnameCheck() {
        let lname = $("#lname").val();

        if (lname.length == '') {
            $("#lnamecheck").html("*enter last name ")
            lname_err = false;
            return false;
        }
        else {
            $("#lnamecheck").html("")

        }
        if (!isNaN(lname)) {
            $("#lnamecheck").html("*enter characters only ")
            lname_err = false;
            return false;
        }
        else {
            $("#lnamecheck").html("")

        }
    }
    // // -------------number validation--------------
    $("#number").keyup(function () {
        numberCheck();
    })

    function numberCheck() {
        let num = $("#number").val()

        if (num.length == '') {
            $("#numbercheck").html("*enter number ")
            num_err = false;
            return false;
        }
        else {
            $("#numbercheck").html("")
        }
        if (isNaN(num)) {
            $("#numbercheck").html("*enter number only ")
            num_err = false;
            return false;
        }
        else {
            $("#numbercheck").html("")

        }
    }
    // // -------------pin validation--------------
    $("#pin").keyup(function () {
        pinCheck();
    })

    function pinCheck() {
        let pin = $("#pin").val()

        if (pin.length == '') {
            $("#pincheck").html("*enter number ")
            pin_err = false;
            return false;
        }
        else {
            $("#pincheck").html("")
        }
        if (isNaN(pin) || pin.length>=6) {
            $("#pincheck").html("*enter number only and less than 6 Digit ")
            pin_err = false;
            return false;
        }
        else {
            $("#pincheck").html("")

        }
    }

    // ---------------Email validation------------
    $("#email").keyup(function () {
        emailCheck();
    })

    function emailCheck() {
        let email = $("#email").val()
        let mailcheck = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if (email.length == '') {
            $("#emailcheck").html("*enter Email ")
            email_err = false;
            return false;
        }
        else {
            $("#emailcheck").html("")
        }
        if (email.match(mailcheck)) {
            $("#emailcheck").html("")
            email_err = false;
            return true;
        }
        else {
            $("#emailcheck").html("*enter valid email")
        }
    }
   //  --------------Password validation-------------
   $("#pass").keyup(function () {
    passCheck();
})

function passCheck() {
    let pass = $("#pass").val();

    if (pass.length == '') {
        $("#passcheck").html("*enter Password ")
        pass_err = false;
        return false;
    }
    else {
        $("#passcheck").html("")

    }
    if (pass.length<=8) {
        $("#passcheck").html("*Password must be 8 character.")
        pass_err = false;
        return false;
    }
    else {
        $("#passcheck").html("")

    }
}
    // -----------submit--------------
    $("#submit").click(function () {
    fname_err = true;
     lname_err = true;
     num_err = true;
     pin_err = true;
     email_err = true;
     pass_err = true;

        fnameCheck();
        lnameCheck();
        numberCheck();
        pinCheck();
        emailCheck();
        passCheck();


        if ((fname_err == true) && (num_err == true) && (email_err = true) && (lname_err = true) && (pin_err = true) && (pass_err = true)) {
            return true;
        }
        else {
            return false;
        }
    });
});