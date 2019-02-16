<?php
/**
 * Created by PhpStorm.
 * User: Fausto Alves
 * Date: 07/02/2018
 * Time: 13:27
 */

namespace Application\Dao;

use Application\Entity\SCidade;
use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;

/**
 * Class SCidadeDao
 * @package Application\Dao
 */
class SCidadeDao
{

    /**
     * @var string
     */
    protected $entityName = '\\Application\\Entity\\SCidade';

    /**
     * @var string
     */
    protected $identifier = "nuSeqScidade";

    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @var EntityManager
     */
    protected $entityManager;

    // Constructor method is used to inject dependencies to the controller.
    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }


    /**
     * Pega Cidades por IdEstado
     *
     * @param $idEstado
     * @return array - Lista de cidades
     */
    public function getCidadesByIdEstado($idEstado)
    {
        $cidades = $this->entityManager
            ->getRepository(SCidade::class)
            ->findBy(['sEstadoNuSeqSestado' => $idEstado]);

        return $cidades;
    }
}