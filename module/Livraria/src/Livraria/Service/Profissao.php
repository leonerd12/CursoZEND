<?php

namespace Livraria\Service;

use Doctrine\ORM\EntityManager;

class Profissao extends AbstractService{
    public function __construct(EntityManager $em) {
        parent::__construct($em);
        $this->entity = 'Livraria\Entity\Profissao';
    }
}
