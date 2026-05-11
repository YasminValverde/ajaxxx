$(function () {
    $("a").click(function (event) {
        event.preventDefault();
        $("a").removeClass("active");
        $(this).addClass("active");   
        var href = $(this).attr("href");
        var url = new URL(href, window.location.href);
        var esport = url.searchParams.get("esport");
        var model = url.searchParams.get("model");

        if (esport === "tennis") {
            $("#detalls").load("pagina1.php?esport=" + esport + "&model=" + model);
        } else {
            $("#detalls").load("pagina1.php", { esport: esport, model: model });
        }
    });
});
