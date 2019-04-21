$(document).ready(function () {


    $("form").submit(function (e) {

        e.preventDefault();
        var name = $("#name").val();
        var surname = $("#surname").val();
        var email = $("#email").val();
        var topic = $("#topic").val();
        var wallet = $("#wallet").val();
        var subscription = $("input#subscription").val();
        $.ajax({
            type: "POST",
            url: "../actions/registration.php",
            dataType: "json",
            data: {
                name: name,
                surname: surname,
                email: email,
                topic: topic,
                wallet : wallet,
                subscription: subscription
            },
            success: function (data) {
                if (data.code === "200") {
                    window.location = "../actions/success.php";
                } else {
                    $(".form-message").html("<ul>" + data.msg + "</ul>");
                    $(".form-message").css("display", "block");
                }

            }
        })


    })


});