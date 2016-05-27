<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stageshow
 *
 * @ORM\Table(name="stageShow", indexes={@ORM\Index(name="fk_stageShow_film1_idx", columns={"film_id"})})
 * @ORM\Entity
 */
class Stageshow
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=500, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="production", type="string", length=255, nullable=true)
     */
    private $production;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="opening", type="date", nullable=true)
     */
    private $opening;

    /**
     * @var string
     *
     * @ORM\Column(name="revival", type="string", length=45, nullable=true)
     */
    private $revival;

    /**
     * @var integer
     *
     * @ORM\Column(name="ibdb", type="integer", nullable=true)
     */
    private $ibdb;

    /**
     * @var string
     *
     * @ORM\Column(name="race", type="string", length=45, nullable=true)
     */
    private $race;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="closing", type="date", nullable=true)
     */
    private $closing;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="integer", nullable=true)
     */
    private $count;

    /**
     * @var integer
     *
     * @ORM\Column(name="stageShow_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $stageshowId;

    /**
     * @var \AppBundle\Entity\Film
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Film")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="film_id", referencedColumnName="film_id")
     * })
     */
    private $film;



    /**
     * Set title
     *
     * @param string $title
     *
     * @return Stageshow
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
     * Set production
     *
     * @param string $production
     *
     * @return Stageshow
     */
    public function setProduction($production)
    {
        $this->production = $production;

        return $this;
    }

    /**
     * Get production
     *
     * @return string
     */
    public function getProduction()
    {
        return $this->production;
    }

    /**
     * Set opening
     *
     * @param \DateTime $opening
     *
     * @return Stageshow
     */
    public function setOpening($opening)
    {
        $this->opening = $opening;

        return $this;
    }

    /**
     * Get opening
     *
     * @return \DateTime
     */
    public function getOpening()
    {
        return $this->opening;
    }

    /**
     * Set revival
     *
     * @param string $revival
     *
     * @return Stageshow
     */
    public function setRevival($revival)
    {
        $this->revival = $revival;

        return $this;
    }

    /**
     * Get revival
     *
     * @return string
     */
    public function getRevival()
    {
        return $this->revival;
    }

    /**
     * Set ibdb
     *
     * @param integer $ibdb
     *
     * @return Stageshow
     */
    public function setIbdb($ibdb)
    {
        $this->ibdb = $ibdb;

        return $this;
    }

    /**
     * Get ibdb
     *
     * @return integer
     */
    public function getIbdb()
    {
        return $this->ibdb;
    }

    /**
     * Set race
     *
     * @param string $race
     *
     * @return Stageshow
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Stageshow
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set closing
     *
     * @param \DateTime $closing
     *
     * @return Stageshow
     */
    public function setClosing($closing)
    {
        $this->closing = $closing;

        return $this;
    }

    /**
     * Get closing
     *
     * @return \DateTime
     */
    public function getClosing()
    {
        return $this->closing;
    }

    /**
     * Set count
     *
     * @param integer $count
     *
     * @return Stageshow
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Get stageshowId
     *
     * @return integer
     */
    public function getStageshowId()
    {
        return $this->stageshowId;
    }

    /**
     * Set film
     *
     * @param \AppBundle\Entity\Film $film
     *
     * @return Stageshow
     */
    public function setFilm(\AppBundle\Entity\Film $film = null)
    {
        $this->film = $film;

        return $this;
    }

    /**
     * Get film
     *
     * @return \AppBundle\Entity\Film
     */
    public function getFilm()
    {
        return $this->film;
    }
}
