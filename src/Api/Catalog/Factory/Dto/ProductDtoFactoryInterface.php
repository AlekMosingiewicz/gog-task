<?php

namespace App\Api\Catalog\Factory\Dto;

use App\Api\Catalog\Dto\Product\ProductDtoInterface;

/**
 * Interface ProductDtoFactoryInterface
 * @package App\Api\Catalog\Factory
 */
interface ProductDtoFactoryInterface
{
    /**
     * @param string $name
     * @param float $price
     * @param int $id
     * @return ProductDtoInterface
     */
    public function createProductDto(string $name, float $price, int $id = 0): ProductDtoInterface;
}