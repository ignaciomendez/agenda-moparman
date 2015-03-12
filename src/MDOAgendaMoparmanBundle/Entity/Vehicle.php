<?php

namespace MDOAgendaMoparmanBundle\Entity;


class Vehicle {
    /**
     * @ORM\ManyToMany(targetEntity="Vehiclecategories", inversedBy="vehicles")
     * @ORM\JoinColumn(name="categories_id", referencedColumnName="id")
     */
    private $categories;
    /**
     * @ORM\ManyToMany(targetEntity="Contact", inversedBy="vehicles")
     * @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     */
    private $owner;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $plate;
    /**
     * @var string
     */
    private $photo;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $notes;
    /**
     * @var integer
     */
    private $id;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->owner = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title
     *
     * @param string $title
     * @return Vehicle
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set plate
     *
     * @param string $plate
     * @return Vehicle
     */
    public function setPlate($plate)
    {
        $this->plate = $plate;

        return $this;
    }

    /**
     * Get plate
     *
     * @return string 
     */
    public function getPlate()
    {
        return $this->plate;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Vehicle
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Vehicle
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Vehicle
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Add categories
     *
     * @param \MDOAgendaMoparmanBundle\Entity\Vehiclecategories $categories
     * @return Vehicle
     */
    public function addcategories(\MDOAgendaMoparmanBundle\Entity\VehicleCategory $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \MDOAgendaMoparmanBundle\Entity\VehicleCategory $categories
     */
    public function removecategories(\MDOAgendaMoparmanBundle\Entity\VehicleCategory $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getcategories()
    {
        return $this->categories;
    }

    /**
     * Add owner
     *
     * @param \MDOAgendaMoparmanBundle\Entity\Contact $owner
     * @return Vehicle
     */
    public function addOwner(\MDOAgendaMoparmanBundle\Entity\Contact $owner)
    {
        $this->owner[] = $owner;

        return $this;
    }

    /**
     * Remove owner
     *
     * @param \MDOAgendaMoparmanBundle\Entity\Contact $owner
     */
    public function removeOwner(\MDOAgendaMoparmanBundle\Entity\Contact $owner)
    {
        $this->owner->removeElement($owner);
    }

    /**
     * Get owner
     *
     * @return array
     */
    public function getOwners()
    {
        return $this->owner;
    }


    /**
     * Get owner
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOwner()
    {
        return $this->owner;
    }
}
