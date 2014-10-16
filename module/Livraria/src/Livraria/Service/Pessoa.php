<?php

namespace Livraria\Service;

use Doctrine\ORM\EntityManager;

class Pessoa extends AbstractService {

    public function __construct(EntityManager $em) {
        parent::__construct($em);
        $this->entity = 'Livraria\Entity\Pessoa';
    }

    public function insert(array $data) {
        $entity = new $this->entity($data);

        $profissao = $this->em->getReference('Livraria\Entity\Profissao', $data['profissao_id']);

        $entity->setCategoria($categoria);
        $this->em->persist($entity);
        $this->em->flush();

        return $entity;
    }

    public function update(array $data) {
        $entity = $this->em->getReference($this->entity, $data['id']);
        $entity = Configurator::configure($entity, $data);
        
        $categoria = $this->em->getReference($this->entity, $data['pessoa_id']);

        $entity->setCategoria($categoria);
        $this->em->persist($entity);
        $this->em->flush();

        return $entity;
    }

}
