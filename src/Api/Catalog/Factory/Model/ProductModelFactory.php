<?php

namespace Alek\GOG\Api\Catalog\Factory\Model;

use Alek\GOG\Api\Catalog\Dto\ProductDtoInterface;
use Alek\GOG\Api\Catalog\Model\Product\ProductModel;
use Alek\GOG\Api\Catalog\Model\Product\ProductModelInterface;

class ProductModelFactory implements ProductModelFactoryInterface
{
    public function createProductModel(ProductDtoInterface $productDto): ProductModelInterface
    {
        $model = new ProductModel();

        $model->setName($productDto->getName());
        $model->setPrice($productDto->getPrice());

        return $model;
    }

}