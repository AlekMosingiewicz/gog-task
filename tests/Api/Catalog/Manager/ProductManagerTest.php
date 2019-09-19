<?php

namespace App\Tests\Api\Catalog\Manager;

use App\Api\Catalog\Dto\Product\ProductDtoInterface;
use App\Api\Catalog\Factory\Model\ProductModelFactoryInterface;
use App\Api\Catalog\Manager\ProductManager;
use App\Api\Catalog\Model\Product\ProductModelInterface;
use App\Api\Catalog\Repository\ProductRepositoryInterface;
use App\Api\Catalog\Validation\ProductDataValidatorInterface;
use PHPUnit\Framework\TestCase;
use Phake_IMock;
use Phake;

class ProductManagerTest extends TestCase
{
    /**
     * @var ProductRepositoryInterface|Phake_IMock
     */
    private $productRepository;

    /**
     * @var ProductDataValidatorInterface|Phake_IMock
     */
    private $productDataValidator;

    /**
     * @var ProductModelFactoryInterface|Phake_IMock
     */
    private $productModelFactory;

    /**
     * @var ProductManager
     */
    private $productManager;


    public function setUp(): void
    {
        $this->productRepository = Phake::mock(ProductRepositoryInterface::class);
        $this->productModelFactory = Phake::mock(ProductModelFactoryInterface::class);
        $this->productDataValidator = Phake::mock(ProductDataValidatorInterface::class);

        $this->productManager = new ProductManager(
            $this->productDataValidator,
            $this->productRepository,
            $this->productModelFactory
        );
    }

    /**
     * @test
     */
    public function shouldProperlyCreateProduct(): void
    {
        $dto = Phake::mock(ProductDtoInterface::class);
        $model = Phake::mock(ProductModelInterface::class);

        Phake::when($this->productModelFactory)->createProductModel($dto)->thenReturn($model);

        $this->productManager->createProduct($dto);

        Phake::verify($this->productRepository)->save($model);
    }

}