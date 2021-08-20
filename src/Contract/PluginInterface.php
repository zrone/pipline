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

use Closure;
use Zrone\Pipline\Rocket;

interface PluginInterface
{
    public function process(Rocket $rocket, Closure $next): Rocket;
}
