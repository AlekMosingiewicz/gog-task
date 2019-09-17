<?php

namespace Alek\GOG\Api\Catalog\Manager;

use Alek\GOG\Api\Catalog\Dto\ProductDto;
use Alek\GOG\Api\Catalog\Exception\ProductNotFoundException;
use Alek\GOG\Api\Catalog\Factory\Model\ProductModelFactoryInterface;
use Alek\GOG\Api\Catalog\Model\Product\ProductModelInterface;
use Alek\GOG\Api\Catalog\Repository\ProductRepositoryInterface;
use Alek\GOG\Api\Catalog\Validation\ProductDataValidatorInterface;

class ProductManager implements ProductManagerInterface
{
    /**
     * @var ProductDataValidatorInterface
     */
    private $productDataValidator;

    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * @var ProductModelFactoryInterface
     */
    private $productModelFactory;

    public function createProduct(ProductDto $product): void
    {
        $this->productDataValidator->validateProductData($product);
        $model = $this->productModelFactory->createProductModel($product);
        $this->productRepository->save($model);

    }

    public function updateProduct(ProductDto $product): void
    {
        $this->productDataValidator->validateProductData($product);

        $model = $this->productRepository->findById($product->getId());

        if (!$model instanceof ProductModelInterface) {
            throw new ProductNotFoundException();
        }

        $model->setPrice($product->getPrice());
        $model->setName($product->getName());

        $this->productRepository->save($model);
    }

    public function deleteProduct(ProductDto $product): void
    {
        $model = $this->productRepository->findById($product->getId());

        if (!$model instanceof ProductModelInterface) {
            throw new ProductNotFoundException();
        }

        $this->productRepository->remove($model);
    }

}