<?php

namespace App\Api\Catalog\Manager;

use App\Api\Catalog\Dto\Product\ProductDtoInterface;

/**
 * Interface ProductManagerInterface
 * @package App\Api\Catalog\Manager
 */
interface ProductManagerInterface
{
    /**
     * @param ProductDtoInterface $productDto
     */
    public function createProduct(ProductDtoInterface $productDto): void;

    /**
     * @param ProductDtoInterface $productDto
     */
    public function updateProduct(ProductDtoInterface $productDto): void;

    /**
     * @param ProductDtoInterface $productDto
     */
    public function deleteProduct(ProductDtoInterface $productDto): void;
}