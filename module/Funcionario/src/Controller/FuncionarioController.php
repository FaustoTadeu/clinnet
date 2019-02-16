<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Funcionario\Controller;

use Application\Dao\SFuncionarioDao;
use Application\Dao\SPessoaDao;
use Doctrine\ORM\EntityManager;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Session\Container;


class FuncionarioController extends AbstractActionController
{

    /**
     * @var EntityManager
     */
    private $entityManager;

    // Constructor method is used to inject dependencies to the controller.
    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function indexAction()
    {
        $session = new Container("login");
        if(!isset($session->idPessoa)) {
            $this->redirect()->toUrl('/');
        }
        $this->layout()->setTemplate('layout/layoutAdmin');

        $funcionarioDao = new SFuncionarioDao($this->entityManager);
        $funcionariosList = $funcionarioDao->getAllFuncionarios();

        return ['funcionariosList' => $funcionariosList];


    }
}
