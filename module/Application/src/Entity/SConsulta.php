<?php

namespace  Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SConsulta
 *
 * @ORM\Table(name="s_consulta", indexes={@ORM\Index(name="fk_S_Consulta_S_Paciente1_idx", columns={"s_paciente_nu_seq_spaciente"}), @ORM\Index(name="fk_S_Consulta_S_Receita1_idx", columns={"s_receita_nu_seq_sreceita"})})
 * @ORM\Entity
 */
class SConsulta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nu_seq_sconsulta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nuSeqSconsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="dt_inicio_sconsulta", type="string", length=45, nullable=true)
     */
    private $dtInicioSconsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_consulta", type="string", length=45, nullable=true)
     */
    private $dsConsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="st_consulta", type="string", length=45, nullable=true)
     */
    private $stConsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_observacoes_consulta", type="string", length=45, nullable=true)
     */
    private $dsObservacoesConsulta;

    /**
     * @var \Application\Entity\SPaciente
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SPaciente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="s_paciente_nu_seq_spaciente", referencedColumnName="nu_seq_spaciente")
     * })
     */
    private $sPacienteNuSeqSpaciente;

    /**
     * @var \Application\Entity\SReceita
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SReceita")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="s_receita_nu_seq_sreceita", referencedColumnName="nu_seq_sreceita")
     * })
     */
    private $sReceitaNuSeqSreceita;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SExame", mappedBy="sConsultaNuSeqSconsulta")
     */
    private $sExameNuSeqSexame;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SFuncionario", mappedBy="sconsultaNuSeqSconsulta")
     */
    private $sFuncionarioNuSeqFuncionario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sExameNuSeqSexame = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sFuncionarioNuSeqFuncionario = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getNuSeqSconsulta()
    {
        return $this->nuSeqSconsulta;
    }

    /**
     * @param int $nuSeqSconsulta
     */
    public function setNuSeqSconsulta($nuSeqSconsulta)
    {
        $this->nuSeqSconsulta = $nuSeqSconsulta;
    }

    /**
     * @return string
     */
    public function getDtInicioSconsulta()
    {
        return $this->dtInicioSconsulta;
    }

    /**
     * @param string $dtInicioSconsulta
     */
    public function setDtInicioSconsulta($dtInicioSconsulta)
    {
        $this->dtInicioSconsulta = $dtInicioSconsulta;
    }

    /**
     * @return string
     */
    public function getDsConsulta()
    {
        return $this->dsConsulta;
    }

    /**
     * @param string $dsConsulta
     */
    public function setDsConsulta($dsConsulta)
    {
        $this->dsConsulta = $dsConsulta;
    }

    /**
     * @return string
     */
    public function getStConsulta()
    {
        return $this->stConsulta;
    }

    /**
     * @param string $stConsulta
     */
    public function setStConsulta($stConsulta)
    {
        $this->stConsulta = $stConsulta;
    }

    /**
     * @return string
     */
    public function getDsObservacoesConsulta()
    {
        return $this->dsObservacoesConsulta;
    }

    /**
     * @param string $dsObservacoesConsulta
     */
    public function setDsObservacoesConsulta($dsObservacoesConsulta)
    {
        $this->dsObservacoesConsulta = $dsObservacoesConsulta;
    }

    /**
     * @return \Application\Entity\SPaciente
     */
    public function getSPacienteNuSeqSpaciente()
    {
        return $this->sPacienteNuSeqSpaciente;
    }

    /**
     * @param \Application\Entity\SPaciente $sPacienteNuSeqSpaciente
     */
    public function setSPacienteNuSeqSpaciente($sPacienteNuSeqSpaciente)
    {
        $this->sPacienteNuSeqSpaciente = $sPacienteNuSeqSpaciente;
    }

    /**
     * @return \Application\Entity\SReceita
     */
    public function getSReceitaNuSeqSreceita()
    {
        return $this->sReceitaNuSeqSreceita;
    }

    /**
     * @param \Application\Entity\SReceita $sReceitaNuSeqSreceita
     */
    public function setSReceitaNuSeqSreceita($sReceitaNuSeqSreceita)
    {
        $this->sReceitaNuSeqSreceita = $sReceitaNuSeqSreceita;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSExameNuSeqSexame()
    {
        return $this->sExameNuSeqSexame;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $sExameNuSeqSexame
     */
    public function setSExameNuSeqSexame($sExameNuSeqSexame)
    {
        $this->sExameNuSeqSexame = $sExameNuSeqSexame;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSFuncionarioNuSeqFuncionario()
    {
        return $this->sFuncionarioNuSeqFuncionario;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $sFuncionarioNuSeqFuncionario
     */
    public function setSFuncionarioNuSeqFuncionario($sFuncionarioNuSeqFuncionario)
    {
        $this->sFuncionarioNuSeqFuncionario = $sFuncionarioNuSeqFuncionario;
    }
}

