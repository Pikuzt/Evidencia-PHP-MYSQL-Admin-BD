$(document).ready(function() {
    $("#ingresar-artista").on("click", function(event) {
        event.preventDefault();

        let datos = new FormData(document.getElementById("form"));
        let url = "Controller/cArtista.php";



        $.ajax({
            url: url,
            type: "POST",
            dataType: "HTML",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                alert(data);

            },
        });
    });
});