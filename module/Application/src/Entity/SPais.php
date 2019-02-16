<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SPais
 *
 * @ORM\Table(name="s_pais")
 * @ORM\Entity
 */
class SPais
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nu_seq_spais", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nuSeqSpais;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_spais", type="string", length=45, nullable=true)
     */
    private $nomeSpais;

    /**
     * @var string
     *
     * @ORM\Column(name="sigla_spais", type="string", length=45, nullable=true)
     */
    private $siglaSpais;

    /**
     * @return int
     */
    public function getNuSeqSpais()
    {
        return $this->nuSeqSpais;
    }

    /**
     * @param int $nuSeqSpais
     */
    public function setNuSeqSpais($nuSeqSpais)
    {
        $this->nuSeqSpais = $nuSeqSpais;
    }

    /**
     * @return string
     */
    public function getNomeSpais()
    {
        return $this->nomeSpais;
    }

    /**
     * @param string $nomeSpais
     */
    public function setNomeSpais($nomeSpais)
    {
        $this->nomeSpais = $nomeSpais;
    }

    /**
     * @return string
     */
    public function getSiglaSpais()
    {
        return $this->siglaSpais;
    }

    /**
     * @param string $siglaSpais
     */
    public function setSiglaSpais($siglaSpais)
    {
        $this->siglaSpais = $siglaSpais;
    }

}

