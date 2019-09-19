<?php

namespace App\Api\Catalog\Dto\Product;

/**
 * Class GameDto
 * DTO for transferring game data
 * @package App\Api\Catalog\Dto\Product
 */
class ProductDto implements ProductDtoInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
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
     */
    public function setId(int $id): ProductDtoInterface
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
     */
    public function setName(string $name): ProductDtoInterface
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
     * @param double $price
     */
    public function setPrice(float $price): ProductDtoInterface
    {
        $this->price = $price;
        return $this;
    }

}