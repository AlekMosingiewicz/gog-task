<?php

namespace Alek\GOG\Api\Catalog\Exception;

abstract class ApiException extends \Exception
{
    /**
     * Default error codes for all exceptions
     */
    const ERROR_CODE = 500;

    public function getErrorCode(): int
    {
        return static::ERROR_CODE;
    }
}