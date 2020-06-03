document.addEventListener("DOMContentLoaded", function() {
    var elems = document.querySelectorAll(".timepicker");
    var instances = M.Timepicker.init(elems, options);
});

// Or with jQuery

$(document).ready(function() {
    $(".timepicker").timepicker();
});

document.addEventListener("DOMContentLoaded", function() {
    var elems = document.querySelectorAll(".datepicker");
    var instances = M.Datepicker.init(elems, options);
});

// Or with jQuery

$(document).ready(function() {
    $(".datepicker").datepicker();
});

document.addEventListener("DOMContentLoaded", function() {
    var elems = document.querySelectorAll("select");
    var instances = M.FormSelect.init(elems, options);
});

// Or with jQuery

$(document).ready(function() {
    $("select").formSelect();
});

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
                if (data === "1") {
                    alert("Registro realizado con exito");
                    window.location.href = "lista.php";
                }
            },
        });
    });
});