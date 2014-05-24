<?php

namespace Thiefaine\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table(name="GROUPE", indexes={@ORM\Index(name="IDX_F4414BA7FB84DFEA", columns={"idgendarmerie"})})
 * @ORM\Entity
 */
class Groupe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gerergroupes", type="boolean", nullable=false)
     */
    private $gerergroupes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gererutilisateurs", type="boolean", nullable=false)
     */
    private $gererutilisateurs;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gereralertes", type="boolean", nullable=false)
     */
    private $gereralertes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gererinfos", type="boolean", nullable=false)
     */
    private $gererinfos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gererconseils", type="boolean", nullable=false)
     */
    private $gererconseils;

    /**
     * @var \Gendarmerie
     *
     * @ORM\ManyToOne(targetEntity="Gendarmerie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idgendarmerie", referencedColumnName="id")
     * })
     */
    private $idgendarmerie;


    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $utilisateursweb;

    /**
     * @var \Thiefaine\ReferentielBundle\Entity\Gendarmerie
     */
    private $gendarmerie;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->utilisateursweb = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     * @return Groupe
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set gerergroupes
     *
     * @param boolean $gerergroupes
     * @return Groupe
     */
    public function setGerergroupes($gerergroupes)
    {
        $this->gerergroupes = $gerergroupes;

        return $this;
    }

    /**
     * Get gerergroupes
     *
     * @return boolean 
     */
    public function getGerergroupes()
    {
        return $this->gerergroupes;
    }

    /**
     * Set gererutilisateurs
     *
     * @param boolean $gererutilisateurs
     * @return Groupe
     */
    public function setGererutilisateurs($gererutilisateurs)
    {
        $this->gererutilisateurs = $gererutilisateurs;

        return $this;
    }

    /**
     * Get gererutilisateurs
     *
     * @return boolean 
     */
    public function getGererutilisateurs()
    {
        return $this->gererutilisateurs;
    }

    /**
     * Set gereralertes
     *
     * @param boolean $gereralertes
     * @return Groupe
     */
    public function setGereralertes($gereralertes)
    {
        $this->gereralertes = $gereralertes;

        return $this;
    }

    /**
     * Get gereralertes
     *
     * @return boolean 
     */
    public function getGereralertes()
    {
        return $this->gereralertes;
    }

    /**
     * Set gererinfos
     *
     * @param boolean $gererinfos
     * @return Groupe
     */
    public function setGererinfos($gererinfos)
    {
        $this->gererinfos = $gererinfos;

        return $this;
    }

    /**
     * Get gererinfos
     *
     * @return boolean 
     */
    public function getGererinfos()
    {
        return $this->gererinfos;
    }

    /**
     * Set gererconseils
     *
     * @param boolean $gererconseils
     * @return Groupe
     */
    public function setGererconseils($gererconseils)
    {
        $this->gererconseils = $gererconseils;

        return $this;
    }

    /**
     * Get gererconseils
     *
     * @return boolean 
     */
    public function getGererconseils()
    {
        return $this->gererconseils;
    }

    /**
     * Add utilisateursweb
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Utilisateurweb $utilisateursweb
     * @return Groupe
     */
    public function addUtilisateursweb(\Thiefaine\ReferentielBundle\Entity\Utilisateurweb $utilisateursweb)
    {
        $this->utilisateursweb[] = $utilisateursweb;

        return $this;
    }

    /**
     * Remove utilisateursweb
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Utilisateurweb $utilisateursweb
     */
    public function removeUtilisateursweb(\Thiefaine\ReferentielBundle\Entity\Utilisateurweb $utilisateursweb)
    {
        $this->utilisateursweb->removeElement($utilisateursweb);
    }

    /**
     * Get utilisateursweb
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUtilisateursweb()
    {
        return $this->utilisateursweb;
    }

    /**
     * Set gendarmerie
     *
     * @param \Thiefaine\ReferentielBundle\Entity\Gendarmerie $gendarmerie
     * @return Groupe
     */
    public function setGendarmerie(\Thiefaine\ReferentielBundle\Entity\Gendarmerie $gendarmerie = null)
    {
        $this->gendarmerie = $gendarmerie;

        return $this;
    }

    /**
     * Get gendarmerie
     *
     * @return \Thiefaine\ReferentielBundle\Entity\Gendarmerie 
     */
    public function getGendarmerie()
    {
        return $this->gendarmerie;
    }

    public function __toString()
    {
        return $this->getNom();
    }
}