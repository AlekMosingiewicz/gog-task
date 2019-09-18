<?php

namespace App\Api\Catalog\Validation;

use App\Api\Catalog\Dto\ProductDtoInterface;
use App\Api\Catalog\Exception\InvalidDataException;
use App\Api\Catalog\Model\Product\ProductModelInterface;
use App\Api\Catalog\Repository\ProductRepositoryInterface;

class ProductDataValidator implements ProductDataValidatorInterface
{
    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * {@inheritDoc}
     */
    public function validateProductData(ProductDtoInterface $productDto): void
    {
        $existingProduct = $this->productRepository->findByName($productDto->getName());

        if ($existingProduct instanceof ProductModelInterface) {
            throw new InvalidDataException();
        }
    }

}