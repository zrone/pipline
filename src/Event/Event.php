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

class Event
{
    /**
     * @var null|\Zrone\Pipline\Rocket
     */
    public $rocket;

    /**
     * Bootstrap.
     */
    public function __construct(?Rocket $rocket)
    {
        $this->rocket = $rocket;
    }
}
