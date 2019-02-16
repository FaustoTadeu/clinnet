<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * SPessoa
 *
 * @ORM\Entity
 * @ORM\Table(name="s_pessoa", indexes={@ORM\Index(name="fk_S_Pessoa_S_Cidade1_idx", columns={"S_Cidade_nu_seq_cidade"}), @ORM\Index(name="fk_S_Funcionario_S_Perfil1_idx", columns={"S_Perfil_nu_seq_sPerfil"})})
 *
 */
class SPessoa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nu_seq_spessoa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nuSeqSpessoa;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpf_spessoa", type="integer", nullable=false)
     */
    private $cpfSpessoa;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_spessoa", type="string", length=45, nullable=false)
     */
    private $nomeSpessoa;

    /**
     * @var string
     *
     * @ORM\Column(name="logradouro_spessoa", type="string", length=45, nullable=false)
     */
    private $logradouroSpessoa;

    /**
     * @var string
     *
     * @ORM\Column(name="num_end_spessoa", type="string", length=45, nullable=false)
     */
    private $numEndSpessoa;

    /**
     * @var string
     *
     * @ORM\Column(name="complemento_spessoa", type="string", length=45, nullable=true)
     */
    private $complementoSpessoa;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro_spessoa", type="string", length=45, nullable=true)
     */
    private $bairroSpessoa;

    /**
     * @var string
     *
     * @ORM\Column(name="cep_spessoa", type="string", length=45, nullable=true)
     */
    private $cepSpessoa;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_fixo_spessoa", type="string", length=45, nullable=false)
     */
    private $telFixoSpessoa;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_cel_spessoa", type="string", length=45, nullable=true)
     */
    private $telCelSpessoa;

    /**
     * @var string
     *
     * @ORM\Column(name="email_spessoa", type="string", length=45, nullable=false)
     */
    private $emailSpessoa;

    /**
     * @var string
     *
     * @ORM\Column(name="senha_spessoa", type="string", length=45, nullable=false)
     */
    private $senhaSpessoa;

    /**
     * @var string
     *
     * @ORM\Column(name="st_ativo_spessoa", type="string", length=45, nullable=false)
     */
    private $stAtivoSpessoa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro_spessoa", type="date", nullable=false)
     */
    private $dtCadastroSpessoa;

    /**
     * @var \Application\Entity\SCidade
     *
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SCidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="S_Cidade_nu_seq_cidade", referencedColumnName="nu_seq_scidade")
     * })
     */
    private $sCidadeNuSeqCidade;

    /**
     * @return int
     */
    public function getNuSeqSpessoa()
    {
        return $this->nuSeqSpessoa;
    }

    /**
     * @param int $nuSeqSpessoa
     */
    public function setNuSeqSpessoa($nuSeqSpessoa)
    {
        $this->nuSeqSpessoa = $nuSeqSpessoa;
    }

    /**
     * @return int
     */
    public function getCpfSpessoa()
    {
        return $this->cpfSpessoa;
    }

    /**
     * @param int $cpfSpessoa
     */
    public function setCpfSpessoa($cpfSpessoa)
    {
        $this->cpfSpessoa = $cpfSpessoa;
    }

    /**
     * @return string
     */
    public function getNomeSpessoa()
    {
        return $this->nomeSpessoa;
    }

    /**
     * @param string $nomeSpessoa
     */
    public function setNomeSpessoa($nomeSpessoa)
    {
        $this->nomeSpessoa = $nomeSpessoa;
    }

    /**
     * @return string
     */
    public function getLogradouroSpessoa()
    {
        return $this->logradouroSpessoa;
    }

    /**
     * @param string $logradouroSpessoa
     */
    public function setLogradouroSpessoa($logradouroSpessoa)
    {
        $this->logradouroSpessoa = $logradouroSpessoa;
    }

    /**
     * @return string
     */
    public function getNumEndSpessoa()
    {
        return $this->numEndSpessoa;
    }

    /**
     * @param string $numEndSpessoa
     */
    public function setNumEndSpessoa($numEndSpessoa)
    {
        $this->numEndSpessoa = $numEndSpessoa;
    }

    /**
     * @return string
     */
    public function getComplementoSpessoa()
    {
        return $this->complementoSpessoa;
    }

    /**
     * @param string $complementoSpessoa
     */
    public function setComplementoSpessoa($complementoSpessoa)
    {
        $this->complementoSpessoa = $complementoSpessoa;
    }

    /**
     * @return string
     */
    public function getBairroSpessoa()
    {
        return $this->bairroSpessoa;
    }

    /**
     * @param string $bairroSpessoa
     */
    public function setBairroSpessoa($bairroSpessoa)
    {
        $this->bairroSpessoa = $bairroSpessoa;
    }

    /**
     * @return string
     */
    public function getCepSpessoa()
    {
        return $this->cepSpessoa;
    }

    /**
     * @param string $cepSpessoa
     */
    public function setCepSpessoa($cepSpessoa)
    {
        $this->cepSpessoa = $cepSpessoa;
    }

    /**
     * @return string
     */
    public function getTelFixoSpessoa()
    {
        return $this->telFixoSpessoa;
    }

    /**
     * @param string $telFixoSpessoa
     */
    public function setTelFixoSpessoa($telFixoSpessoa)
    {
        $this->telFixoSpessoa = $telFixoSpessoa;
    }

    /**
     * @return string
     */
    public function getTelCelSpessoa()
    {
        return $this->telCelSpessoa;
    }

    /**
     * @param string $telCelSpessoa
     */
    public function setTelCelSpessoa($telCelSpessoa)
    {
        $this->telCelSpessoa = $telCelSpessoa;
    }

    /**
     * @return string
     */
    public function getEmailSpessoa()
    {
        return $this->emailSpessoa;
    }

    /**
     * @param string $emailSpessoa
     */
    public function setEmailSpessoa($emailSpessoa)
    {
        $this->emailSpessoa = $emailSpessoa;
    }

    /**
     * @return string
     */
    public function getSenhaSpessoa()
    {
        return $this->senhaSpessoa;
    }

    /**
     * @param string $senhaSpessoa
     */
    public function setSenhaSpessoa($senhaSpessoa)
    {
        $this->senhaSpessoa = $senhaSpessoa;
    }

    /**
     * @return string
     */
    public function getStAtivoSpessoa()
    {
        return $this->stAtivoSpessoa;
    }

    /**
     * @param string $stAtivoSpessoa
     */
    public function setStAtivoSpessoa($stAtivoSpessoa)
    {
        $this->stAtivoSpessoa = $stAtivoSpessoa;
    }

    /**
     * @return \DateTime
     */
    public function getDtCadastroSpessoa()
    {
        return $this->dtCadastroSpessoa;
    }

    /**
     * @param \DateTime $dtCadastroSpessoa
     */
    public function setDtCadastroSpessoa($dtCadastroSpessoa)
    {
        $this->dtCadastroSpessoa = $dtCadastroSpessoa;
    }

    /**
     * @return \Application\Entity\SCidade
     */
    public function getSCidadeNuSeqCidade()
    {
        return $this->sCidadeNuSeqCidade;
    }

    /**
     * @param \Application\Entity\SCidade $sCidadeNuSeqCidade
     */
    public function setSCidadeNuSeqCidade($sCidadeNuSeqCidade)
    {
        $this->sCidadeNuSeqCidade = $sCidadeNuSeqCidade;
    }



}

