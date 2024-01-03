$(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
$(document).ready(function() {
    $("#show_hide_c_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_c_password input').attr("type") == "text"){
            $('#show_hide_c_password input').attr('type', 'password');
            $('#show_hide_c_password i').addClass( "fa-eye-slash" );
            $('#show_hide_c_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_c_password input').attr("type") == "password"){
            $('#show_hide_c_password input').attr('type', 'text');
            $('#show_hide_c_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_c_password i').addClass( "fa-eye" );
        }
    });
});
$(document).ready(function() {
    $('#myForm').submit(function(event) {
        // Prevent the default form submission
        event.preventDefault();

        // Check if any of the fields are empty
        var isEmpty = false;
        $('input, select').each(function() {
            if ($(this).val() === '') {
                isEmpty = true;
                return false; // Break the loop if an empty field is found
            }
        });

        // Show popup if any field is empty
        if (isEmpty) {
            alert('Fill all the fields');
        } else {
            // If all fields are filled, submit the form
            $('#myForm').unbind('submit').submit();
        }
    });
});