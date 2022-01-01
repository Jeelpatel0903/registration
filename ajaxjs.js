$(document).ready(function () {
    $("#RegButton").on("click", function (e) {
        e.preventDefault();
        var name = $("#Name").val();
        var email = $("#emailID").val();
        var userid = $("#UserName").val();
        var password = $("#Password").val();
        if (name == "" || email == "" || userid == "" || password == "") {
            $("#message").html("All fields are required.").slideDown();
            $("#success").slideUp(2000);
        } else {
            $.ajax({
                type: "POST",
                url: "insert.php",
                data: {
                    fname : name,
                    Email : email,
                    Userid : userid,
                    Password : password
                },
                success: function (data) {
                    
                    if (data == 1) {
                        $("#regForm").trigger("reset");
                        $("#sucess").html("Data Inserted Successfully.").slideDown();
                        $("#message").slideUp(2000);
                    }else {
                        $("#regForm").trigger("reset");
                        $("#message").html("email alreay exit plese try another email").slideDown();
                        $("#success").slideUp(2000);
                    }
                }
            });
        }

    });
    $("#LogButton").on("click", function (e) {
        e.preventDefault();
        var email = $("#logemailID").val();
        var password = $("#logPassword").val();
        if (email == "" || password == "") {
            $("#logmessage").html("All fields are required.").slideDown();
            $("#logsuccess").slideUp();
            $("#logmessage").fadeOut(2000);
        } else {
            $.ajax({
                type: "POST",
                url: "login.php",
                data: {
                    email: email,
					password: password
                    },
                success: function (data) {
                    alert(data);
                    if (data == 1) {
                        $("#logForm").trigger("reset");
                        $("#logsucess").html("Login Sucessfully....").slideDown();
                        $("#logmessage").slideUp();
                        $("#logsucess").fadeOut(2000);
                        $(this). load("/reg and login/home.php");
                    }else {
                        $("#logForm").trigger("reset");
                        $("#logmessage").html("cheak your password").slideDown();
                        $("#logsuccess").slideUp(2000);
                    }
                }
            });
        }

    });
});
