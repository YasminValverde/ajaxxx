$(function () {
    $("#boto1").on("click", function (e) {
        e.preventDefault();
        var dni = $("#dni").val();
        $.getJSON("pagina1.php", { dni: dni }, function (dades) {
            $("#resultat").html("DNI: " + dades.nom + "<br>Cognom: " + dades.cognom + "<br>Direccio: "+dades.direccio );
        });
    });
});
