<?php

namespace MDOAgendaMoparmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 */
class Contact
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $notes;

    /**
     * @var string
     */
    private $photo;

    /**
     * @ORM\ManyToMany(targetEntity="Category", inversedBy="contacts")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $categories;

    /**
     * @ORM\ManyToMany(targetEntity="Vehicle", inversedBy="owner")
     * @ORM\JoinColumn(name="vehicle_id", referencedColumnName="id")
     */
    private $vehicle;

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
     * @return Contact
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
     * Set email
     *
     * @param string $email
     * @return Contact
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
     * Set phone
     *
     * @param string $phone
     * @return Contact
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Contact
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Contact
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Contact
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
     * Set photo
     *
     * @param string $photo
     * @return Contact
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
     * Set categories
     *
     * @param array $categories
     * @return Contact
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return array 
     */
    public function getCategories()
    {
        return $this->categories;
    }
    /**
     * @var \MDOAgendaMoparmanBundle\Entity\Category
     */
    private $category;


    /**
     * Set category
     *
     * @param \MDOAgendaMoparmanBundle\Entity\Category $category
     * @return Contact
     */
    public function setCategory(\MDOAgendaMoparmanBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \MDOAgendaMoparmanBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->category = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add category
     *
     * @param \MDOAgendaMoparmanBundle\Entity\Category $category
     * @return Contact
     */
    public function addCategory(\MDOAgendaMoparmanBundle\Entity\Category $category)
    {
        $this->category[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \MDOAgendaMoparmanBundle\Entity\Category $category
     */
    public function removeCategory(\MDOAgendaMoparmanBundle\Entity\Category $category)
    {
        $this->category->removeElement($category);
    }



    /**
     * Add vehicle
     *
     * @param \MDOAgendaMoparmanBundle\Entity\Vehicle $vehicle
     * @return Contact
     */
    public function addVehicle(\MDOAgendaMoparmanBundle\Entity\Vehicle $vehicle)
    {
        $this->vehicle[] = $vehicle;

        return $this;
    }

    /**
     * Remove vehicle
     *
     * @param \MDOAgendaMoparmanBundle\Entity\Vehicle $vehicle
     */
    public function removeVehicle(\MDOAgendaMoparmanBundle\Entity\Vehicle $vehicle)
    {
        $this->vehicle->removeElement($vehicle);
    }

    /**
     * Get vehicle
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }
    /**
     * @var \MDOAgendaMoparmanBundle\Entity\Picture
     */
    private $picture;


    /**
     * Set picture
     *
     * @param \MDOAgendaMoparmanBundle\Entity\Picture $picture
     * @return Contact
     */
    public function setPicture(\MDOAgendaMoparmanBundle\Entity\Picture $picture = null)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return \MDOAgendaMoparmanBundle\Entity\Picture 
     */
    public function getPicture()
    {
        return $this->picture;
    }
}
