<?php
/**
 * Created by PhpStorm.
 * User: Fausto Alves
 * Date: 07/02/2018
 * Time: 13:27
 */

namespace Application\Dao;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\QueryBuilder;
use Interop\Container\ContainerInterface;
use Doctrine\ORM\Query\Expr\Join;

/**
 * Class SFuncionarioDao
 * @package Application\Dao
 */
class SFuncionarioDao
{

    /**
     * @var string
     */
    protected $entityName = '\\Application\\Entity\\SFuncionario';

    /**
     * @var string
     */
    protected $identifier = "nuSeqSfuncionario";

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
     * Pega todos Funcionarios
     *
     * @return array - Lista de pessoas/funcionarios
     */
    public function getAllFuncionarios()
    {
        $qb = $this->entityManager->createQueryBuilder()
            ->select("pf.nuSeqSfuncionario, pf.dtInicioSfuncionario, ")
            ->from($this->entityName, 'pf')
            ->innerJoin('\\Application\\Entity\\SPessoa', 'p', Join::WITH, 'pf.sfuncionarioNuSeqSpessoa = p.nuSeqSpessoa')
            ->innerJoin('\\Application\\Entity\\SPerfil', 'pe', Join::WITH, 'pf.sfuncionarioNuSeqSpessoa = p.nuSeqSpessoa');
        $funcionariosList = $qb->getQuery()->getResult();
        return $funcionariosList;
    }

    /**
     * Creates a new QueryBuilder instance that is prepopulated for this entity name.
     *
     * @param string $alias
     *
     * @return QueryBuilder
     */
    public function createQueryBuilder($alias)
    {
        return $this->entityManager->createQueryBuilder()
            ->select($alias)
            ->from($this->entityName, $alias);
    }

}