<?php

declare(strict_types=1);
/**
 * simple pipline by zrone.
 *
 * @link     https://gitee.com/marksirl
 * @document https://gitee.com/marksirl
 * @contact  xujining2008@126.com
 */
namespace Zrone\Pipline\Exception;

use Throwable;

class InvalidResponseException extends Exception
{
    /**
     * @var null|\Throwable
     */
    public $exception;

    /**
     * @var array
     */
    public $response = [];

    /**
     * Bootstrap.
     *
     * @param mixed $extra
     */
    public function __construct(
        int $code = self::RESPONSE_ERROR,
        string $message = 'Provider response Error',
        $extra = [],
        ?Throwable $exception = null,
        Throwable $previous = null
    )
    {
        $this->response = $extra;
        $this->exception = $exception;

        parent::__construct($message, $code, $extra, $previous);
    }
}
