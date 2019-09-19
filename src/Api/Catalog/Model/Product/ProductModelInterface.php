<?php

namespace App\Api\Catalog\Model\Product;

/**
 * Interface ProductModelInterface
 * Encapsulates entity stored in the repository
 * @package App\Api\Catalog\Model\Product
 */
interface ProductModelInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     * @return ProductModelInterface
     */
    public function setId(int $id): ProductModelInterface;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     * @return ProductModelInterface
     */
    public function setName(string $name): ProductModelInterface;

    /**
     * @return float
     */
    public function getPrice(): float;

    /**
     * @param float $price
     * @return ProductModelInterface
     */
    public function setPrice(float $price): ProductModelInterface;

}