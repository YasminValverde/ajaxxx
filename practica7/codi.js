$(function () {
    $("#formulari1").on("submit", function (e) {
        e.preventDefault();
        var numero1 = $("#numero1").val();
        $.get("pagina1.php", { numero1: numero1 }, function (dades) {
            $("#resultat1").html("El resultado es " + dades);
        });
    });

       $("#formulari2").on("submit", function (e) {
        e.preventDefault();
        var numero2 = $("#numero2").val();
        $.post("pagina1.php", { numero2: numero2 }, function (dades) {
            $("#resultat2").html("El resultado es " + dades);
        });
    });
});
