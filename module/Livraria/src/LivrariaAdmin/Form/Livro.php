<?php

namespace LivrariaAdmin\Form;

use Zend\Form\Form,
    Zend\Form\Element\Select;

class Livro extends Form {
    
    protected $em;

    public function __construct($name = null, $categoria=null) {
        parent::__construct('livro');
        $this->categorias = $categoria;

        $this->setAttribute('method', 'post');
//        $this->setInputFilter(new CategoriaFilter);

        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type' => 'hidden'
            )
        ));

        $this->add(array(
            'name' => 'nome',
            'options' => array(
                'type' => 'text',
                'label' => 'Nome'
            ),
            'attributes' => array(
                'id' => 'nome',
                'placeholder' => 'Entre com o nome'
            )
        ));
                
        
        $categoria = new Select();
        $categoria->setLabel('Categoria')
                ->setName('categoria')
                ->setOptions(array('value_options' => $categorias)
        );
        
        $this->add(array(
            'name' => 'isbn',
            'options' => array(
                'type' => 'text',
                'label' => 'ISBN'
            ),
            'attributes' => array(
                'id' => 'isbn',
                'placeholder' => 'Entre com o ISBN'
            )
        ));
        
        $this->add(array(
            'name' => 'autor',
            'options' => array(
                'type' => 'text',
                'label' => 'Autor'
            ),
            'attributes' => array(
                'id' => 'autor',
                'placeholder' => 'Entre com o nome do autor'
            )
        ));
        
        $this->add(array(
            'name' => 'valor',
            'options' => array(
                'type' => 'text',
                'label' => 'Valor'
            ),
            'attributes' => array(
                'id' => 'valor',
                'placeholder' => 'Entre com o valor'
            )
        ));

        $this->add(array(
            'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'value' => 'Salvar',
                'class' => 'btn-sucess'
            )
        ));
    }

}
