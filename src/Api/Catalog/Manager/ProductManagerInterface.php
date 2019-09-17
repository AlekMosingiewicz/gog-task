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
     * @param ProductDto $productDto
     */
    public function createProduct(ProductDto $productDto): void;

    /**
     * @param ProductDto $productDto
     */
    public function updateProduct(ProductDto $productDto): void;

    /**
     * @param ProductDto $productDto
     */
    public function deleteProduct(ProductDto $productDto): void;
}