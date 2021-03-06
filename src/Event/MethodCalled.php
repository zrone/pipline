<?php

declare(strict_types=1);
/**
 * simple pipline by zrone.
 *
 * @link     https://gitee.com/marksirl
 * @document https://gitee.com/marksirl
 * @contact  xujining2008@126.com
 */
namespace Zrone\Pipline\Event;

use Zrone\Pipline\Rocket;

class MethodCalled extends Event
{
    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $name;

    /**
     * @var array
     */
    public $params;

    public function __construct(string $provider, string $name, array $params, ?Rocket $rocket)
    {
        $this->provider = $provider;
        $this->name = $name;
        $this->params = $params;

        parent::__construct($rocket);
    }
}
