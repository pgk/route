<?php declare(strict_types=1);

namespace League\Route\Http\Exception;

use Exception;
use League\Route\Http\Exception as HttpException;

class GoneException extends HttpException
{
    /**
     * Constructor
     *
     * @param string      $message
     * @param \Exception $previous
     * @param integer     $code
     */
    public function __construct(string $message = 'Gone', ?Exception $previous = null, int $code = 0)
    {
        parent::__construct(410, $message, $previous, [], $code);
    }
}
