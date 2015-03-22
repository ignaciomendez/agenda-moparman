<?php

namespace MDOAgendaMoparmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class VehicleCategory {
 
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="Vehicle", inversedBy="category")
     * @ORM\JoinColumn(name="vehicle_id", referencedColumnName="id")
     */
    private $vehicles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vehicles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return VehicleCategory
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
     * Add vehicles
     *
     * @param \MDOAgendaMoparmanBundle\Entity\Vehicle $vehicles
     * @return VehicleCategory
     */
    public function addVehicle(\MDOAgendaMoparmanBundle\Entity\Vehicle $vehicles)
    {
        $this->vehicles[] = $vehicles;

        return $this;
    }

    /**
     * Remove vehicles
     *
     * @param \MDOAgendaMoparmanBundle\Entity\Vehicle $vehicles
     */
    public function removeVehicle(\MDOAgendaMoparmanBundle\Entity\Vehicle $vehicles)
    {
        $this->vehicles->removeElement($vehicles);
    }

    /**
     * Get vehicles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVehicles()
    {
        return $this->vehicles;
    }
}
