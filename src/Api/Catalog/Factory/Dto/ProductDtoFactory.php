<?php

namespace App\Api\Catalog\Factory\Dto;

use App\Api\Catalog\Dto\Product\ProductDto;
use App\Api\Catalog\Dto\Product\ProductDtoInterface;

class ProductDtoFactory implements ProductDtoFactoryInterface
{
    public function createProductDto(string $name, float $price, int $id = 0): ProductDtoInterface
    {
        $productDto = new ProductDto();

        $productDto->setName($name)
                   ->setPrice($price)
                   ->setId($id);

        return $productDto;
    }

}