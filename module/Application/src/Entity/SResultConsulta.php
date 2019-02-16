<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SResultConsulta
 *
 * @ORM\Table(name="s_result_consulta", indexes={@ORM\Index(name="fk_S_Result_Consulta_S_Consulta1_idx", columns={"s_consulta_nu_seq_sconsulta"})})
 * @ORM\Entity
 */
class SResultConsulta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nu_seq_res_consulta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nuSeqResConsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="parecer_s_res_consulta", type="string", length=45, nullable=true)
     */
    private $parecerSResConsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="dt_finalizacao_s_res_consulta", type="string", length=45, nullable=true)
     */
    private $dtFinalizacaoSResConsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="disponivel_sres_consulta", type="string", length=45, nullable=true)
     */
    private $disponivelSresConsulta;

    /**
     * @var \Application\Entity\SConsulta
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SConsulta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="s_consulta_nu_seq_sconsulta", referencedColumnName="nu_seq_sconsulta")
     * })
     */
    private $sConsultaNuSeqSconsulta;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SAnexoResultado", mappedBy="sResultConsultaNuSeqResConsulta")
     */
    private $sAnexoResultadoNuSeqSanexoResultado;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sAnexoResultadoNuSeqSanexoResultado = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getNuSeqResConsulta()
    {
        return $this->nuSeqResConsulta;
    }

    /**
     * @param int $nuSeqResConsulta
     */
    public function setNuSeqResConsulta($nuSeqResConsulta)
    {
        $this->nuSeqResConsulta = $nuSeqResConsulta;
    }

    /**
     * @return string
     */
    public function getParecerSResConsulta()
    {
        return $this->parecerSResConsulta;
    }

    /**
     * @param string $parecerSResConsulta
     */
    public function setParecerSResConsulta($parecerSResConsulta)
    {
        $this->parecerSResConsulta = $parecerSResConsulta;
    }

    /**
     * @return string
     */
    public function getDtFinalizacaoSResConsulta()
    {
        return $this->dtFinalizacaoSResConsulta;
    }

    /**
     * @param string $dtFinalizacaoSResConsulta
     */
    public function setDtFinalizacaoSResConsulta($dtFinalizacaoSResConsulta)
    {
        $this->dtFinalizacaoSResConsulta = $dtFinalizacaoSResConsulta;
    }

    /**
     * @return string
     */
    public function getDisponivelSresConsulta()
    {
        return $this->disponivelSresConsulta;
    }

    /**
     * @param string $disponivelSresConsulta
     */
    public function setDisponivelSresConsulta($disponivelSresConsulta)
    {
        $this->disponivelSresConsulta = $disponivelSresConsulta;
    }

    /**
     * @return \Application\Entity\SConsulta
     */
    public function getSConsultaNuSeqSconsulta()
    {
        return $this->sConsultaNuSeqSconsulta;
    }

    /**
     * @param \Application\Entity\SConsulta $sConsultaNuSeqSconsulta
     */
    public function setSConsultaNuSeqSconsulta($sConsultaNuSeqSconsulta)
    {
        $this->sConsultaNuSeqSconsulta = $sConsultaNuSeqSconsulta;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSAnexoResultadoNuSeqSanexoResultado()
    {
        return $this->sAnexoResultadoNuSeqSanexoResultado;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $sAnexoResultadoNuSeqSanexoResultado
     */
    public function setSAnexoResultadoNuSeqSanexoResultado($sAnexoResultadoNuSeqSanexoResultado)
    {
        $this->sAnexoResultadoNuSeqSanexoResultado = $sAnexoResultadoNuSeqSanexoResultado;
    }
}

