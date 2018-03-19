$( document ).ready(function() {
    jQuery.validator.addMethod("addressValidation", function( value, element ) {
        var regex = new RegExp("((?=^.{2,}$)(?=.*\\d)[0-9a-zA-Z-_\\/.\\s,]*$)");

        if ( !regex.test(value) ) {
            return false;
        }
        return true;
    });

    var validationSettings = {
        rules: {
            'address': {
                required: true,
                addressValidation: true
            }
        },
        messages: {
            'address': {
                addressValidation: "Alphabets, hyphen, comma, slash, space, dot, underscores and at least a number accepts",
                required: "Please enter valid address"
            }
        },
        errorClass : 'alert alert-danger',
        success: function(e) {
            e.remove();
        },
        submitHandler: function(e) {
            alert('Submitted');
        }
    };

    $("#formValidation").validate(validationSettings);
});