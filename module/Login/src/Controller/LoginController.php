<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Login\Controller;

use Application\Dao\SCidadeDao;
use Application\Dao\SEstadoDao;
use Application\Dao\SPessoaDao;
use Doctrine\Common\Cache\ZendDataCache;
use Doctrine\ORM\EntityManager;
use Zend\Json\Json;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Session\Container;
use Zend\View\Model\ViewModel;
use  Zend\Mvc\Plugin\FlashMessenger\FlashMessenger;

class LoginController extends AbstractActionController
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
        $this->layout()->setTemplate('layout/layoutLogin');
        return [];
    }

    public function cadastroAction()
    {
        $this->layout()->setTemplate('layout/layoutLogin');
        $estadoDao = new SEstadoDao($this->entityManager);
        $estados = $estadoDao->getAllEstados();
        return array('entityManager' => $this->entityManager);
    }

    public function logarAction()
    {
       $params =  $this->params()->fromPost();

       $pessoaDao = new SPessoaDao($this->entityManager);
       $pessoa = $pessoaDao->getPessoaByEmailPassword($params);

       if(sizeof($pessoa) == '1') {
           if($pessoa[0]->getStAtivoSpessoa() == "N") {
               $flashMessenger = new FlashMessenger();
               $flashMessenger->addErrorMessage('Sua conta está inativa" Favor entrar em contato conosco!');
               $this->redirect()->toUrl('/login');
           }else {

               $sessionLogin = new Container('login');
               $sessionLogin->idPessoa = $pessoa[0]->getNuSeqSpessoa();
               $sessionLogin->nomePessoa = $pessoa[0]->getNomeSpessoa();

               $flashMessenger = new FlashMessenger();
               $this->redirect()->toUrl('/admin');
           }
       }else {
           $flashMessenger = new FlashMessenger();
           $flashMessenger->addErrorMessage('Login ou senha inválidos. Tente novamente!');
           $this->redirect()->toUrl('/login');
       }
    }

    public function logoutAction () {
        $session = new Container("login");
        $session->getManager()->getStorage()->clear('login');
        $this->redirect()->toUrl('/');
    }

    public function salvarPacienteAction() {

        $params =  $this->params()->fromPost();





        $flashMessenger = new FlashMessenger();
        $flashMessenger->addSuccessMessage('Cadastro salvo com sucesso. Acesse seu email para receber a senha!');
        $this->redirect()->toUrl('/login/cadastro');
    }

    public function buscarCidadeAction() {
        $params =  $this->params()->fromPost();

        $cidadesDao = new SCidadeDao($this->entityManager);
        $cidades = $cidadesDao->getCidadesByIdEstado($params['idEstado']);
        $arrayCidades = $cidades->jsonSerialize();

        echo Json::encode($cidades, true);
        die();

    }

}
