<?php

namespace App\Api\Catalog\Validation;

use App\Api\Catalog\Dto\ProductDtoInterface;
use App\Api\Catalog\Exception\InvalidDataException;

interface ProductDataValidatorInterface
{
    /**
     * @param ProductDtoInterface $productDto
     * @throws InvalidDataException
     */
    public function validateProductData(ProductDtoInterface $productDto): void;
}