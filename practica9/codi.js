$(function () {
  $("#formulari").on("submit", function (e) {
    e.preventDefault();

    var seleccionat = $("input[name='radio']:checked").val();
    if (!seleccionat) {
      alert("Selecciona una opció!");
      return;
    }

    $.ajax({
      type: "GET",
      url: "pagina1.php",
      dataType: "html",
      data: { preg: seleccionat },
      success: function (dades) {
        $("#resultat").html(dades);
      },

    });
  });
});
