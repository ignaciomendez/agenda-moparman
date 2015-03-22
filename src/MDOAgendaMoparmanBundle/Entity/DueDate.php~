<?php

namespace MDOAgendaMoparmanBundle\Entity;


class DueDate {
    /**
     * @ORM\ManyToOne(targetEntity="Vehicle", inversedBy="vehicles")
     * @ORM\JoinColumn(name="vehicle_id", referencedColumnName="id")
     */
    protected $vehicle;
    /**
     * @Column(type="datetime", name="due_date")
     */
    protected $dueDate;
    /**
     * @Column(type="datetime", name="start_date")
     */
    protected $startDate;
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $price;
    /**
     * @var string
     */
    protected $reminders;
    /**
     * @var string
     */
    protected $notes;
    /**
     * @var integer
     */
    private $id;


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
     * Set vehicle
     *
     * @param \MDOAgendaMoparmanBundle\Entity\Vehicle $vehicle
     * @return DueDate
     */
    public function setVehicle(\MDOAgendaMoparmanBundle\Entity\Vehicle $vehicle = null)
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    /**
     * Get vehicle
     *
     * @return \MDOAgendaMoparmanBundle\Entity\Vehicle
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }
    /**
     * @var \DateTime
     */
    private $due_date;

    /**
     * @var \DateTime
     */
    private $start_date;


    /**
     * Set due_date
     *
     * @param \DateTime $dueDate
     * @return DueDate
     */
    public function setDueDate($dueDate)
    {
        $this->due_date = $dueDate;

        return $this;
    }

    /**
     * Get due_date
     *
     * @return \DateTime 
     */
    public function getDueDate()
    {
        return $this->due_date;
    }

    /**
     * Set start_date
     *
     * @param \DateTime $startDate
     * @return DueDate
     */
    public function setStartDate($startDate)
    {
        $this->start_date = $startDate;

        return $this;
    }

    /**
     * Get start_date
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return DueDate
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set reminders
     *
     * @param string $reminders
     * @return DueDate
     */
    public function setReminders($reminders)
    {
        $this->reminders = $reminders;

        return $this;
    }

    /**
     * Get reminders
     *
     * @return string 
     */
    public function getReminders()
    {
        return $this->reminders;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return DueDate
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
     * @var string
     */
    private $description;


    /**
     * Set description
     *
     * @param string $description
     * @return DueDate
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
}
