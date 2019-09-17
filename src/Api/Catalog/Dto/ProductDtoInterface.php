<?php

namespace Alek\GOG\Api\Catalog\Dto;

/**
 * Interface ProductDtoInterface
 * @package Alek\GOG\Api\Catalog\Dto
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