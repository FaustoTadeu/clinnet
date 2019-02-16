<?php

namespace Login\Form;

use Zend\Form\Form;

class LoginForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('login');

        $this->add(array(
            'name' => 'emailLogin',
            'type' => 'Text',
            'options' => array(
                'label' => 'Email: ',
            ),
            'attributes' => array(
                'id' => 'emailLogin',
                'class' => 'form-control',
            ),
        ));

        $this->add(array(
            'name' => 'passwordLogin',
            'type' => 'Text',
                'options' => array(
                    'label' => 'Senha: ',
            ),
            'attributes' => array(
                'id' => 'passwordLogin',
                'class' => 'form-control',
            ),
        ));

        $this->add(array(
            'name' => 'submitLogin',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Login',
                'id' => 'submitLogin',
                'class' => 'btn-success btn btn-block',
            ),
        ));

        $this->add(array(
            'name' => 'resetLogin',
            'type' => 'Button',
            'attributes' => array(
                'value' => 'Limpar',
                'id' => 'resetButton',
                'class' => 'btn-info btn btn-block',
            ),
        ));
    }
}