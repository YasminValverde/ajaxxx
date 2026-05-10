$(function () {
    $("a").click(function (event) {
        event.preventDefault();
        $("a").removeClass("active");
        $(this).addClass("active");

        // Obtenim els paràmetres de l'href de l'enllaç clicat
        var href = $(this).attr("href");
        var esport = href.split("esport=")[1].split("&")[0];
        var model = href.split("model=")[1];

        if (esport === "tennis") {
            // Tennis: crida AJAX amb GET (els paràmetres van a la URL)
            $("#detalls").load("pagina1.php?esport=" + esport + "&model=" + model);
        } else {
            // Padel: crida AJAX amb POST (els paràmetres van al cos de la petició)
            $("#detalls").load("pagina1.php", { esport: esport, model: model });
        }
    });
});
