<?php
namespace Funcionario\Controller\Factory;

use Interop\Container\ContainerInterface;
use Funcionario\Controller\FuncionarioController;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * This is the factory for IndexController. Its purpose is to instantiate the
 * controller.
 */
class FuncionarioControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container,
                             $requestedName, array $options = null)
    {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');

        // Instantiate the controller and inject dependencies
        return new FuncionarioController($entityManager);
    }
}