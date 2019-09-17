<?php

namespace Alek\GOG\Api\Catalog\Validation;

use Alek\GOG\Api\Catalog\Dto\ProductDtoInterface;
use Alek\GOG\Api\Catalog\Exception\InvalidDataException;

interface ProductDataValidatorInterface
{
    /**
     * @param ProductDtoInterface $productDto
     * @throws InvalidDataException
     */
    public function validateProductData(ProductDtoInterface $productDto): void;
}