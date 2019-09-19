<?php

namespace App\Api\Catalog\Dto\Product;

/**
 * Interface ProductDtoInterface
 * @package App\Api\Catalog\Dto\Product
 */
interface ProductDtoInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     */
    public function setId(int $id): ProductDtoInterface;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     */
    public function setName(string $name): ProductDtoInterface;

    /**
     * @return float
     */
    public function getPrice(): float;

    /**
     * @param float $price
     */
    public function setPrice(float $price): ProductDtoInterface;
}