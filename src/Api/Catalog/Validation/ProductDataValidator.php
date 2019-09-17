<?php

namespace Alek\GOG\Api\Catalog\Validation;

use Alek\GOG\Api\Catalog\Dto\ProductDtoInterface;
use Alek\GOG\Api\Catalog\Exception\InvalidDataException;
use Alek\GOG\Api\Catalog\Model\Product\ProductModelInterface;
use Alek\GOG\Api\Catalog\Repository\ProductRepositoryInterface;

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