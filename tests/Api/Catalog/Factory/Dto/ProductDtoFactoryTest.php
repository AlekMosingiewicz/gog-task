<?php

namespace App\Tests\Api\Catalog\Factory\Dto;

use App\Api\Catalog\Factory\Dto\ProductDtoFactory;
use PHPUnit\Framework\TestCase;

class ProductDtoFactoryTest extends TestCase
{
    /**
     * @var ProductDtoFactory
     */
    private $productDtoFactory;

    public function setUp(): void
    {
        $this->productDtoFactory = new ProductDtoFactory();
    }

    /**
     * @test
     */
    public function shouldCreateCorrectDto(): void
    {
        $name = 'Name';
        $price = 1.22;
        $id = 1;

        $dto = $this->productDtoFactory->createProductDto($name, $price, $id);

        $this->assertEquals($name, $dto->getName());
        $this->assertEquals($price, $dto->getPrice());
        $this->assertEquals($id, $dto->getId());
    }
}