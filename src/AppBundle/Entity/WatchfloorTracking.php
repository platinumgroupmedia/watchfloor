<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WatchfloorTracking
 *
 * @ORM\Table(name="watchfloor_tracking")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WatchfloorTrackingRepository")
 * @ORM\HasLifecycleCallbacks
 */
class WatchfloorTracking
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="last_id", type="integer")
     */
    private $lastId;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="viewed", type="boolean", options={"default" : 0}, nullable=true)
     */
    private $viewed=0;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;
    
    
    /** @ORM\PrePersist */
    public function onPrePersist()
    {
        $this->created = new \DateTime("now");
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lastId
     *
     * @param integer $lastId
     *
     * @return WatchfloorTracking
     */
    public function setLastId($lastId)
    {
        $this->lastId = $lastId;

        return $this;
    }

    /**
     * Get lastId
     *
     * @return int
     */
    public function getLastId()
    {
        return $this->lastId;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return WatchfloorTracking
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set viewed
     *
     * @param boolean $viewed
     *
     * @return WatchfloorTracking
     */
    public function setViewed($viewed)
    {
        $this->viewed = $viewed;

        return $this;
    }

    /**
     * Get viewed
     *
     * @return boolean
     */
    public function getViewed()
    {
        return $this->viewed;
    }
}
