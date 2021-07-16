$('#register-form').parsley().on('field:validated', function () {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
})


    .on('form:submit', function () {
        if ($("#register-form").parsley().isValid()) {

            var password = $("#password").val()
            var passwordConf = $("#passwordConf").val()
            if (password == passwordConf) {
                alert("Equal")
                // Check if email is already existing in database
                $.ajax({
                    type: "POSt",
                    url: "",
                    data: {
                        email: $("#email").val(),
                        emailValidate: "yes"
                    },
                    success: function (response) {
                        // If email doesn't exist
                        alert("email response: " + response)

                        if (response == true) {
                            alert("Email Does Not Exist")

                            $.ajax({
                                type: "POST",
                                url: "",
                                data: {
                                    username: $("#username").val(),
                                    validateUsername: "yes"
                                },
                                success: function (response) {
                                    if (response == true) {
                                        alert("Username Does Not Exist")
                                        // If Username doesn't exist
                                        $.ajax({
                                            type: "POST",
                                            url: "",
                                            data: {
                                                username: $("#username").val(),
                                                email: $("#email").val(),
                                                password: $("#password").val(),
                                                passwordConf: $("#passwordConf").val(),
                                                registerBtn: "yes"
                                            },
                                            success: function (response) {
                                                // Register
                                                alert(response)
                                                window.location = "http://localhost:2000/" + response;
                                                return true;
                                            }
                                        });
                                    } else {
                                        // If Username exists
                                        alert("Username Exists")
                                        var response = [];
                                        response.item = 'username';
                                        response.message = 'Username Already Exists';

                                        var FieldInstance = $('[name=' + response.item + ']').parsley(),
                                            errorName = response.item + '-custom';

                                        window.ParsleyUI.removeError(FieldInstance, errorName);

                                        window.ParsleyUI.addError(FieldInstance, errorName, response.message);

                                        // email remove custom message
                                        var response = [];
                                        response.item = 'email';
                                        response.message = 'Email Already Exists';

                                        var FieldInstance = $('[name=' + response.item + ']').parsley(),
                                            errorName = response.item + '-custom';

                                        window.ParsleyUI.removeError(FieldInstance, errorName);
                                        
                                        return false;
                                    }
                                }
                            });


                            // If email exists
                        } else {
                            alert("Email Exists")
                            var response = [];
                            response.item = 'email';
                            response.message = 'Email Already Exists';

                            var FieldInstance = $('[name=' + response.item + ']').parsley(),
                                errorName = response.item + '-custom';

                            window.ParsleyUI.removeError(FieldInstance, errorName);

                            window.ParsleyUI.addError(FieldInstance, errorName, response.message);
                            return false;
                        }
                    }
                });


            } else {
                // PasswordConf
                var response = [];
                response.item = 'passwordConf';
                response.message = 'Passwords Do Not Match';

                var FieldInstance = $('[name=' + response.item + ']').parsley(),
                    errorName = response.item + '-custom';

                window.ParsleyUI.removeError(FieldInstance, errorName);

                window.ParsleyUI.addError(FieldInstance, errorName, response.message);
                return false;
            }
        } else {
            return false;
        }

        return false;

    });