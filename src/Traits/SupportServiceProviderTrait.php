<?php

declare(strict_types=1);
/**
 * simple pipline by zrone.
 *
 * @link     https://gitee.com/marksirl
 * @document https://gitee.com/marksirl
 * @contact  xujining2008@126.com
 */
namespace Zrone\Pipline\Traits;

use Zrone\Pipline\Rocket;

trait SupportServiceProviderTrait
{
    protected function loadServiceProvider(Rocket $rocket): void
    {
        $params = $rocket->getParams();

        $rocket->mergeParams([
            'extend_params' => array_merge($params['extend_params'] ?? [], ['sys_service_provider_id' => '']),
        ]);
    }
}
