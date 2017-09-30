<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClickbankProducts
 *
 * @ORM\Table(name="clickbank_products", uniqueConstraints={@ORM\UniqueConstraint(name="idxcbidunique", columns={"cbid"})})
 * @ORM\Entity
 */
class ClickbankProducts
{
    /**
     * @var string
     *
     * @ORM\Column(name="cbid", type="string", length=255, nullable=false)
     */
    private $cbid;

    /**
     * @var integer
     *
     * @ORM\Column(name="PopularityRank", type="integer", nullable=false)
     */
    private $popularityrank;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="HasRecurringProducts", type="string", length=20, nullable=false)
     */
    private $hasrecurringproducts;

    /**
     * @var float
     *
     * @ORM\Column(name="Gravity", type="float", precision=10, scale=7, nullable=false)
     */
    private $gravity;

    /**
     * @var string
     *
     * @ORM\Column(name="PercentPerSale", type="string", length=255, nullable=false)
     */
    private $percentpersale;

    /**
     * @var string
     *
     * @ORM\Column(name="PercentPerRebill", type="string", length=255, nullable=false)
     */
    private $percentperrebill;

    /**
     * @var string
     *
     * @ORM\Column(name="AverageEarningsPerSale", type="string", length=255, nullable=false)
     */
    private $averageearningspersale;

    /**
     * @var string
     *
     * @ORM\Column(name="InitialEarningsPerSale", type="string", length=255, nullable=false)
     */
    private $initialearningspersale;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalRebillAmt", type="string", length=255, nullable=false)
     */
    private $totalrebillamt;

    /**
     * @var string
     *
     * @ORM\Column(name="Referred", type="string", length=255, nullable=false)
     */
    private $referred;

    /**
     * @var string
     *
     * @ORM\Column(name="Commission", type="string", length=255, nullable=false)
     */
    private $commission;

    /**
     * @var string
     *
     * @ORM\Column(name="ActivateDate", type="string", length=255, nullable=false)
     */
    private $activatedate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set cbid
     *
     * @param string $cbid
     *
     * @return ClickbankProducts
     */
    public function setCbid($cbid)
    {
        $this->cbid = $cbid;

        return $this;
    }

    /**
     * Get cbid
     *
     * @return string
     */
    public function getCbid()
    {
        return $this->cbid;
    }

    /**
     * Set popularityrank
     *
     * @param integer $popularityrank
     *
     * @return ClickbankProducts
     */
    public function setPopularityrank($popularityrank)
    {
        $this->popularityrank = $popularityrank;

        return $this;
    }

    /**
     * Get popularityrank
     *
     * @return integer
     */
    public function getPopularityrank()
    {
        return $this->popularityrank;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return ClickbankProducts
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
     * Set description
     *
     * @param string $description
     *
     * @return ClickbankProducts
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
     * Set hasrecurringproducts
     *
     * @param string $hasrecurringproducts
     *
     * @return ClickbankProducts
     */
    public function setHasrecurringproducts($hasrecurringproducts)
    {
        $this->hasrecurringproducts = $hasrecurringproducts;

        return $this;
    }

    /**
     * Get hasrecurringproducts
     *
     * @return string
     */
    public function getHasrecurringproducts()
    {
        return $this->hasrecurringproducts;
    }

    /**
     * Set gravity
     *
     * @param float $gravity
     *
     * @return ClickbankProducts
     */
    public function setGravity($gravity)
    {
        $this->gravity = $gravity;

        return $this;
    }

    /**
     * Get gravity
     *
     * @return float
     */
    public function getGravity()
    {
        return $this->gravity;
    }

    /**
     * Set percentpersale
     *
     * @param string $percentpersale
     *
     * @return ClickbankProducts
     */
    public function setPercentpersale($percentpersale)
    {
        $this->percentpersale = $percentpersale;

        return $this;
    }

    /**
     * Get percentpersale
     *
     * @return string
     */
    public function getPercentpersale()
    {
        return $this->percentpersale;
    }

    /**
     * Set percentperrebill
     *
     * @param string $percentperrebill
     *
     * @return ClickbankProducts
     */
    public function setPercentperrebill($percentperrebill)
    {
        $this->percentperrebill = $percentperrebill;

        return $this;
    }

    /**
     * Get percentperrebill
     *
     * @return string
     */
    public function getPercentperrebill()
    {
        return $this->percentperrebill;
    }

    /**
     * Set averageearningspersale
     *
     * @param string $averageearningspersale
     *
     * @return ClickbankProducts
     */
    public function setAverageearningspersale($averageearningspersale)
    {
        $this->averageearningspersale = $averageearningspersale;

        return $this;
    }

    /**
     * Get averageearningspersale
     *
     * @return string
     */
    public function getAverageearningspersale()
    {
        return $this->averageearningspersale;
    }

    /**
     * Set initialearningspersale
     *
     * @param string $initialearningspersale
     *
     * @return ClickbankProducts
     */
    public function setInitialearningspersale($initialearningspersale)
    {
        $this->initialearningspersale = $initialearningspersale;

        return $this;
    }

    /**
     * Get initialearningspersale
     *
     * @return string
     */
    public function getInitialearningspersale()
    {
        return $this->initialearningspersale;
    }

    /**
     * Set totalrebillamt
     *
     * @param string $totalrebillamt
     *
     * @return ClickbankProducts
     */
    public function setTotalrebillamt($totalrebillamt)
    {
        $this->totalrebillamt = $totalrebillamt;

        return $this;
    }

    /**
     * Get totalrebillamt
     *
     * @return string
     */
    public function getTotalrebillamt()
    {
        return $this->totalrebillamt;
    }

    /**
     * Set referred
     *
     * @param string $referred
     *
     * @return ClickbankProducts
     */
    public function setReferred($referred)
    {
        $this->referred = $referred;

        return $this;
    }

    /**
     * Get referred
     *
     * @return string
     */
    public function getReferred()
    {
        return $this->referred;
    }

    /**
     * Set commission
     *
     * @param string $commission
     *
     * @return ClickbankProducts
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission
     *
     * @return string
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set activatedate
     *
     * @param string $activatedate
     *
     * @return ClickbankProducts
     */
    public function setActivatedate($activatedate)
    {
        $this->activatedate = $activatedate;

        return $this;
    }

    /**
     * Get activatedate
     *
     * @return string
     */
    public function getActivatedate()
    {
        return $this->activatedate;
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
