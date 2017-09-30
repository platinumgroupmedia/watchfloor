<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Users
 *
 * @ORM\Table(name="users", indexes={@ORM\Index(name="idxordernumber", columns={"order_number"})})
 * @ORM\Entity
 */
class Users
{
    /**
     * @var string
     *
     * @ORM\Column(name="infinite_user", type="string", length=100, nullable=false)
     */
    private $infiniteUser = '';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=false)
     */
    private $password = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="use", type="integer", nullable=false)
     */
    private $use = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="string", length=155, nullable=false)
     */
    private $fullname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="order_number", type="string", length=100, nullable=false)
     */
    private $orderNumber = '';

    /**
     * @var string
     *
     * @ORM\Column(name="date_purchased", type="string", length=100, nullable=false)
     */
    private $datePurchased = '';
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", options={"default": 0})
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="last_login", type="string", length=50, nullable=true)
     */
    private $lastLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="last_login_ip", type="string", length=50, nullable=true)
     */
    private $lastLoginIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="cbid", type="string", length=255, nullable=true)
     */
    private $cbid;

    /**
     * @var string
     *
     * @ORM\Column(name="floor_phone", type="string", length=255, nullable=true)
     */
    private $floorPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="payzeno", type="string", length=100, nullable=true)
     */
    private $payzeno;

    /**
     * @var string
     *
     * @ORM\Column(name="promote", type="string", length=100, nullable=true)
     */
    private $promote;

    /**
     * @var string
     *
     * @ORM\Column(name="activation", type="string", length=100, nullable=true)
     */
    private $activation;

    /**
     * @var integer
     *
     * @ORM\Column(name="pz_verified", type="integer", nullable=false)
     */
    private $pzVerified = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
   
    /**
     * Set infiniteUser
     *
     * @param string $infiniteUser
     *
     * @return Users
     */
    public function setInfiniteUser($infiniteUser)
    {
        $this->infiniteUser = $infiniteUser;

        return $this;
    }

    /**
     * Get infiniteUser
     *
     * @return string
     */
    public function getInfiniteUser()
    {
        return $this->infiniteUser;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set use
     *
     * @param integer $use
     *
     * @return Users
     */
    public function setUse($use)
    {
        $this->use = $use;

        return $this;
    }

    /**
     * Get use
     *
     * @return integer
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     *
     * @return Users
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set orderNumber
     *
     * @param string $orderNumber
     *
     * @return Users
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * Get orderNumber
     *
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Set datePurchased
     *
     * @param string $datePurchased
     *
     * @return Users
     */
    public function setDatePurchased($datePurchased)
    {
        $this->datePurchased = $datePurchased;

        return $this;
    }

    /**
     * Get datePurchased
     *
     * @return string
     */
    public function getDatePurchased()
    {
        return $this->datePurchased;
    }

    /**
     * Set lastLogin
     *
     * @param string $lastLogin
     *
     * @return Users
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return string
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set lastLoginIp
     *
     * @param string $lastLoginIp
     *
     * @return Users
     */
    public function setLastLoginIp($lastLoginIp)
    {
        $this->lastLoginIp = $lastLoginIp;

        return $this;
    }

    /**
     * Get lastLoginIp
     *
     * @return string
     */
    public function getLastLoginIp()
    {
        return $this->lastLoginIp;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Users
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set cbid
     *
     * @param string $cbid
     *
     * @return Users
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
     * Set floorPhone
     *
     * @param string $floorPhone
     *
     * @return Users
     */
    public function setFloorPhone($floorPhone)
    {
        $this->floorPhone = $floorPhone;

        return $this;
    }

    /**
     * Get floorPhone
     *
     * @return string
     */
    public function getFloorPhone()
    {
        return $this->floorPhone;
    }

    /**
     * Set payzeno
     *
     * @param string $payzeno
     *
     * @return Users
     */
    public function setPayzeno($payzeno)
    {
        $this->payzeno = $payzeno;

        return $this;
    }

    /**
     * Get payzeno
     *
     * @return string
     */
    public function getPayzeno()
    {
        return $this->payzeno;
    }

    /**
     * Set promote
     *
     * @param string $promote
     *
     * @return Users
     */
    public function setPromote($promote)
    {
        $this->promote = $promote;

        return $this;
    }

    /**
     * Get promote
     *
     * @return string
     */
    public function getPromote()
    {
        return $this->promote;
    }

    /**
     * Set activation
     *
     * @param string $activation
     *
     * @return Users
     */
    public function setActivation($activation)
    {
        $this->activation = $activation;

        return $this;
    }

    /**
     * Get activation
     *
     * @return string
     */
    public function getActivation()
    {
        return $this->activation;
    }

    /**
     * Set pzVerified
     *
     * @param integer $pzVerified
     *
     * @return Users
     */
    public function setPzVerified($pzVerified)
    {
        $this->pzVerified = $pzVerified;

        return $this;
    }

    /**
     * Get pzVerified
     *
     * @return integer
     */
    public function getPzVerified()
    {
        return $this->pzVerified;
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Users
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
}
