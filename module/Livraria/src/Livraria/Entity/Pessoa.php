<?php

namespace Livraria\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="pessoas")
 * @ORM\Entity(repositoryClass="Livraria\Entity\PessoaRepository")
 */
class Pessoa {

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
     * @ORM\Column(type="text")
     * @var string
     */
    protected $nascimento;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $telefone;

    /**
     * @ORM\ManyToOne(targetEntity="Livraria\Entity\Profissao", inversedBy="pessoa")
     * @ORM\JoinColumn(name="profissao_id", referencedColumnName="id")
     */
    protected $profissao;

    public function __construct($options = null) {
        Configurator::configure($this, $options);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNascimento() {
        return $this->nascimento;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getProfissao() {
        return $this->profissao;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
        return $this;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
        return $this;
    }

    public function setProfissao($profissao) {
        $this->profissao = $profissao;
        return $this;
    }

    public function toArray() {
        return array(
            'id' => $this->getId(),
            'nome' => $this->getNome(),
            'nascimento' => $this->getNascimento(),
            'telefone' => $this->getTelefone(),
            'profissao' => $this->getProfissao()
        );
    }

}
