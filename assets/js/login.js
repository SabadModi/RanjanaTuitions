$('#login-form').parsley().on('field:validated', function () {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
})
    .on('form:submit', function () {
        if ($("#login-form").parsley().isValid()) {

            // alert("Submit button pressed")

            $.ajax({
                type: "POST",
                url: "",
                data: {
                    username: $("#username").val(),
                    password: $("#password").val(),
                    signin: "yes"
                },
                success: function (response) {
                    alert(response)
                    if (response.includes(true)) {
                        var location = response.replace('true ', '')
                        window.location = location;
                        return true;
                    } else {
                        // Username
                        var response = [];
                        response.item = 'username';
                        response.message = 'Incorrect Credentials';

                        var FieldInstance = $('[name=' + response.item + ']').parsley(),
                            errorName = response.item + '-custom';

                        window.ParsleyUI.removeError(FieldInstance, errorName);

                        window.ParsleyUI.addError(FieldInstance, errorName, response.message);

                        // Password
                        var response = [];
                        response.item = 'password';
                        response.message = 'Incorrect Credentials';

                        var FieldInstance = $('[name=' + response.item + ']').parsley(),
                            errorName = response.item + '-custom';

                        window.ParsleyUI.removeError(FieldInstance, errorName);

                        window.ParsleyUI.addError(FieldInstance, errorName, response.message);
                        return false;
                    }
                }
            });

            return false;

        } else {
            return false;
        }
    });

// $('#signin').on('click', function () {
//     alert("Submit button pressed")



// })

Parsley.addValidator('#username', {
    validateString: function () {
        // Zippopotam.us returns a status 404 for incorrect zip codes,
        // so we simply return the ajax request:
        return $.ajax('//www.zippopotam.us/' + country + '/' + value)
    },
    messages: { en: 'There is no such zip for the country "%s"' }
});