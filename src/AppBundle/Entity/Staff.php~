<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Staff
 *
 * @ORM\Table(name="staff")
 * @ORM\Entity
 */
class Staff
{
    /**
     * @var string
     *
     * @ORM\Column(name="infinite_staff", type="string", length=100, nullable=false)
     */
    private $infiniteStaff = '';

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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set infiniteStaff
     *
     * @param string $infiniteStaff
     *
     * @return Staff
     */
    public function setInfiniteStaff($infiniteStaff)
    {
        $this->infiniteStaff = $infiniteStaff;

        return $this;
    }

    /**
     * Get infiniteStaff
     *
     * @return string
     */
    public function getInfiniteStaff()
    {
        return $this->infiniteStaff;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Staff
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
     * @return Staff
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
     * @return Staff
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
     * @return Staff
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
     * @return Staff
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
