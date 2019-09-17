<?php

namespace Alek\GOG\Api\Catalog\Factory\Dto;

use Alek\GOG\Api\Catalog\Dto\ProductDtoInterface;

/**
 * Interface ProductDtoFactoryInterface
 * @package Alek\GOG\Api\Catalog\Factory
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