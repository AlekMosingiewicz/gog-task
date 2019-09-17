<?php

namespace Alek\GOG\Api\Catalog\Factory\Model;

use Alek\GOG\Api\Catalog\Dto\ProductDtoInterface;
use Alek\GOG\Api\Catalog\Model\Product\ProductModelInterface;

/**
 * Interface ProductModelFactoryInterface
 * @package Alek\GOG\Api\Catalog\Factory\Model
 */
interface ProductModelFactoryInterface
{
    /**
     * @param ProductDtoInterface $productDto
     * @return ProductModelInterface
     */
    public function createProductModel(ProductDtoInterface $productDto): ProductModelInterface;
}