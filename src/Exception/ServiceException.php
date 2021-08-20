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

class ServiceException extends Exception
{
    /**
     * Bootstrap.
     *
     * @param mixed $extra
     */
    public function __construct(string $message = 'Service Error', int $code = self::SERVICE_ERROR, $extra = null, Throwable $previous = null)
    {
        parent::__construct($message, $code, $extra, $previous);
    }
}
