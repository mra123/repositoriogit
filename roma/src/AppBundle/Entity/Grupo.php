<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupo
 *
 * @ORM\Table(name="grupo")
 * @ORM\Entity
 */
class Grupo
{
    /**
     * @var string
     *
     * @ORM\Column(name="Curso", type="string", length=45, nullable=true)
     */
    private $curso;

    /**
     * @var string
     *
     * @ORM\Column(name="Turno", type="string", length=45, nullable=true)
     */
    private $turno;

    /**
     * @var integer
     *
     * @ORM\Column(name="idGrupo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgrupo;



    /**
     * Set curso
     *
     * @param string $curso
     *
     * @return Grupo
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return string
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set turno
     *
     * @param string $turno
     *
     * @return Grupo
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;

        return $this;
    }

    /**
     * Get turno
     *
     * @return string
     */
    public function getTurno()
    {
        return $this->turno;
    }

    /**
     * Get idgrupo
     *
     * @return integer
     */
    public function getIdgrupo()
    {
        return $this->idgrupo;
    }
}
