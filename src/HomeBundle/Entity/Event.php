<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="HomeBundle\Repository\EventRepository")
 */
class Event
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    
    /**
     * @var string
     *
     * @ORM\Column(name="titre1", type="string", length=255)
     */


    protected $etape1;


     /**
      * @ORM\OneToOne(targetEntity="AdminBundle\Entity\Image", cascade={"persist", "remove"})
      * @ORM\JoinColumn(nullable=true)
      */
    protected $image;




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
     * Set name
     *
     * @param string $name
     * @return Article
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

     
    /**
     * Set etape1
     *
     * @param string $etape1
     * @return Article
     */
    public function setEtape1($etape1)
    {
        $this->etape1 = $etape1;

        return $this;
    }

    /**
     * Get etape1
     *
     * @return string 
     */
    public function getEtape1()
    {
        return $this->etape1;
    }

      public function setImage(Image $image = null)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }
}
