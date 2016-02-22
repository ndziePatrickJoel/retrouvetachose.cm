<?php

namespace lostBook\lostBookUserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use lostBook\lostBookBundle\Entity\Annonce;
use \Doctrine\Common\Collections\ArrayCollection;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="lostBook\lostBookUserBundle\Repository\UtilisateurRepository")
 */
class Utilisateur extends BaseUser
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
            
    public function __construct() 
    {
        parent::__construct();
        $this->annonces = new ArrayCollection();
        $this->espaces = new ArrayCollection();
    }

    /**
     * @ORM\OneToMany(targetEntity="lostBook\lostBookBundle\Entity\Annonce", mappedBy="utilisateur")  
     */
    protected $annonces;
    
    /**
     * @ORM\OneToMany(targetEntity="lostBook\lostBookBundle\Entity\Espace", mappedBy="administrateur")
     */
    private $espaces;

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
     * Set isAdmin
     *
     * @param boolean $isAdmin
     * @return Utilisateur
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * Get isAdmin
     *
     * @return boolean 
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
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
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNaissance
     *
     * @param string $dateNaissance
     * @return Utilisateur
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return string 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Utilisateur
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Utilisateur
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Utilisateur
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Utilisateur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Add annonces
     *
     * @param \lostBook\lostBookBundle\Entity\Annonce $annonces
     * @return Utilisateur
     */
    public function addAnnonce(\lostBook\lostBookBundle\Entity\Annonce $annonces)
    {
        $this->annonces[] = $annonces;

        return $this;
    }

    /**
     * Remove annonces
     *
     * @param \lostBook\lostBookBundle\Entity\Annonce $annonces
     */
    public function removeAnnonce(\lostBook\lostBookBundle\Entity\Annonce $annonces)
    {
        $this->annonces->removeElement($annonces);
    }

    /**
     * Get annonces
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnnonces()
    {
        return $this->annonces;
    }

    /**
     * Add espaces
     *
     * @param \lostBook\lostBookBundle\Entity\Espace $espaces
     * @return Utilisateur
     */
    public function addEspace(\lostBook\lostBookBundle\Entity\Espace $espaces)
    {
        $this->espaces[] = $espaces;

        return $this;
    }

    /**
     * Remove espaces
     *
     * @param \lostBook\lostBookBundle\Entity\Espace $espaces
     */
    public function removeEspace(\lostBook\lostBookBundle\Entity\Espace $espaces)
    {
        $this->espaces->removeElement($espaces);
    }

    /**
     * Get espaces
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEspaces()
    {
        return $this->espaces;
    }
}
