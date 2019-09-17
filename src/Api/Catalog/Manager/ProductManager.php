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

    public function createProduct(ProductDto $productDto): void
    {
        $this->productDataValidator->validateProductData($productDto);
        $model = $this->productModelFactory->createProductModel($productDto);
        $this->productRepository->save($model);

    }

    public function updateProduct(ProductDto $productDto): void
    {
        $this->productDataValidator->validateProductData($productDto);

        $model = $this->productRepository->findById($productDto->getId());

        if (!$model instanceof ProductModelInterface) {
            throw new ProductNotFoundException();
        }

        $model->setPrice($productDto->getPrice());
        $model->setName($productDto->getName());

        $this->productRepository->save($model);
    }

    public function deleteProduct(ProductDto $productDto): void
    {
        $model = $this->productRepository->findById($productDto->getId());

        if (!$model instanceof ProductModelInterface) {
            throw new ProductNotFoundException();
        }

        $this->productRepository->remove($model);
    }

}