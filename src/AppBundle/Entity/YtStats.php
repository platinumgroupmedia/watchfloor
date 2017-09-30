<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * YtStats
 *
 * @ORM\Table(name="yt_stats")
 * @ORM\Entity
 */
class YtStats
{
    /**
     * @var string
     *
     * @ORM\Column(name="ytid", type="string", length=255, nullable=false)
     */
    private $ytid;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_count", type="integer", nullable=false)
     */
    private $commentCount;

    /**
     * @var string
     *
     * @ORM\Column(name="ytupdated", type="string", length=255, nullable=false)
     */
    private $ytupdated;

    /**
     * @var integer
     *
     * @ORM\Column(name="updated", type="integer", nullable=false)
     */
    private $updated;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set ytid
     *
     * @param string $ytid
     *
     * @return YtStats
     */
    public function setYtid($ytid)
    {
        $this->ytid = $ytid;

        return $this;
    }

    /**
     * Get ytid
     *
     * @return string
     */
    public function getYtid()
    {
        return $this->ytid;
    }

    /**
     * Set commentCount
     *
     * @param integer $commentCount
     *
     * @return YtStats
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;

        return $this;
    }

    /**
     * Get commentCount
     *
     * @return integer
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * Set ytupdated
     *
     * @param string $ytupdated
     *
     * @return YtStats
     */
    public function setYtupdated($ytupdated)
    {
        $this->ytupdated = $ytupdated;

        return $this;
    }

    /**
     * Get ytupdated
     *
     * @return string
     */
    public function getYtupdated()
    {
        return $this->ytupdated;
    }

    /**
     * Set updated
     *
     * @param integer $updated
     *
     * @return YtStats
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return integer
     */
    public function getUpdated()
    {
        return $this->updated;
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
}
