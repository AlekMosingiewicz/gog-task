<?php

namespace App\Api\Catalog\Factory\Dto;

use App\Api\Catalog\Dto\ProductDto;
use App\Api\Catalog\Dto\ProductDtoInterface;

class ProductDtoFactory implements ProductDtoFactoryInterface
{
    public function createProductDto(string $name, float $price, int $id = 0): ProductDtoInterface
    {
        $productDto = new ProductDto();

        $productDto->setName($name);
        $productDto->setPrice($price);
        $productDto->setId($id);

        return $productDto;
    }

}