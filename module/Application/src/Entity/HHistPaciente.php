<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HHistPaciente
 *
 * @ORM\Table(name="h_hist_paciente", indexes={@ORM\Index(name="fk_H_Hist_Paciente_S_Consulta1_idx", columns={"S_Consulta_nu_seq_sconsulta"})})
 * @ORM\Entity
 */
class HHistPaciente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nu_seq_hist_paciente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nuSeqHistPaciente;

    /**
     * @var string
     *
     * @ORM\Column(name="peso_hist_paciente", type="string", length=45, nullable=true)
     */
    private $pesoHistPaciente;

    /**
     * @var string
     *
     * @ORM\Column(name="pressao_hist_paciente", type="string", length=45, nullable=true)
     */
    private $pressaoHistPaciente;

    /**
     * @var string
     *
     * @ORM\Column(name="bat_cardiacoshist_paciente", type="string", length=45, nullable=true)
     */
    private $batCardiacoshistPaciente;

    /**
     * @var \Application\Entity\SConsulta
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SConsulta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="S_Consulta_nu_seq_sconsulta", referencedColumnName="nu_seq_sconsulta")
     * })
     */
    private $sConsultaNuSeqSconsulta;

    /**
     * @return int
     */
    public function getNuSeqHistPaciente()
    {
        return $this->nuSeqHistPaciente;
    }

    /**
     * @param int $nuSeqHistPaciente
     */
    public function setNuSeqHistPaciente($nuSeqHistPaciente)
    {
        $this->nuSeqHistPaciente = $nuSeqHistPaciente;
    }

    /**
     * @return string
     */
    public function getPesoHistPaciente()
    {
        return $this->pesoHistPaciente;
    }

    /**
     * @param string $pesoHistPaciente
     */
    public function setPesoHistPaciente($pesoHistPaciente)
    {
        $this->pesoHistPaciente = $pesoHistPaciente;
    }

    /**
     * @return string
     */
    public function getPressaoHistPaciente()
    {
        return $this->pressaoHistPaciente;
    }

    /**
     * @param string $pressaoHistPaciente
     */
    public function setPressaoHistPaciente($pressaoHistPaciente)
    {
        $this->pressaoHistPaciente = $pressaoHistPaciente;
    }

    /**
     * @return string
     */
    public function getBatCardiacoshistPaciente()
    {
        return $this->batCardiacoshistPaciente;
    }

    /**
     * @param string $batCardiacoshistPaciente
     */
    public function setBatCardiacoshistPaciente($batCardiacoshistPaciente)
    {
        $this->batCardiacoshistPaciente = $batCardiacoshistPaciente;
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

}

