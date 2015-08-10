<?php

include_once '../App/Controller/ProcessadorController.php';
if (isset($_POST['carregar'])) {
    $controller = new ProcessadorController($_POST['carregar']);
    $controller->conteudo();
} else {
    $controller = new ProcessadorController();
    $controller->incluirHtml("index");
}

// Exempos de sites de consultoria agraria
//http://agrar.eco.br/
//http://www.exagro.com.br/
//http://www.suporterural.com.br/
