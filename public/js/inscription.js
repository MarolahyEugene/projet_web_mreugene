$(document).ready(function() {

    $("#confirm").keyup(function() {

        var champ = $(this).val();
        console.log(champ);

        if ($(this).val() === $("#motdpass").val()) {

            $(this).removeClass('is-invalid');
            $("#confirm").addClass("is-valid");

        } else {
            $("#confirm").addClass("is-invalid");
        }

    });
});