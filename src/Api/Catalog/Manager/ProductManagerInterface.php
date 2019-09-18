<?php

namespace App\Api\Catalog\Manager;

use App\Api\Catalog\Dto\ProductDto;

/**
 * Interface ProductManagerInterface
 * @package App\Api\Catalog\Manager
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