<?php

namespace Ecommerce\PhotographyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 */
class Photo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var \DateTime
     */
    private $dateDeCreation;

    /**
     * @var string
     */
    private $emplacementFichier;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Photo
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Photo
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set emplacementFichier
     *
     * @param string $emplacementFichier
     * @return Photo
     */
    public function setEmplacementFichier($emplacementFichier)
    {
        $this->emplacementFichier = $emplacementFichier;

        return $this;
    }

    /**
     * Get emplacementFichier
     *
     * @return string 
     */
    public function getEmplacementFichier()
    {
        return $this->emplacementFichier;
    }
    /**
     * @var \DateTime
     */
    private $dateCreation;


}
