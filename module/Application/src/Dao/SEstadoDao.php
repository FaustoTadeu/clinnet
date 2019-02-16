<?php
/**
 * Created by PhpStorm.
 * User: Fausto Alves
 * Date: 07/02/2018
 * Time: 13:27
 */

namespace Application\Dao;

use Application\Entity\SEstado;
use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;

/**
 * Class SEstadoDao
 * @package Application\Dao
 */
class SEstadoDao
{

    /**
     * @var string
     */
    protected $entityName = '\\Application\\Entity\\SEstado';

    /**
     * @var string
     */
    protected $identifier = "nuSeqSestado";

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
     * Pega todos estados
     *
     * @return array - Lista de estados
     */
    public function getAllEstados()
    {
        $user = $this->entityManager
            ->getRepository(SEstado::class)
            ->findAll();

        return $user;
    }

}