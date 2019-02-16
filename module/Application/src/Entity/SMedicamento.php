<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SMedicamento
 *
 * @ORM\Table(name="s_medicamento", indexes={@ORM\Index(name="fk_S_Medicamento_S_Categoria_Medicamentos1_idx", columns={"S_Categoria_Medicamentos_nu_seq_scategoria_med"})})
 * @ORM\Entity
 */
class SMedicamento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nu_seq_smedicamento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nuSeqSmedicamento;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_smedicamento", type="string", length=45, nullable=true)
     */
    private $nomeSmedicamento;

    /**
     * @var string
     *
     * @ORM\Column(name="bula_smedicamento", type="string", length=45, nullable=true)
     */
    private $bulaSmedicamento;

    /**
     * @var string
     *
     * @ORM\Column(name="generico_smedicamento", type="string", length=45, nullable=true)
     */
    private $genericoSmedicamento;

    /**
     * @var string
     *
     * @ORM\Column(name="fabrica_smedicamento", type="string", length=45, nullable=true)
     */
    private $fabricaSmedicamento;

    /**
     * @var string
     *
     * @ORM\Column(name="fabricante_smedicamento", type="string", length=45, nullable=true)
     */
    private $fabricanteSmedicamento;

    /**
     * @var \Application\Entity\SCategoriaMedicamentos
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SCategoriaMedicamentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="S_Categoria_Medicamentos_nu_seq_scategoria_med", referencedColumnName="nu_seq_scategoria_med")
     * })
     */
    private $sCategoriaMedicamentosNuSeqScategoriaMed;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SReceita", inversedBy="sMedicamentoNuSeqSmedicamento")
     * @ORM\JoinTable(name="s_medicamento_has_s_receita",
     *   joinColumns={
     *     @ORM\JoinColumn(name="S_Medicamento_nu_seq_smedicamento", referencedColumnName="nu_seq_smedicamento")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="S_Receita_nu_seq_sreceita", referencedColumnName="nu_seq_sreceita")
     *   }
     * )
     */
    private $sReceitaNuSeqSreceita;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sReceitaNuSeqSreceita = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getNuSeqSmedicamento()
    {
        return $this->nuSeqSmedicamento;
    }

    /**
     * @param int $nuSeqSmedicamento
     */
    public function setNuSeqSmedicamento($nuSeqSmedicamento)
    {
        $this->nuSeqSmedicamento = $nuSeqSmedicamento;
    }

    /**
     * @return string
     */
    public function getNomeSmedicamento()
    {
        return $this->nomeSmedicamento;
    }

    /**
     * @param string $nomeSmedicamento
     */
    public function setNomeSmedicamento($nomeSmedicamento)
    {
        $this->nomeSmedicamento = $nomeSmedicamento;
    }

    /**
     * @return string
     */
    public function getBulaSmedicamento()
    {
        return $this->bulaSmedicamento;
    }

    /**
     * @param string $bulaSmedicamento
     */
    public function setBulaSmedicamento($bulaSmedicamento)
    {
        $this->bulaSmedicamento = $bulaSmedicamento;
    }

    /**
     * @return string
     */
    public function getGenericoSmedicamento()
    {
        return $this->genericoSmedicamento;
    }

    /**
     * @param string $genericoSmedicamento
     */
    public function setGenericoSmedicamento($genericoSmedicamento)
    {
        $this->genericoSmedicamento = $genericoSmedicamento;
    }

    /**
     * @return string
     */
    public function getFabricaSmedicamento()
    {
        return $this->fabricaSmedicamento;
    }

    /**
     * @param string $fabricaSmedicamento
     */
    public function setFabricaSmedicamento($fabricaSmedicamento)
    {
        $this->fabricaSmedicamento = $fabricaSmedicamento;
    }

    /**
     * @return string
     */
    public function getFabricanteSmedicamento()
    {
        return $this->fabricanteSmedicamento;
    }

    /**
     * @param string $fabricanteSmedicamento
     */
    public function setFabricanteSmedicamento($fabricanteSmedicamento)
    {
        $this->fabricanteSmedicamento = $fabricanteSmedicamento;
    }

    /**
     * @return \Application\Entity\SCategoriaMedicamentos
     */
    public function getSCategoriaMedicamentosNuSeqScategoriaMed()
    {
        return $this->sCategoriaMedicamentosNuSeqScategoriaMed;
    }

    /**
     * @param \Application\Entity\SCategoriaMedicamentos $sCategoriaMedicamentosNuSeqScategoriaMed
     */
    public function setSCategoriaMedicamentosNuSeqScategoriaMed($sCategoriaMedicamentosNuSeqScategoriaMed)
    {
        $this->sCategoriaMedicamentosNuSeqScategoriaMed = $sCategoriaMedicamentosNuSeqScategoriaMed;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSReceitaNuSeqSreceita()
    {
        return $this->sReceitaNuSeqSreceita;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $sReceitaNuSeqSreceita
     */
    public function setSReceitaNuSeqSreceita($sReceitaNuSeqSreceita)
    {
        $this->sReceitaNuSeqSreceita = $sReceitaNuSeqSreceita;
    }

}

