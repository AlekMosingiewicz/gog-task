<?php

namespace App\Tests\Api\Catalog\Validation;

use App\Api\Catalog\Dto\Product\ProductDtoInterface;
use App\Api\Catalog\Exception\InvalidDataException;
use App\Api\Catalog\Model\Product\ProductModelInterface;
use App\Api\Catalog\Repository\ProductRepositoryInterface;
use App\Api\Catalog\Validation\ProductDataValidator;
use PHPUnit\Framework\TestCase;
use Phake_IMock;
use Phake;

class ProductDataValidatorTest extends TestCase
{
    /**
     * @var ProductRepositoryInterface|Phake_IMock
     */
    private $productRepository;

    /**
     * @var ProductDataValidator
     */
    private $productDataValidator;

    public function setUp(): void
    {
        $this->productRepository = Phake::mock(ProductRepositoryInterface::class);
        $this->productDataValidator = new ProductDataValidator($this->productRepository);
    }

    /**
     * @test
     * @throws InvalidDataException
     */
    public function shouldThrowExceptionWhenDoubleProductFound(): void
    {
        $name = 'Name';
        $price = 0.01;
        $id = 1;

        $productDto = $this->createProductDtoMock($name, $price, $id);

        Phake::when($this->productRepository)->findByName($name)->thenReturn(Phake::mock(ProductModelInterface::class));

        $this->expectException(InvalidDataException::class);

        $this->productDataValidator->validateProductData($productDto);
    }

    /**
     * @param string $name
     * @param float $price
     * @param int $id
     * @return Phake_IMock|ProductDtoInterface
     */
    private function createProductDtoMock(string $name, float $price, int $id)
    {
        $dto = Phake::mock(ProductDtoInterface::class);

        Phake::when($dto)->getName()->thenReturn($name);
        Phake::when($dto)->getPrice()->thenReturn($price);
        Phake::when($dto)->getId()->thenReturn($id);

        return $dto;
    }
}