<?php

namespace App\Api\Catalog\Manager;

use App\Api\Catalog\Dto\ProductDto;
use App\Api\Catalog\Dto\ProductDtoInterface;
use App\Api\Catalog\Exception\ProductNotFoundException;
use App\Api\Catalog\Factory\Model\ProductModelFactoryInterface;
use App\Api\Catalog\Model\Product\ProductModelInterface;
use App\Api\Catalog\Repository\ProductRepositoryInterface;
use App\Api\Catalog\Validation\ProductDataValidatorInterface;

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

    /**
     * ProductManager constructor.
     * @param ProductDataValidatorInterface $productDataValidator
     * @param ProductRepositoryInterface $productRepository
     * @param ProductModelFactoryInterface $productModelFactory
     */
    public function __construct(ProductDataValidatorInterface $productDataValidator, ProductRepositoryInterface $productRepository, ProductModelFactoryInterface $productModelFactory)
    {
        $this->productDataValidator = $productDataValidator;
        $this->productRepository = $productRepository;
        $this->productModelFactory = $productModelFactory;
    }


    public function createProduct(ProductDtoInterface $productDto): void
    {
        $this->productDataValidator->validateProductData($productDto);
        $model = $this->productModelFactory->createProductModel($productDto);
        $this->productRepository->save($model);

    }

    public function updateProduct(ProductDtoInterface $productDto): void
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

    public function deleteProduct(ProductDtoInterface $productDto): void
    {
        $model = $this->productRepository->findById($productDto->getId());

        if (!$model instanceof ProductModelInterface) {
            throw new ProductNotFoundException();
        }

        $this->productRepository->remove($model);
    }

}