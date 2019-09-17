<?php

namespace Alek\GOG\Api\Catalog\Model\Product;

/**
 * Interface ProductModelInterface
 * Encapsulates entity stored in the repository
 * @package Alek\GOG\Api\Catalog\Model\Product
 */
interface ProductModelInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     */
    public function setId(int $id): void;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     */
    public function setName(string $name): void;

    /**
     * @return float
     */
    public function getPrice(): float;

    /**
     * @param float $price
     */
    public function setPrice(float $price): void;

}