<?php

/**
 * Description of ProcessadorController
 *
 * @author gilmario
 */
class ProcessadorController {

    private $action;

    function __construct($action = "") {
        $this->action = $action;
    }

    public function incluirHtml($pagina) {
        $this->action = $pagina;
        include '../App/View/layout.php';
    }

    public function conteudo() {
        include "../App/View/" . $this->action . ".php";
    }

}
