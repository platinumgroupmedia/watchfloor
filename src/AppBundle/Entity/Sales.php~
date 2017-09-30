<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Sales
 *
 * @ORM\Table(name="sales", indexes={@ORM\Index(name="idx_orderid", columns={"`order-id`"})})
 * @ORM\Entity
 */
class Sales
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="result", type="boolean", nullable=false)
     */
    private $result;

    /**
     * @var string
     *
     * @ORM\Column(name="`result-text`", type="string", length=255, nullable=false)
     */
    private $resultText;

    /**
     * @var string
     *
     * @ORM\Column(name="`transaction-id`", type="string", length=25, nullable=false)
     */
    private $transactionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="`result-code`", type="integer", nullable=false)
     */
    private $resultCode;

    /**
     * @var string
     *
     * @ORM\Column(name="`authorization-code`", type="string", length=50, nullable=false)
     */
    private $authorizationCode;

    /**
     * @var string
     *
     * @ORM\Column(name="`avs-result`", type="string", length=25, nullable=false)
     */
    private $avsResult;

    /**
     * @var string
     *
     * @ORM\Column(name="`action-type`", type="string", length=25, nullable=false)
     */
    private $actionType;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=2, nullable=false)
     */
    private $amount;

    /**
     * @var float
     *
     * @ORM\Column(name="`amount-authorized`", type="float", precision=10, scale=2, nullable=false)
     */
    private $amountAuthorized;

    /**
     * @var string
     *
     * @ORM\Column(name="`tip-amount`", type="string", length=10, nullable=false)
     */
    private $tipAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="`surcharge-amount`", type="string", length=10, nullable=false)
     */
    private $surchargeAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="`ip-address`", type="string", length=25, nullable=false)
     */
    private $ipAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="industry", type="string", length=50, nullable=false)
     */
    private $industry;

    /**
     * @var string
     *
     * @ORM\Column(name="`processor-id`", type="string", length=50, nullable=false)
     */
    private $processorId;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=10, nullable=false)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="`order-description`", type="string", length=255, nullable=false)
     */
    private $orderDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="`merchant-defined-field-1`", type="string", length=50, nullable=false)
     */
    private $merchantDefinedField1;

    /**
     * @var string
     *
     * @ORM\Column(name="`merchant-defined-field-2`", type="string", length=50, nullable=false)
     */
    private $merchantDefinedField2;

    /**
     * @var string
     *
     * @ORM\Column(name="`order-id`", type="string", length=50, nullable=false)
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="`tax-amount`", type="string", length=25, nullable=false)
     */
    private $taxAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="`shipping-amount`", type="string", length=25, nullable=false)
     */
    private $shippingAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="`first-name`", type="string", length=50, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="`last-name`", type="string", length=50, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="address1", type="string", length=100, nullable=false)
     */
    private $address1;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=10, nullable=false)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="postal", type="string", length=15, nullable=false)
     */
    private $postal;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=10, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=50, nullable=false)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="address2", type="string", length=50, nullable=false)
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=50, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="`cc-number`", type="string", length=25, nullable=false)
     */
    private $ccNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="`cc-exp`", type="string", length=10, nullable=false)
     */
    private $ccExp;

    /**
     * @var string
     *
     * @ORM\Column(name="`product-code`", type="string", length=50, nullable=false)
     */
    private $productCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="isaffiliate", type="boolean", nullable=false)
     */
    private $isaffiliate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="refund", type="boolean", nullable=false)
     */
    private $refund = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="refund_date", type="integer", nullable=false)
     */
    private $refundDate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sixweek_ts", type="integer", nullable=false)
     */
    private $sixweekTs = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="customer_vault_id", type="string", length=255, nullable=false)
     */
    private $customerVaultId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="recurring", type="boolean", nullable=false)
     */
    private $recurring = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="paypal", type="boolean", nullable=false)
     */
    private $paypal = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="solo", type="boolean", nullable=false)
     */
    private $solo = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="entry_date", type="datetime", nullable=false, options={"default": 0})
     */
    private $entryDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * Set result
     *
     * @param boolean $result
     *
     * @return Sales
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return boolean
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set resultText
     *
     * @param string $resultText
     *
     * @return Sales
     */
    public function setResultText($resultText)
    {
        $this->resultText = $resultText;

        return $this;
    }

    /**
     * Get resultText
     *
     * @return string
     */
    public function getResultText()
    {
        return $this->resultText;
    }

    /**
     * Set transactionId
     *
     * @param string $transactionId
     *
     * @return Sales
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * Get transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Set resultCode
     *
     * @param integer $resultCode
     *
     * @return Sales
     */
    public function setResultCode($resultCode)
    {
        $this->resultCode = $resultCode;

        return $this;
    }

    /**
     * Get resultCode
     *
     * @return integer
     */
    public function getResultCode()
    {
        return $this->resultCode;
    }

    /**
     * Set authorizationCode
     *
     * @param string $authorizationCode
     *
     * @return Sales
     */
    public function setAuthorizationCode($authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;

        return $this;
    }

    /**
     * Get authorizationCode
     *
     * @return string
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    /**
     * Set avsResult
     *
     * @param string $avsResult
     *
     * @return Sales
     */
    public function setAvsResult($avsResult)
    {
        $this->avsResult = $avsResult;

        return $this;
    }

    /**
     * Get avsResult
     *
     * @return string
     */
    public function getAvsResult()
    {
        return $this->avsResult;
    }

    /**
     * Set actionType
     *
     * @param string $actionType
     *
     * @return Sales
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Get actionType
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return Sales
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set amountAuthorized
     *
     * @param float $amountAuthorized
     *
     * @return Sales
     */
    public function setAmountAuthorized($amountAuthorized)
    {
        $this->amountAuthorized = $amountAuthorized;

        return $this;
    }

    /**
     * Get amountAuthorized
     *
     * @return float
     */
    public function getAmountAuthorized()
    {
        return $this->amountAuthorized;
    }

    /**
     * Set tipAmount
     *
     * @param string $tipAmount
     *
     * @return Sales
     */
    public function setTipAmount($tipAmount)
    {
        $this->tipAmount = $tipAmount;

        return $this;
    }

    /**
     * Get tipAmount
     *
     * @return string
     */
    public function getTipAmount()
    {
        return $this->tipAmount;
    }

    /**
     * Set surchargeAmount
     *
     * @param string $surchargeAmount
     *
     * @return Sales
     */
    public function setSurchargeAmount($surchargeAmount)
    {
        $this->surchargeAmount = $surchargeAmount;

        return $this;
    }

    /**
     * Get surchargeAmount
     *
     * @return string
     */
    public function getSurchargeAmount()
    {
        return $this->surchargeAmount;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return Sales
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set industry
     *
     * @param string $industry
     *
     * @return Sales
     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;

        return $this;
    }

    /**
     * Get industry
     *
     * @return string
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * Set processorId
     *
     * @param string $processorId
     *
     * @return Sales
     */
    public function setProcessorId($processorId)
    {
        $this->processorId = $processorId;

        return $this;
    }

    /**
     * Get processorId
     *
     * @return string
     */
    public function getProcessorId()
    {
        return $this->processorId;
    }

    /**
     * Set currency
     *
     * @param string $currency
     *
     * @return Sales
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set orderDescription
     *
     * @param string $orderDescription
     *
     * @return Sales
     */
    public function setOrderDescription($orderDescription)
    {
        $this->orderDescription = $orderDescription;

        return $this;
    }

    /**
     * Get orderDescription
     *
     * @return string
     */
    public function getOrderDescription()
    {
        return $this->orderDescription;
    }

    /**
     * Set merchantDefinedField1
     *
     * @param string $merchantDefinedField1
     *
     * @return Sales
     */
    public function setMerchantDefinedField1($merchantDefinedField1)
    {
        $this->merchantDefinedField1 = $merchantDefinedField1;

        return $this;
    }

    /**
     * Get merchantDefinedField1
     *
     * @return string
     */
    public function getMerchantDefinedField1()
    {
        return $this->merchantDefinedField1;
    }

    /**
     * Set merchantDefinedField2
     *
     * @param string $merchantDefinedField2
     *
     * @return Sales
     */
    public function setMerchantDefinedField2($merchantDefinedField2)
    {
        $this->merchantDefinedField2 = $merchantDefinedField2;

        return $this;
    }

    /**
     * Get merchantDefinedField2
     *
     * @return string
     */
    public function getMerchantDefinedField2()
    {
        return $this->merchantDefinedField2;
    }

    /**
     * Set orderId
     *
     * @param string $orderId
     *
     * @return Sales
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set taxAmount
     *
     * @param string $taxAmount
     *
     * @return Sales
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;

        return $this;
    }

    /**
     * Get taxAmount
     *
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Set shippingAmount
     *
     * @param string $shippingAmount
     *
     * @return Sales
     */
    public function setShippingAmount($shippingAmount)
    {
        $this->shippingAmount = $shippingAmount;

        return $this;
    }

    /**
     * Get shippingAmount
     *
     * @return string
     */
    public function getShippingAmount()
    {
        return $this->shippingAmount;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Sales
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Sales
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set address1
     *
     * @param string $address1
     *
     * @return Sales
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Sales
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
     * Set state
     *
     * @param string $state
     *
     * @return Sales
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set postal
     *
     * @param string $postal
     *
     * @return Sales
     */
    public function setPostal($postal)
    {
        $this->postal = $postal;

        return $this;
    }

    /**
     * Get postal
     *
     * @return string
     */
    public function getPostal()
    {
        return $this->postal;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Sales
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Sales
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
     * Set email
     *
     * @param string $email
     *
     * @return Sales
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
     * Set company
     *
     * @param string $company
     *
     * @return Sales
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set address2
     *
     * @param string $address2
     *
     * @return Sales
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Sales
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set ccNumber
     *
     * @param string $ccNumber
     *
     * @return Sales
     */
    public function setCcNumber($ccNumber)
    {
        $this->ccNumber = $ccNumber;

        return $this;
    }

    /**
     * Get ccNumber
     *
     * @return string
     */
    public function getCcNumber()
    {
        return $this->ccNumber;
    }

    /**
     * Set ccExp
     *
     * @param string $ccExp
     *
     * @return Sales
     */
    public function setCcExp($ccExp)
    {
        $this->ccExp = $ccExp;

        return $this;
    }

    /**
     * Get ccExp
     *
     * @return string
     */
    public function getCcExp()
    {
        return $this->ccExp;
    }

    /**
     * Set productCode
     *
     * @param string $productCode
     *
     * @return Sales
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * Get productCode
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return Sales
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set isaffiliate
     *
     * @param boolean $isaffiliate
     *
     * @return Sales
     */
    public function setIsaffiliate($isaffiliate)
    {
        $this->isaffiliate = $isaffiliate;

        return $this;
    }

    /**
     * Get isaffiliate
     *
     * @return boolean
     */
    public function getIsaffiliate()
    {
        return $this->isaffiliate;
    }

    /**
     * Set refund
     *
     * @param boolean $refund
     *
     * @return Sales
     */
    public function setRefund($refund)
    {
        $this->refund = $refund;

        return $this;
    }

    /**
     * Get refund
     *
     * @return boolean
     */
    public function getRefund()
    {
        return $this->refund;
    }

    /**
     * Set refundDate
     *
     * @param integer $refundDate
     *
     * @return Sales
     */
    public function setRefundDate($refundDate)
    {
        $this->refundDate = $refundDate;

        return $this;
    }

    /**
     * Get refundDate
     *
     * @return integer
     */
    public function getRefundDate()
    {
        return $this->refundDate;
    }

    /**
     * Set sixweekTs
     *
     * @param integer $sixweekTs
     *
     * @return Sales
     */
    public function setSixweekTs($sixweekTs)
    {
        $this->sixweekTs = $sixweekTs;

        return $this;
    }

    /**
     * Get sixweekTs
     *
     * @return integer
     */
    public function getSixweekTs()
    {
        return $this->sixweekTs;
    }

    /**
     * Set customerVaultId
     *
     * @param string $customerVaultId
     *
     * @return Sales
     */
    public function setCustomerVaultId($customerVaultId)
    {
        $this->customerVaultId = $customerVaultId;

        return $this;
    }

    /**
     * Get customerVaultId
     *
     * @return string
     */
    public function getCustomerVaultId()
    {
        return $this->customerVaultId;
    }

    /**
     * Set recurring
     *
     * @param boolean $recurring
     *
     * @return Sales
     */
    public function setRecurring($recurring)
    {
        $this->recurring = $recurring;

        return $this;
    }

    /**
     * Get recurring
     *
     * @return boolean
     */
    public function getRecurring()
    {
        return $this->recurring;
    }

    /**
     * Set paypal
     *
     * @param boolean $paypal
     *
     * @return Sales
     */
    public function setPaypal($paypal)
    {
        $this->paypal = $paypal;

        return $this;
    }

    /**
     * Get paypal
     *
     * @return boolean
     */
    public function getPaypal()
    {
        return $this->paypal;
    }

    /**
     * Set solo
     *
     * @param boolean $solo
     *
     * @return Sales
     */
    public function setSolo($solo)
    {
        $this->solo = $solo;

        return $this;
    }

    /**
     * Get solo
     *
     * @return boolean
     */
    public function getSolo()
    {
        return $this->solo;
    }

    /**
     * Set entryDate
     *
     * @param \DateTime $entryDate
     *
     * @return Sales
     */
    public function setEntryDate($entryDate)
    {
        $this->entryDate = $entryDate;

        return $this;
    }

    /**
     * Get entryDate
     *
     * @return \DateTime
     */
    public function getEntryDate()
    {
        return $this->entryDate;
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
