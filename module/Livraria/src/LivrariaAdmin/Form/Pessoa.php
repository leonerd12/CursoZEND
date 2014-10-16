<?php

namespace LivrariaAdmin\Form;

use Zend\Form\Form,
    Zend\Form\Element\Select;

class Pessoa extends Form {
    
    protected $profissoes;

    public function __construct($name = null, array $profissoes= null) {
        parent::__construct('pessoa');
        $this->profissoes  = $profissoes;

        $this->setAttribute('method', 'post');
//        $this->setInputFilter(new LivroFilter);

        $this->add(array(
            'name' => 'id',
            'attibutes' => array(
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
                'placeholder' => 'Entre com o nome'
            )
        ));
        $this->add(array(
            'name' => 'nasc',
            'options' => array(
                'type' => 'text',
                'label' => 'Ano de Nascimento'
            ),
            'attributes' => array(
                'placeholder' => 'Entre com o ano de nascimento'
            )
        ));
        $this->add(array(
            'name' => 'telefone',
            'options' => array(
                'type' => 'text',
                'label' => 'Telefone'
            ),
            'attributes' => array(
                'placeholder' => 'Entre com o telefone'
            )
        ));
        
        $profissao = new Select();
        $profissao->setLabel("Profissão")
                ->setName("profissao")
                ->setOptions(array('value_options' => $this->profissoes)
        );
        $this->add($profissao);

        $this->add(array(
            'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'value' => 'Salvar',
                'class' => 'btn-success'
            )
        ));
    }

}
