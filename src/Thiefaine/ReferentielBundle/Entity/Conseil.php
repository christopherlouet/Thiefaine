<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Conseil
 * @ExclusionPolicy("all")
 */
class Conseil
{
    /**
     * @var integer
     * @Expose
     */
    private $id;

    /**
     * @var string
     * @Expose
     */
    private $titre;

    /**
     * @var string
     * @Expose
     */
    private $message;

    /**
     * @var \DateTime
     */
    private $datecreation;

    /**
     * @var \DateTime
     */
    private $datemiseajour;

    /**
     * @var \DateTime
     * @Expose
     * @SerializedName("validite")
     */
    private $datevalidite;

    /**
     * @var integer
     */
    private $compteurlecture;

    /**
     * @var string
     * @Expose
     * @SerializedName("photo")
     */
    private $urlphoto;

    /**
     * @var string
     * @Expose
     * @SerializedName("lien")
     */
    private $urllien;

    /**
     * @var \Thiefaine\UserBundle\Entity\Utilisateurweb
     */
    private $utilisateurweb;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * @Expose
     */
    private $categories;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return Conseil
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
     * Set message
     *
     * @param string $message
     * @return Conseil
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Conseil
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime 
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set datemiseajour
     *
     * @param \DateTime $datemiseajour
     * @return Conseil
     */
    public function setDatemiseajour($datemiseajour)
    {
        $this->datemiseajour = $datemiseajour;

        return $this;
    }

    /**
     * Get datemiseajour
     *
     * @return \DateTime 
     */
    public function getDatemiseajour()
    {
        return $this->datemiseajour;
    }

    /**
     * Set datevalidite
     *
     * @param \DateTime $datevalidite
     * @return Conseil
     */
    public function setDatevalidite($datevalidite)
    {
        $this->datevalidite = $datevalidite;

        return $this;
    }

    /**
     * Get datevalidite
     *
     * @return \DateTime 
     */
    public function getDatevalidite()
    {
        return $this->datevalidite;
    }

    /**
     * Set compteurlecture
     *
     * @param integer $compteurlecture
     * @return Conseil
     */
    public function setCompteurlecture($compteurlecture)
    {
        $this->compteurlecture = $compteurlecture;

        return $this;
    }

    /**
     * Get compteurlecture
     *
     * @return integer 
     */
    public function getCompteurlecture()
    {
        return $this->compteurlecture;
    }

    /**
     * Set urlphoto
     *
     * @param string $urlphoto
     * @return Conseil
     */
    public function setUrlphoto($urlphoto)
    {
        $this->urlphoto = $urlphoto;

        return $this;
    }

    /**
     * Get urlphoto
     *
     * @return string 
     */
    public function getUrlphoto()
    {
        return $this->urlphoto;
    }

    /**
     * Set urllien
     *
     * @param string $urllien
     * @return Conseil
     */
    public function setUrllien($urllien)
    {
        $this->urllien = $urllien;

        return $this;
    }

    /**
     * Get urllien
     *
     * @return string 
     */
    public function getUrllien()
    {
        return $this->urllien;
    }

    /**
     * Set utilisateurweb
     *
     * @param \Thiefaine\UserBundle\Entity\Utilisateurweb $utilisateurweb
     * @return Conseil
     */
    public function setUtilisateurweb(\Thiefaine\UserBundle\Entity\Utilisateurweb $utilisateurweb = null)
    {
        $this->utilisateurweb = $utilisateurweb;

        return $this;
    }

    /**
     * Get utilisateurweb
     *
     * @return \Thiefaine\UserBundle\Entity\Utilisateurweb 
     */
    public function getUtilisateurweb()
    {
        return $this->utilisateurweb;
    }

    /**
     * Add categories
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Categorie $categories
     * @return Conseil
     */
    public function addCategory(\Thiefaine\ReferentielBundle\Entity\Categorie $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Categorie $categories
     */
    public function removeCategory(\Thiefaine\ReferentielBundle\Entity\Categorie $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
