<?php

namespace  Application\Entity;;

use Doctrine\ORM\Mapping as ORM;

/**
 * SCidade
 *
 * @ORM\Table(name="s_cidade", indexes={@ORM\Index(name="fk_S_Cidade_S_Estado_idx", columns={"s_estado_nu_seq_sestado"})})
 * @ORM\Entity
 */
class SCidade
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nu_seq_scidade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nuSeqScidade;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_cidade", type="string", length=45, nullable=true)
     */
    private $nomeCidade;


    /**
     * @var \Application\Entity\SEstado
     *
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SEstado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="s_estado_nu_seq_sestado", referencedColumnName="nu_seq_sestado")
     * })
     */
    private $sEstadoNuSeqSestado;

    /**
     * @return int
     */
    public function getNuSeqScidade()
    {
        return $this->nuSeqScidade;
    }

    /**
     * @param int $nuSeqScidade
     */
    public function setNuSeqScidade($nuSeqScidade)
    {
        $this->nuSeqScidade = $nuSeqScidade;
    }

    /**
     * @return string
     */
    public function getNomeCidade()
    {
        return $this->nomeCidade;
    }

    /**
     * @param string $nomeCidade
     */
    public function setNomeCidade($nomeCidade)
    {
        $this->nomeCidade = $nomeCidade;
    }

    /**
     * @return \Application\Entity\SEstado
     */
    public function getSEstadoNuSeqSestado()
    {
        return $this->sEstadoNuSeqSestado;
    }

    /**
     * @param \Application\Entity\SEstado $sEstadoNuSeqSestado
     */
    public function setSEstadoNuSeqSestado($sEstadoNuSeqSestado)
    {
        $this->sEstadoNuSeqSestado = $sEstadoNuSeqSestado;
    }

}

