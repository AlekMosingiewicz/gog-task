<?php

namespace App\Api\Catalog\Factory\Model;

use App\Api\Catalog\Dto\ProductDtoInterface;
use App\Api\Catalog\Model\Product\ProductModel;
use App\Api\Catalog\Model\Product\ProductModelInterface;

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