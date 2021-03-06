<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonModule for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Session\Container;

class AdminController extends AbstractActionController
{

    public function __construct() {

    }
    public function indexAction()
    {

        $session = new Container("login");
        if(!isset($session->idPessoa)) {
            $this->redirect()->toUrl('/');
        }

        $this->layout()->setTemplate('layout/layoutAdmin');
        return [];
    }
}
