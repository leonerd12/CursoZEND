<?php

namespace Livraria\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="profissoes")
 * @ORM\Entity(repositoryClass="Livraria\Entity\ProfissaoRepository")
 */
class Profissao {

    public function __construct($options = null) {
        Configurator::configure($this, $options);
        $this->livros = new ArrayCollection();
    }

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $nome;

    /**
     * @ORM\OneToMany(targetEntity="Livraria\Entity\Pessoa", mappedBy="pessoa_id")
     */
    protected $pessoas;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function __toString() {
        return $this->nome;
    }

    public function getPessoas() {
        return $this->pessoas;
    }

    public function setPessoas($pessoas) {
        $this->pessoas = $pessoas;
        return $this;
    }

    public function toArray() {
        return array('id' => $this->getId(), 'nome' => $this->getNome());
    }

}