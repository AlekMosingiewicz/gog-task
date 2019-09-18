<?php

namespace App\Api\Catalog\Factory\Dto;

use App\Api\Catalog\Dto\ProductDtoInterface;

/**
 * Interface ProductDtoFactoryInterface
 * @package App\Api\Catalog\Factory
 */
interface ProductDtoFactoryInterface
{
    /**
     * @param string $name
     * @param double $price
     * @param int $id
     * @return ProductDtoInterface
     */
    public function createProductDto(string $name, double $price, int $id = 0): ProductDtoInterface;
}