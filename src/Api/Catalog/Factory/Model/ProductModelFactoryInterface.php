<?php

namespace App\Api\Catalog\Factory\Model;

use App\Api\Catalog\Dto\Product\ProductDtoInterface;
use App\Api\Catalog\Model\Product\ProductModelInterface;

/**
 * Interface ProductModelFactoryInterface
 * @package App\Api\Catalog\Factory\Model
 */
interface ProductModelFactoryInterface
{
    /**
     * @param ProductDtoInterface $productDto
     * @return ProductModelInterface
     */
    public function createProductModel(ProductDtoInterface $productDto): ProductModelInterface;
}