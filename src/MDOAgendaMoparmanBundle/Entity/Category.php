<?php

namespace MDOAgendaMoparmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Category
{
    /**
     * @ORM\ManyToMany(targetEntity="Contact", mappedBy="category")
     */
    private $id;

    /**
     * @var string
     */
    private $name;


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
     * @return Category
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contacts;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contacts = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * Add contacts
     *
     * @param \MDOAgendaMoparmanBundle\Entity\Contact $contacts
     * @return Category
     */
    public function addContact(\MDOAgendaMoparmanBundle\Entity\Contact $contacts)
    {
        $contacts->addCategory($this);
        $this->contacts[] = $contacts;

        return $this;
    }

    /**
     * Remove contacts
     *
     * @param \MDOAgendaMoparmanBundle\Entity\Contact $contacts
     */
    public function removeContact(\MDOAgendaMoparmanBundle\Entity\Contact $contacts)
    {
        $this->contacts->removeElement($contacts);
    }

    /**
     * Get contacts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContacts()
    {
        return $this->contacts;
    }
}
