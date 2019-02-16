<?php
/**
 * Created by PhpStorm.
 * User: Fausto Alves
 * Date: 07/02/2018
 * Time: 13:27
 */

namespace Application\Dao;

use Application\Entity\SPessoa;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\QueryBuilder;
use Interop\Container\ContainerInterface;
use Doctrine\ORM\Query\Expr\Join;

/**
 * Class SPessoaDao
 * @package Application\Dao
 */
class SPessoaDao
{

    /**
     * @var string
     */
    protected $entityName = '\\Application\\Entity\\SPessoa';

    /**
     * @var string
     */
    protected $identifier = "nuSeqSpessoa";

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
     * Pega Pessoa pelo email e senha
     *
     * @param $params - Array: Email / Senha do Paciente
     * @return array - Lista de pessoa
     */
    public function getPessoaByEmailPassword($params)
    {
       $user = $this->entityManager
           ->getRepository(SPessoa::class)
           ->findBy(['emailSpessoa' => $params['emailLogin'], 'senhaSpessoa'=> $params['passwordLogin']]);

        return $user;
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