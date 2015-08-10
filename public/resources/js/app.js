function carregaPagina(pagina) {
    $.post("/public", {carregar: pagina}, function (dados) {
        $("#conteudo").html(dados);
    });
}

function menu() {
    $(".menu").on("click", function () {
        $(".menu").removeClass("active");
        $(this).addClass("active");
        carregaPagina($(this).attr('pagina'));
        return false;
    });
}

menu();
