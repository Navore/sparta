<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * cadcateg
 *
 * @ORM\Table(name="cadcateg")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\cadcategRepository")
 */
class cadcateg
{
    /**
     * @var int
     *
     * @ORM\Column(name="codcateg", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codcateg;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=60)
     */
    private $descricao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datatualiza", type="time")
     */
    private $datatualiza;


    /**
     * Get codcateg
     *
     * @return int
     */
    public function getCodcateg()
    {
        return $this->codcateg;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return cadcateg
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set datatualiza
     *
     * @param \DateTime $datatualiza
     *
     * @return cadcateg
     */
    public function setDatatualiza($datatualiza)
    {
        $this->datatualiza = $datatualiza;

        return $this;
    }

    /**
     * Get datatualiza
     *
     * @return \DateTime
     */
    public function getDatatualiza()
    {
        return $this->datatualiza;
    }
}

