<?php

namespace Login\Form;

use Application\Entity\SEstado;
use Doctrine\ORM\EntityManager;
use Zend\Form\Form;

class CadastroForm extends Form
{
    public function __construct(EntityManager $entityManager, $name = null)
    {
        // we want to ignore the name passed
        parent::__construct('login');

        $estados = $entityManager->getRepository(SEstado::class)->findAll();
        foreach($estados as $estado) {
            $arrayEstados[$estado->getNuSeqSestado()] = utf8_encode($estado->getNomeSestado());
        }

        $i = 0;
        $defaultClass = "";
        $this->add($this->createTextComponent('cpfPessoa'));

        $this->add($this->createTextComponent('nomePessoa'));

        $this->add($this->createTextComponent('enderecoPessoa'));

        $this->add(array(
            'name' => 'numeroEndereco',
            'type' => 'Number',
            'options' => array(
                'label' => 'Número: ',
            ),
            'attributes' => array(
                'id' => 'numeroEndereco',
                'class' => 'form-control',
            ),
        ));

        $this->add($this->createTextComponent('complementoPessoa'));

        $this->add($this->createTextComponent('bairroPessoa'));

        $this->add(array(
            'type' => 'Zend\Form\Element\Select',
            'name' => 'estadoEndereco',
            'tabindex' => $i++,
            'options' => array(
                'label' => 'Estado',
                'empty_option' => '-- Selecione --',
                'target_class' => 'Application\Entity\SEstado',
                'property' => 'nomeSestado',
                'value_options' => $arrayEstados,

            ),
            'attributes' => array(
                'id' => 'estadoEndereco',
                'class' => 'form-control',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Select',
            'name' => 'cidadeEndereco',
            'tabindex' => $i++,
            'options' => array(
                'label' => 'Cidade',
                'empty_option' => '-- Selecione --',
                'target_class' => 'Application\Entity\SCidade',
                'property' => 'nomeCidade',
                'value_options' => array(
                ),
            ),
            'attributes' => array(
                'id' => 'cidadeEndereco',
                'class' => 'form-control',
            ),
        ));

        $this->add(array(
            'name' => 'dtNascimentoPessoa',
            'type' => 'Date',
            'options' => array(
                'label' => 'Data de Nascimento: ',
            ),
            'attributes' => array(
                'id' => 'dtNascimentoPessoa',
                'class' => 'form-control',
            ),
        ));

        $this->add($this->createTextComponent('telFixoPessoa'));

        $this->add(array(
            'name' => 'emailPessoa',
            'type' => 'Email',
            'options' => array(
                'label' => 'E-mail: ',
            ),
            'attributes' => array(
                'id' => 'emailPessoa',
                'class' => 'form-control',
            ),
        ));

        $this->add(array(
            'name' => 'senhaPessoa',
            'type' => 'Password',
            'options' => array(
                'label' => 'Senha: ',
            ),
            'attributes' => array(
                'id' => 'senhaPessoa',
                'class' => 'form-control',
            ),
        ));

        $this->add(array(
            'name' => 'submitCadastro',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Cadastrar',
                'id' => 'submitCadastro',
                'class' => 'btn-success btn btn-block',
            ),
        ));

        $this->add(array(
            'name' => 'resetCadastro',
            'type' => 'Button',
            'attributes' => array(
                'value' => 'Limpar',
                'id' => 'resetCadastro',
                'class' => 'btn-info btn btn-block',
            ),
        ));
    }

    public function createTextComponent($idComponent)
    {

        return array(
            'name' => $idComponent,
            'type' => 'Text',
            'options' => array(
                'label' => 'CPF: ',
            ),
            'attributes' => array(
                'id' => $idComponent,
                'class' => 'form-control',
            ),
        );
    }
}