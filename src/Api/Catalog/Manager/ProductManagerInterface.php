<?php

namespace Alek\GOG\Api\Catalog\Manager;

use Alek\GOG\Api\Catalog\Dto\ProductDto;

/**
 * Interface ProductManagerInterface
 * @package Alek\GOG\Api\Catalog\Manager
 */
interface ProductManagerInterface
{
    /**
     * @param ProductDto $product
     */
    public function createProduct(ProductDto $product): void;

    /**
     * @param ProductDto $product
     */
    public function updateProduct(ProductDto $product): void;

    /**
     * @param ProductDto $product
     */
    public function deleteProduct(ProductDto $product): void;
}