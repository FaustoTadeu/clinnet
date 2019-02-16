<?php

namespace  Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SAnexoResultado
 *
 * @ORM\Table(name="s_anexo_resultado")
 * @ORM\Entity
 */
class SAnexoResultado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nu_seq_sanexo_resultado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nuSeqSanexoResultado;

    /**
     * @var string
     *
     * @ORM\Column(name="caminho_sanexo_resultado", type="string", length=45, nullable=true)
     */
    private $caminhoSanexoResultado;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SResultConsulta", inversedBy="sAnexoResultadoNuSeqSanexoResultado")
     * @ORM\JoinTable(name="s_anexo_resultado_has_s_result_consulta",
     *   joinColumns={
     *     @ORM\JoinColumn(name="S_Anexo_Resultado_nu_seq_sanexo_resultado", referencedColumnName="nu_seq_sanexo_resultado")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="S_Result_Consulta_nu_seq_res_consulta", referencedColumnName="nu_seq_res_consulta"),
     *     @ORM\JoinColumn(name="S_Result_Consulta_s_consulta_nu_seq_sconsulta", referencedColumnName="s_consulta_nu_seq_sconsulta")
     *   }
     * )
     */
    private $sResultConsultaNuSeqResConsulta;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sResultConsultaNuSeqResConsulta = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getNuSeqSanexoResultado()
    {
        return $this->nuSeqSanexoResultado;
    }

    /**
     * @param int $nuSeqSanexoResultado
     */
    public function setNuSeqSanexoResultado($nuSeqSanexoResultado)
    {
        $this->nuSeqSanexoResultado = $nuSeqSanexoResultado;
    }

    /**
     * @return string
     */
    public function getCaminhoSanexoResultado()
    {
        return $this->caminhoSanexoResultado;
    }

    /**
     * @param string $caminhoSanexoResultado
     */
    public function setCaminhoSanexoResultado($caminhoSanexoResultado)
    {
        $this->caminhoSanexoResultado = $caminhoSanexoResultado;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSResultConsultaNuSeqResConsulta()
    {
        return $this->sResultConsultaNuSeqResConsulta;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $sResultConsultaNuSeqResConsulta
     */
    public function setSResultConsultaNuSeqResConsulta($sResultConsultaNuSeqResConsulta)
    {
        $this->sResultConsultaNuSeqResConsulta = $sResultConsultaNuSeqResConsulta;
    }

}

