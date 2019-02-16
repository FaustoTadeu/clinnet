<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SReceita
 *
 * @ORM\Table(name="s_receita")
 * @ORM\Entity
 */
class SReceita
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nu_seq_sreceita", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nuSeqSreceita;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao_sreceita", type="string", length=45, nullable=true)
     */
    private $descricaoSreceita;

    /**
     * @var string
     *
     * @ORM\Column(name="dt_validade_sreceita", type="string", length=45, nullable=true)
     */
    private $dtValidadeSreceita;

    /**
     * @var string
     *
     * @ORM\Column(name="S_Receitacol", type="string", length=45, nullable=true)
     */
    private $sReceitacol;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SMedicamento", mappedBy="sReceitaNuSeqSreceita")
     */
    private $sMedicamentoNuSeqSmedicamento;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sMedicamentoNuSeqSmedicamento = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getNuSeqSreceita()
    {
        return $this->nuSeqSreceita;
    }

    /**
     * @param int $nuSeqSreceita
     */
    public function setNuSeqSreceita($nuSeqSreceita)
    {
        $this->nuSeqSreceita = $nuSeqSreceita;
    }

    /**
     * @return string
     */
    public function getDescricaoSreceita()
    {
        return $this->descricaoSreceita;
    }

    /**
     * @param string $descricaoSreceita
     */
    public function setDescricaoSreceita($descricaoSreceita)
    {
        $this->descricaoSreceita = $descricaoSreceita;
    }

    /**
     * @return string
     */
    public function getDtValidadeSreceita()
    {
        return $this->dtValidadeSreceita;
    }

    /**
     * @param string $dtValidadeSreceita
     */
    public function setDtValidadeSreceita($dtValidadeSreceita)
    {
        $this->dtValidadeSreceita = $dtValidadeSreceita;
    }

    /**
     * @return string
     */
    public function getSReceitacol()
    {
        return $this->sReceitacol;
    }

    /**
     * @param string $sReceitacol
     */
    public function setSReceitacol($sReceitacol)
    {
        $this->sReceitacol = $sReceitacol;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSMedicamentoNuSeqSmedicamento()
    {
        return $this->sMedicamentoNuSeqSmedicamento;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $sMedicamentoNuSeqSmedicamento
     */
    public function setSMedicamentoNuSeqSmedicamento($sMedicamentoNuSeqSmedicamento)
    {
        $this->sMedicamentoNuSeqSmedicamento = $sMedicamentoNuSeqSmedicamento;
    }


}

