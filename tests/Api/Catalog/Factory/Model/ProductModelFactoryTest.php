<?php

namespace App\Tests\Api\Catalog\Factory\Model;

use App\Api\Catalog\Dto\ProductDtoInterface;
use App\Api\Catalog\Factory\Model\ProductModelFactory;
use PHPUnit\Framework\TestCase;
use Phake;

class ProductModelFactoryTest extends TestCase
{
    /**
     * @var ProductModelFactory
     */
    private $productModelFactory;

    public function setUp(): void
    {
        $this->productModelFactory = new ProductModelFactory();
    }

    /**
     * @test
     */
    public function shouldCreateCorrectProductModel()
    {
        $name = 'Name';
        $price = 1.01;
        $id = 1;

        $productModelDto = Phake::mock(ProductDtoInterface::class);

        Phake::when($productModelDto)->getName()->thenReturn($name);
        Phake::when($productModelDto)->getPrice()->thenReturn($price);
        Phake::when($productModelDto)->getId()->thenReturn($id);

        $model = $this->productModelFactory->createProductModel($productModelDto);

        $this->assertEquals($name, $model->getName());
        $this->assertEquals($price, $model->getPrice());
    }
}