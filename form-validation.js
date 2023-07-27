$(document).ready(function() {
    $('#userForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: 'save_user.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                alert(response);
            },
            error: function(error) {
                alert('An error occurred while submitting the form.');
            }
        });
    });
});
