<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SPaciente
 *
 * @ORM\Table(name="s_paciente", indexes={@ORM\Index(name="fk_S_Paciente_S_Pessoa1_idx", columns={"s_pessoa_nu_seq_spessoa"})})
 * @ORM\Entity
 */
class SPaciente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nu_seq_spaciente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nuSeqSpaciente;

    /**
     * @var integer
     *
     * @ORM\Column(name="idade_spaciente", type="integer", nullable=true)
     */
    private $idadeSpaciente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_primeiro_atendimento_spaciente", type="date", nullable=true)
     */
    private $dtPrimeiroAtendimentoSpaciente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="possui_alergias_spaciente", type="boolean", nullable=true)
     */
    private $possuiAlergiasSpaciente;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_alergias_spaciente", type="string", length=500, nullable=true)
     */
    private $dsAlergiasSpaciente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fez_cirurgias_spaciente", type="boolean", nullable=true)
     */
    private $fezCirurgiasSpaciente;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_cirurgias_spaciente", type="string", length=500, nullable=true)
     */
    private $dsCirurgiasSpaciente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="faz_uso_alcool_spaciente", type="boolean", nullable=true)
     */
    private $fazUsoAlcoolSpaciente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="faz_uso_med_spaciente", type="boolean", nullable=true)
     */
    private $fazUsoMedSpaciente;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_uso_med_spaciente", type="string", length=500, nullable=true)
     */
    private $dsUsoMedSpaciente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="faz_uso_cigarro", type="boolean", nullable=true)
     */
    private $fazUsoCigarro;

    /**
     * @var integer
     *
     * @ORM\Column(name="tempo_fumante", type="integer", nullable=true)
     */
    private $tempoFumante;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_observacoes_spaciente", type="string", length=500, nullable=true)
     */
    private $dsObservacoesSpaciente;

    /**
     * @var \Application\Entity\SPessoa
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SPessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="s_pessoa_nu_seq_spessoa", referencedColumnName="nu_seq_spessoa")
     * })
     */
    private $sPessoaNuSeqSpessoa;

    /**
     * @return int
     */
    public function getNuSeqSpaciente()
    {
        return $this->nuSeqSpaciente;
    }

    /**
     * @param int $nuSeqSpaciente
     */
    public function setNuSeqSpaciente($nuSeqSpaciente)
    {
        $this->nuSeqSpaciente = $nuSeqSpaciente;
    }

    /**
     * @return int
     */
    public function getIdadeSpaciente()
    {
        return $this->idadeSpaciente;
    }

    /**
     * @param int $idadeSpaciente
     */
    public function setIdadeSpaciente($idadeSpaciente)
    {
        $this->idadeSpaciente = $idadeSpaciente;
    }

    /**
     * @return \DateTime
     */
    public function getDtPrimeiroAtendimentoSpaciente()
    {
        return $this->dtPrimeiroAtendimentoSpaciente;
    }

    /**
     * @param \DateTime $dtPrimeiroAtendimentoSpaciente
     */
    public function setDtPrimeiroAtendimentoSpaciente($dtPrimeiroAtendimentoSpaciente)
    {
        $this->dtPrimeiroAtendimentoSpaciente = $dtPrimeiroAtendimentoSpaciente;
    }

    /**
     * @return bool
     */
    public function isPossuiAlergiasSpaciente()
    {
        return $this->possuiAlergiasSpaciente;
    }

    /**
     * @param bool $possuiAlergiasSpaciente
     */
    public function setPossuiAlergiasSpaciente($possuiAlergiasSpaciente)
    {
        $this->possuiAlergiasSpaciente = $possuiAlergiasSpaciente;
    }

    /**
     * @return string
     */
    public function getDsAlergiasSpaciente()
    {
        return $this->dsAlergiasSpaciente;
    }

    /**
     * @param string $dsAlergiasSpaciente
     */
    public function setDsAlergiasSpaciente($dsAlergiasSpaciente)
    {
        $this->dsAlergiasSpaciente = $dsAlergiasSpaciente;
    }

    /**
     * @return bool
     */
    public function isFezCirurgiasSpaciente()
    {
        return $this->fezCirurgiasSpaciente;
    }

    /**
     * @param bool $fezCirurgiasSpaciente
     */
    public function setFezCirurgiasSpaciente($fezCirurgiasSpaciente)
    {
        $this->fezCirurgiasSpaciente = $fezCirurgiasSpaciente;
    }

    /**
     * @return string
     */
    public function getDsCirurgiasSpaciente()
    {
        return $this->dsCirurgiasSpaciente;
    }

    /**
     * @param string $dsCirurgiasSpaciente
     */
    public function setDsCirurgiasSpaciente($dsCirurgiasSpaciente)
    {
        $this->dsCirurgiasSpaciente = $dsCirurgiasSpaciente;
    }

    /**
     * @return bool
     */
    public function isFazUsoAlcoolSpaciente()
    {
        return $this->fazUsoAlcoolSpaciente;
    }

    /**
     * @param bool $fazUsoAlcoolSpaciente
     */
    public function setFazUsoAlcoolSpaciente($fazUsoAlcoolSpaciente)
    {
        $this->fazUsoAlcoolSpaciente = $fazUsoAlcoolSpaciente;
    }

    /**
     * @return bool
     */
    public function isFazUsoMedSpaciente()
    {
        return $this->fazUsoMedSpaciente;
    }

    /**
     * @param bool $fazUsoMedSpaciente
     */
    public function setFazUsoMedSpaciente($fazUsoMedSpaciente)
    {
        $this->fazUsoMedSpaciente = $fazUsoMedSpaciente;
    }

    /**
     * @return string
     */
    public function getDsUsoMedSpaciente()
    {
        return $this->dsUsoMedSpaciente;
    }

    /**
     * @param string $dsUsoMedSpaciente
     */
    public function setDsUsoMedSpaciente($dsUsoMedSpaciente)
    {
        $this->dsUsoMedSpaciente = $dsUsoMedSpaciente;
    }

    /**
     * @return bool
     */
    public function isFazUsoCigarro()
    {
        return $this->fazUsoCigarro;
    }

    /**
     * @param bool $fazUsoCigarro
     */
    public function setFazUsoCigarro($fazUsoCigarro)
    {
        $this->fazUsoCigarro = $fazUsoCigarro;
    }

    /**
     * @return int
     */
    public function getTempoFumante()
    {
        return $this->tempoFumante;
    }

    /**
     * @param int $tempoFumante
     */
    public function setTempoFumante($tempoFumante)
    {
        $this->tempoFumante = $tempoFumante;
    }

    /**
     * @return string
     */
    public function getDsObservacoesSpaciente()
    {
        return $this->dsObservacoesSpaciente;
    }

    /**
     * @param string $dsObservacoesSpaciente
     */
    public function setDsObservacoesSpaciente($dsObservacoesSpaciente)
    {
        $this->dsObservacoesSpaciente = $dsObservacoesSpaciente;
    }

    /**
     * @return \Application\Entity\SPessoa
     */
    public function getSPessoaNuSeqSpessoa()
    {
        return $this->sPessoaNuSeqSpessoa;
    }

    /**
     * @param \Application\Entity\SPessoa $sPessoaNuSeqSpessoa
     */
    public function setSPessoaNuSeqSpessoa($sPessoaNuSeqSpessoa)
    {
        $this->sPessoaNuSeqSpessoa = $sPessoaNuSeqSpessoa;
    }


}

