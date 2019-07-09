// Harrison R. Lara
//    16209936        
//    12/08/2017


// Page credit: https://stackoverflow.com/questions/30141226/contact-form-and-php

$(document).ready(function() {
    $("#submit").click(function() {
        var name = $("#name").val();
        var email = $("#email").val();
        var message = $("#message").val();
        var contact = $("#contact").val();
        $("#returnmessage").empty(); // error or not
        
        if (name == '' || email == '' || contact == '') {
            alert("Please Fill Required Fields");
        } else {
            //successful data return
            $.get("form.php", {
                name1: name,
                email1: email,
                message1: message,
                contact1: contact
            }, function(data) {
                $("#returnmessage").append(data); // Append returned message to message paragraph.
                if (data == "Your Query has been received, We will contact you soon.") {
                    $("#form").reset(); // deletes entered data if successful
                }
            });
        }
    });
});