<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity(repositoryClass="ForumBundle\Repository\ReponseRepository")
 */
class Reponse
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
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var int
     *
     * @ORM\Column(name="jaime", type="integer", nullable=true)
     */
    private $jaime;

    /**
     * @var int
     *
     * @ORM\Column(name="jaimePas", type="integer", nullable=true)
     */
    private $jaimePas;


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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Reponse
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set jaime
     *
     * @param integer $jaime
     *
     * @return Reponse
     */
    public function setJaime($jaime)
    {
        $this->jaime = $jaime;

        return $this;
    }

    /**
     * Get jaime
     *
     * @return int
     */
    public function getJaime()
    {
        return $this->jaime;
    }

    /**
     * Set jaimePas
     *
     * @param integer $jaimePas
     *
     * @return Reponse
     */
    public function setJaimePas($jaimePas)
    {
        $this->jaimePas = $jaimePas;

        return $this;
    }

    /**
     * Get jaimePas
     *
     * @return int
     */
    public function getJaimePas()
    {
        return $this->jaimePas;
    }
}