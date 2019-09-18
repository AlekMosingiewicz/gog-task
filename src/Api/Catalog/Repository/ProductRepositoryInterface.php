<?php

namespace App\Api\Catalog\Repository;


use App\Api\Catalog\Dto\ProductDto;
use App\Api\Catalog\Exception\ProductNotFoundException;
use App\Api\Catalog\Model\Product\ProductModelInterface;

/**
 * Interface ProductRepositoryInterface
 * @package App\Api\Catalog\Repository
 */
interface ProductRepositoryInterface
{
    /**
     * List all products
     * @return ProductModelInterface[]
     */
    public function listAllProducts(): array;

    /**
     * Save a product
     * @param ProductModelInterface $productModel
     * @throws ProductNotFoundException
     */
    public function save(ProductModelInterface $productModel): void;

    /**
     * @param ProductModelInterface $productModel
     * @throws ProductNotFoundException
     */
    public function remove(ProductModelInterface $productModel): void;

    /**
     * @param string $productName
     * @return ProductModelInterface|null
     */
    public function findByName(string $productName): ?ProductModelInterface;

    /**
     * @param int $id
     * @return ProductModelInterface|null
     */
    public function findById(int $id): ?ProductModelInterface;

}