<?php
// src/Presizely/UserBundle/Entity/User.php

namespace Presizely\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity(repositoryClass="Presizely\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;


  /**
   * @ORM\OneToOne(targetEntity="Presizely\UserBundle\Entity\Measurement", cascade={"persist"})
   */
  private $measurement;


  /**
  * @ORM\Column(name="sexe", type="integer", nullable=true)
  */
  private $sexe;


  /**
   * @ORM\Column(name="date_creation", type="datetime")
   */
  protected $date_creation;


  /**
   * @ORM\OneToMany(targetEntity="Presizely\UserBundle\Entity\History", mappedBy="user")
   */
  private $histories;




  public function __construct()
  {
    parent::__construct();
    
    $this->date_creation = new \Datetime();

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
     * Set measurement
     *
     * @param \Presizely\UserBundle\Entity\Measurement $measurement
     * @return User
     */
    public function setMeasurement(\Presizely\UserBundle\Entity\Measurement $measurement = null)
    {
        $this->measurement = $measurement;

        return $this;
    }

    /**
     * Get measurement
     *
     * @return \Presizely\UserBundle\Entity\Measurement 
     */
    public function getMeasurement()
    {
        return $this->measurement;
    }

    /**
     * Set date_creation
     *
     * @param \DateTime $dateCreation
     * @return User
     */
    public function setDateCreation($dateCreation)
    {
        $this->date_creation = $dateCreation;

        return $this;
    }

    /**
     * Get date_creation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * Add histories
     *
     * @param \Presizely\UserBundle\Entity\History $histories
     * @return User
     */
    public function addHistory(\Presizely\UserBundle\Entity\History $histories)
    {
        $this->histories[] = $histories;

        // On lie l'annonce à la candidature
        $history->setUser($this);

        return $this;
    }

    /**
     * Remove histories
     *
     * @param \Presizely\UserBundle\Entity\History $histories
     */
    public function removeHistory(\Presizely\UserBundle\Entity\History $histories)
    {
        $this->histories->removeElement($histories);
    }

    /**
     * Get histories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHistories()
    {
        return $this->histories;
    }

    /**
     * Set sexe
     *
     * @param integer $sexe
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
     * @return integer 
     */
    public function getSexe()
    {
        return $this->sexe;
    }
}
