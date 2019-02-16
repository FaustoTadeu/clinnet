<?php

namespace  Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SExame
 *
 * @ORM\Table(name="s_exame")
 * @ORM\Entity
 */
class SExame
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nu_seq_sexame", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nuSeqSexame;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_sexame", type="string", length=45, nullable=true)
     */
    private $dsSexame;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_sexame", type="string", length=45, nullable=true)
     */
    private $tipoSexame;

    /**
     * @var string
     *
     * @ORM\Column(name="finalidade_sexame", type="string", length=45, nullable=true)
     */
    private $finalidadeSexame;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Application\Entity\SConsulta", inversedBy="sExameNuSeqSexame")
     * @ORM\JoinTable(name="s_exame_has_s_consulta",
     *   joinColumns={
     *     @ORM\JoinColumn(name="S_Exame_nu_seq_sexame", referencedColumnName="nu_seq_sexame")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="S_consulta_nu_seq_sconsulta", referencedColumnName="nu_seq_sconsulta")
     *   }
     * )
     */
    private $sConsultaNuSeqSconsulta;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sConsultaNuSeqSconsulta = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getNuSeqSexame()
    {
        return $this->nuSeqSexame;
    }

    /**
     * @param int $nuSeqSexame
     */
    public function setNuSeqSexame($nuSeqSexame)
    {
        $this->nuSeqSexame = $nuSeqSexame;
    }

    /**
     * @return string
     */
    public function getDsSexame()
    {
        return $this->dsSexame;
    }

    /**
     * @param string $dsSexame
     */
    public function setDsSexame($dsSexame)
    {
        $this->dsSexame = $dsSexame;
    }

    /**
     * @return string
     */
    public function getTipoSexame()
    {
        return $this->tipoSexame;
    }

    /**
     * @param string $tipoSexame
     */
    public function setTipoSexame($tipoSexame)
    {
        $this->tipoSexame = $tipoSexame;
    }

    /**
     * @return string
     */
    public function getFinalidadeSexame()
    {
        return $this->finalidadeSexame;
    }

    /**
     * @param string $finalidadeSexame
     */
    public function setFinalidadeSexame($finalidadeSexame)
    {
        $this->finalidadeSexame = $finalidadeSexame;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSConsultaNuSeqSconsulta()
    {
        return $this->sConsultaNuSeqSconsulta;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $sConsultaNuSeqSconsulta
     */
    public function setSConsultaNuSeqSconsulta($sConsultaNuSeqSconsulta)
    {
        $this->sConsultaNuSeqSconsulta = $sConsultaNuSeqSconsulta;
    }


}

