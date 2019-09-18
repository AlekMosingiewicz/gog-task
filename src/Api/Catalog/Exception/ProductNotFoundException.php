<?php

namespace App\Api\Catalog\Exception;

class ProductNotFoundException extends ApiException
{
    const ERROR_CODE = 404;
}