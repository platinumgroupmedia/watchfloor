<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClickbankProductsCategories
 *
 * @ORM\Table(name="clickbank_products_categories", uniqueConstraints={@ORM\UniqueConstraint(name="idxuniqueproductcategory", columns={"product_id", "category_id"})})
 * @ORM\Entity
 */
class ClickbankProductsCategories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     */
    private $categoryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return ClickbankProductsCategories
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
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return ClickbankProductsCategories
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
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
