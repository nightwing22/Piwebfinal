<?php


namespace MainBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


use Doctrine\ORM\Mapping as ORM;

/**

 * @ORM\Entity(repositoryClass="MainBundle\Repository\UserRepository")
 * @Vich\Uploadable
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="utilisateur")

 */

class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**

     * @ORM\Column(type="string",nullable=true)

     */
    protected $pays
    ;  /**

 * @ORM\Column(type="string",nullable=true)

 */
    protected $ville;

    /**

     * @ORM\Column(type="string",nullable=true)

     */
    protected $cp;

    /**
     * @ORM\Column(type="boolean",nullable=true)
     */

    protected $statutcoupon;
    /**
     * @ORM\Column(name="sexe", type="string", length=150)
     */
    protected $sexe;

    /**
     * @ORM\Column( type="string", length=150,nullable=true)
     */
    protected $firstname;
    /**
     * @ORM\Column( type="string", length=150,nullable=true)
     */
    protected $lastname;

    /**
     * @ORM\OneToMany(targetEntity="MainBundle\Entity\Product", mappedBy="user")

     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    protected $produit;
    /**
     * @ORM\OneToMany(targetEntity="MainBundle\Entity\VenteFlash", mappedBy="user")

     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    protected $venteflash;
    /**
     * @ORM\OneToMany(targetEntity="MainBundle\Entity\Magasin", mappedBy="user")

     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    protected $magasin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenaissance", type="date")
     */
     protected $datenaissance;



    /**
     *
     *
     * @ORM\Column(name="nom", type="string")
     */
    protected $nom;
    public function __construct()
{
    parent::__construct();
    // your own logic
    $this->roles = array('ROLE_USER');
    $this->image= new Image();
    $this->events = new ArrayCollection();


}




    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return User
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     *
     * @return User
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
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
     * Add venteflash
     *
     * @param \MainBundle\Entity\VenteFlash $venteflash
     *
     * @return User
     */
    public function addVenteflash(\MainBundle\Entity\VenteFlash $venteflash)
    {
        $this->venteflash[] = $venteflash;

        return $this;
    }

    /**
     * Remove venteflash
     *
     * @param \MainBundle\Entity\VenteFlash $venteflash
     */
    public function removeVenteflash(\MainBundle\Entity\VenteFlash $venteflash)
    {
        $this->venteflash->removeElement($venteflash);
    }

    /**
     * Get venteflash
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVenteflash()
    {
        return $this->venteflash;
    }
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="product_image", fileNameProperty="imageName")
     *
     */
    private $imageFile;

    /**
     * @ORM\Column(name="image",type="string", length=255,nullable=true)
     *
     * @var string
     */
    private $imageName;


    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Product
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageName
     *
     * @return Product
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;


        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageName()
    {
        return $this->imageName;
    }








    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return User
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Add produit
     *
     * @param \MainBundle\Entity\Product $produit
     *
     * @return User
     */
    public function addProduit(\MainBundle\Entity\Product $produit)
    {
        $this->produit[] = $produit;

        return $this;
    }

    /**
     * Remove produit
     *
     * @param \MainBundle\Entity\Product $produit
     */
    public function removeProduit(\MainBundle\Entity\Product $produit)
    {
        $this->produit->removeElement($produit);
    }

    /**
     * Get produit
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }










    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return User
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
     * Set cp
     *
     * @param string $cp
     *
     * @return User
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set statutcoupon
     *
     * @param boolean $statutcoupon
     *
     * @return User
     */
    public function setStatutcoupon($statutcoupon)
    {
        $this->statutcoupon = $statutcoupon;

        return $this;
    }

    /**
     * Get statutcoupon
     *
     * @return boolean
     */
    public function getStatutcoupon()
    {
        return $this->statutcoupon;
    }

    /**
     * Add magasin
     *
     * @param \MainBundle\Entity\Magasin $magasin
     *
     * @return User
     */
    public function addMagasin(\MainBundle\Entity\Magasin $magasin)
    {
        $this->magasin[] = $magasin;

        return $this;
    }

    /**
     * Remove magasin
     *
     * @param \MainBundle\Entity\Magasin $magasin
     */
    public function removeMagasin(\MainBundle\Entity\Magasin $magasin)
    {
        $this->magasin->removeElement($magasin);
    }

    /**
     * Get magasin
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMagasin()
    {
        return $this->magasin;
    }
}
