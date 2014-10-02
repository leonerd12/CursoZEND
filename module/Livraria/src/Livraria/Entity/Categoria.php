<?php

namespace Livraria\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="categorias")
 */
class Categoria {
    public function __construct($options = null) {
        Configurator::configure($this, $options);
        $this->livros = new ArrayCollection();
        
    }
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $nome;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Livraria\Entity\Livro", mappedBy="categoria")
     * @var type 
     */
    protected $livros;


    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function __toString() {
        return $this->nome;
    }
    
    public function getLivros() {
        return $this->livros;
    }

        
    public function toArray() {
        return array('id' => $this->id, 'nome'=>  $this->nome);
    }
}
