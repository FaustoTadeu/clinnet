<?php

namespace  Application\Entity;;

use Doctrine\ORM\Mapping as ORM;

/**
 * SCategoriaMedicamentos
 *
 * @ORM\Table(name="s_categoria_medicamentos")
 * @ORM\Entity
 */
class SCategoriaMedicamentos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nu_seq_scategoria_med", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nuSeqScategoriaMed;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_scategoria_med", type="string", length=45, nullable=true)
     */
    private $nomeScategoriaMed;

    /**
     * @return int
     */
    public function getNuSeqScategoriaMed()
    {
        return $this->nuSeqScategoriaMed;
    }

    /**
     * @param int $nuSeqScategoriaMed
     */
    public function setNuSeqScategoriaMed($nuSeqScategoriaMed)
    {
        $this->nuSeqScategoriaMed = $nuSeqScategoriaMed;
    }

    /**
     * @return string
     */
    public function getNomeScategoriaMed()
    {
        return $this->nomeScategoriaMed;
    }

    /**
     * @param string $nomeScategoriaMed
     */
    public function setNomeScategoriaMed($nomeScategoriaMed)
    {
        $this->nomeScategoriaMed = $nomeScategoriaMed;
    }

}

