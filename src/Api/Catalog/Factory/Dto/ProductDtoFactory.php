<?php

namespace Alek\GOG\Api\Catalog\Factory\Dto;

use Alek\GOG\Api\Catalog\Dto\ProductDto;
use Alek\GOG\Api\Catalog\Dto\ProductDtoInterface;

class ProductDtoFactory implements ProductDtoFactoryInterface
{
    public function createProductDto(string $name, double $price, int $id = 0): ProductDtoInterface
    {
        $productDto = new ProductDto();

        $productDto->setName($name);
        $productDto->setPrice($price);
        $productDto->setId($id);

        return $productDto;
    }

}