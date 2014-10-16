<?php

namespace LivrariaAdmin\Controller;

class ProfissoesController extends CrudController {

    public function __construct() {
        $this->entity = "Livraria\Entity\Profissoes";
        $this->form = "LivrariaAdmin\Form\Profissao";
        $this->service = "Livraria\Service\Profissao";
        $this->controller = "profissoes";
        $this->route = "livraria-admin";
    }

}
