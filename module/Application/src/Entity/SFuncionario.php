<?php

namespace  Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SFuncionario
 *
 * @ORM\Table(name="s_funcionario", indexes={@ORM\Index(name="fk_S_Funcionario_S_Pessoa1_idx", columns={"sfuncionario_nu_seq_spessoa"})})
 * @ORM\Entity
 */
class SFuncionario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nu_seq_sfuncionario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nuSeqSfuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="dt_inicio_sfuncionario", type="string", length=45, nullable=false)
     */
    private $dtInicioSfuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="regime_contr_sfuncionario", type="string", length=45, nullable=false)
     */
    private $regimeContrSfuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="hr_inicio_sfuncionario", type="string", length=45, nullable=true)
     */
    private $hrInicioSfuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="hr_final_sfuncionario", type="string", length=45, nullable=true)
     */
    private $hrFinalSfuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="especialidade_sfuncionario", type="string", length=45, nullable=false)
     */
    private $especialidadeSfuncionario;

    /**
     * @var \Application\Entity\SPessoa
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SPessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sfuncionario_nu_seq_spessoa", referencedColumnName="nu_seq_spessoa")
     * })
     */
    private $sfuncionarioNuSeqSpessoa;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SConsulta", inversedBy="sFuncionarioNuSeqFuncionario")
     * @ORM\JoinTable(name="s_funcionario_s_consulta",
     *   joinColumns={
     *     @ORM\JoinColumn(name="s_funcionario_nu_seq_funcionario", referencedColumnName="nu_seq_sfuncionario")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="sconsulta_nu_seq_sconsulta", referencedColumnName="nu_seq_sconsulta")
     *   }
     * )
     */
    private $sconsultaNuSeqSconsulta;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sconsultaNuSeqSconsulta = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getNuSeqSfuncionario()
    {
        return $this->nuSeqSfuncionario;
    }

    /**
     * @param int $nuSeqSfuncionario
     */
    public function setNuSeqSfuncionario($nuSeqSfuncionario)
    {
        $this->nuSeqSfuncionario = $nuSeqSfuncionario;
    }

    /**
     * @return string
     */
    public function getDtInicioSfuncionario()
    {
        return $this->dtInicioSfuncionario;
    }

    /**
     * @param string $dtInicioSfuncionario
     */
    public function setDtInicioSfuncionario($dtInicioSfuncionario)
    {
        $this->dtInicioSfuncionario = $dtInicioSfuncionario;
    }

    /**
     * @return string
     */
    public function getRegimeContrSfuncionario()
    {
        return $this->regimeContrSfuncionario;
    }

    /**
     * @param string $regimeContrSfuncionario
     */
    public function setRegimeContrSfuncionario($regimeContrSfuncionario)
    {
        $this->regimeContrSfuncionario = $regimeContrSfuncionario;
    }

    /**
     * @return string
     */
    public function getHrInicioSfuncionario()
    {
        return $this->hrInicioSfuncionario;
    }

    /**
     * @param string $hrInicioSfuncionario
     */
    public function setHrInicioSfuncionario($hrInicioSfuncionario)
    {
        $this->hrInicioSfuncionario = $hrInicioSfuncionario;
    }

    /**
     * @return string
     */
    public function getHrFinalSfuncionario()
    {
        return $this->hrFinalSfuncionario;
    }

    /**
     * @param string $hrFinalSfuncionario
     */
    public function setHrFinalSfuncionario($hrFinalSfuncionario)
    {
        $this->hrFinalSfuncionario = $hrFinalSfuncionario;
    }

    /**
     * @return string
     */
    public function getEspecialidadeSfuncionario()
    {
        return $this->especialidadeSfuncionario;
    }

    /**
     * @param string $especialidadeSfuncionario
     */
    public function setEspecialidadeSfuncionario($especialidadeSfuncionario)
    {
        $this->especialidadeSfuncionario = $especialidadeSfuncionario;
    }

    /**
     * @return \Application\Entity\SPessoa
     */
    public function getSfuncionarioNuSeqSpessoa()
    {
        return $this->sfuncionarioNuSeqSpessoa;
    }

    /**
     * @param \Application\Entity\SPessoa $sfuncionarioNuSeqSpessoa
     */
    public function setSfuncionarioNuSeqSpessoa($sfuncionarioNuSeqSpessoa)
    {
        $this->sfuncionarioNuSeqSpessoa = $sfuncionarioNuSeqSpessoa;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSconsultaNuSeqSconsulta()
    {
        return $this->sconsultaNuSeqSconsulta;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $sconsultaNuSeqSconsulta
     */
    public function setSconsultaNuSeqSconsulta($sconsultaNuSeqSconsulta)
    {
        $this->sconsultaNuSeqSconsulta = $sconsultaNuSeqSconsulta;
    }

}

