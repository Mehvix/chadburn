$(document).ready(function () {

    $('#message_form').on('submit', function (event) {
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url: "send_message.php",
            method: "POST",
            data: form_data,
            dataType: "JSON",
            success: function (data) {
                if (data.error !== '') {
                    $('#message_form')[0].reset();
                    $('#messages').html(data.error);
                    $('#id').val('0');
                    load_message();
                }
            }
        })
    });

    load_message();

    function load_message() {
        $.ajax({
            url: "fetch_message.php",
            method: "POST",
            success: function (data) {
                $('#display_messages').html(data);
            }
        })
    }
});