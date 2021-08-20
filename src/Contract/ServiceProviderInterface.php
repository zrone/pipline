<?php

declare(strict_types=1);
/**
 * simple pipline by zrone.
 *
 * @link     https://gitee.com/marksirl
 * @document https://gitee.com/marksirl
 * @contact  xujining2008@126.com
 */
namespace Zrone\Pipline\Contract;

use App\Utils\Grace;

interface ServiceProviderInterface
{
    /**
     * register the service.
     */
    public function register(Grace $grace, ?array $data = null): void;
}
