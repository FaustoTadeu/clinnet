<?php

namespace  Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SEstado
 *
 * @ORM\Table(name="s_estado", indexes={@ORM\Index(name="fk_S_Estado_S_Pais1_idx", columns={"s_pais_nu_seq_spais"})})
 * @ORM\Entity
 */
class SEstado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nu_seq_sestado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nuSeqSestado;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_sestado", type="string", length=45, nullable=false)
     */
    private $nomeSestado;

    /**
     * @var string
     *
     * @ORM\Column(name="sigla_sestado", type="string", length=45, nullable=false)
     */
    private $siglaSestado;

    /**
     * @var \Application\Entity\SPais
     *
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SPais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="s_pais_nu_seq_spais", referencedColumnName="nu_seq_spais")
     * })
     */
    private $sPaisNuSeqSpais;

    /**
     * @return int
     */
    public function getNuSeqSestado()
    {
        return $this->nuSeqSestado;
    }

    /**
     * @param int $nuSeqSestado
     */
    public function setNuSeqSestado($nuSeqSestado)
    {
        $this->nuSeqSestado = $nuSeqSestado;
    }

    /**
     * @return string
     */
    public function getNomeSestado()
    {
        return $this->nomeSestado;
    }

    /**
     * @param string $nomeSestado
     */
    public function setNomeSestado($nomeSestado)
    {
        $this->nomeSestado = $nomeSestado;
    }

    /**
     * @return string
     */
    public function getSiglaSestado()
    {
        return $this->siglaSestado;
    }

    /**
     * @param string $siglaSestado
     */
    public function setSiglaSestado($siglaSestado)
    {
        $this->siglaSestado = $siglaSestado;
    }

    /**
     * @return \Application\Entity\SPais
     */
    public function getSPaisNuSeqSpais()
    {
        return $this->sPaisNuSeqSpais;
    }

    /**
     * @param \Application\Entity\SPais $sPaisNuSeqSpais
     */
    public function setSPaisNuSeqSpais($sPaisNuSeqSpais)
    {
        $this->sPaisNuSeqSpais = $sPaisNuSeqSpais;
    }

}

