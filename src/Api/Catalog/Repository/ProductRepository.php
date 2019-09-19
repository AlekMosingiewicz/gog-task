<?php

namespace App\Api\Catalog\Repository;

use App\Api\Catalog\Exception\ProductNotFoundException;
use App\Api\Catalog\Model\Product\ProductModelInterface;
use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository implements ProductRepositoryInterface
{
    public function findAll(): array
    {
        return parent::findAll();
    }

    public function save(ProductModelInterface $productModel): void
    {
        $this->getEntityManager()->persist($productModel);
        $this->getEntityManager()->flush();
    }

    public function remove(ProductModelInterface $productModel): void
    {
        $this->getEntityManager()->remove($productModel);
        $this->getEntityManager()->flush();
    }

    public function findByName(string $productName): ?ProductModelInterface
    {
        return $this->findOneBy(['name' => $productName]);
    }

    public function findById(int $id): ?ProductModelInterface
    {
        return $this->find($id);
    }

}