<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * cadunida - teste comentario GITHUB
 *
 * @ORM\Table(name="cadunida")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\cadunidaRepository")
 */
class cadunida
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=60)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="sigla", type="string", length=3)
     */
    private $sigla;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datatualiza", type="date")
     */
    private $datatualiza;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return cadunida
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
     * Set sigla
     *
     * @param string $sigla
     *
     * @return cadunida
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;

        return $this;
    }

    /**
     * Get sigla
     *
     * @return string
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Set datatualiza
     *
     * @param \DateTime $datatualiza
     *
     * @return cadunida
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

