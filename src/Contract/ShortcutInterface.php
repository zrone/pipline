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

interface ShortcutInterface
{
    /**
     * @return string[]|\Zrone\Pipline\Contract\PluginInterface[]
     */
    public function getPlugins(array $params): array;
}
