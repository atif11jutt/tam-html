$(document).ready(function () {
    $('#newsletterForm').submit(function (event) {
        event.preventDefault(); // Prevent the form from submitting traditionally
        var formData = $(this).serialize(); // Serialize form data
        $.ajax({
            type: 'POST',
            url: 'php_mail.php', // Adjust the URL to your PHP script
            data: formData,
            success: function (response) {
                // Handle success response
                $('#newsletterForm').trigger('reset'); // Reset form
                alert('Thank you for subscribing!');
            },
            error: function () {
                // Handle error
                alert('Oops! Something went wrong. Please try again later.');
            }
        });
    });
});