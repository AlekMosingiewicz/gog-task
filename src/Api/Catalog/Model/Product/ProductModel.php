<?php

namespace App\Api\Catalog\Model\Product;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class ProductModel
 * @package App\Api\Catalog\Model\Product
 * @ORM\Entity
 */
class ProductModel implements ProductModelInterface
{
    /**
     * @Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     *
     * @var int
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @var float
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ProductModelInterface
     */
    public function setId(int $id): ProductModelInterface
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ProductModelInterface
     */
    public function setName(string $name): ProductModelInterface
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return ProductModelInterface
     */
    public function setPrice(float $price): ProductModelInterface
    {
        $this->price = $price;
        return $this;
    }


}