<?php

declare(strict_types=1);
/**
 * simple pipline by zrone.
 *
 * @link     https://gitee.com/marksirl
 * @document https://gitee.com/marksirl
 * @contact  xujining2008@126.com
 */
namespace Zrone\Pipline;

use ArrayAccess;
use JsonSerializable as JsonSerializableInterface;
use Serializable as SerializableInterface;
use Zrone\Pipline\Traits\Accessable;
use Zrone\Pipline\Traits\Arrayable;
use Zrone\Pipline\Traits\Serializable;

class Rocket implements JsonSerializableInterface, SerializableInterface, ArrayAccess
{
    use Accessable;
    use Arrayable;
    use Serializable;

    private $radar;

    /**
     * @var array
     */
    private $params = [];

    /**
     * @var null|array|\Zrone\Pipline\Collection
     */
    private $payload;

    /**
     * @var null|string
     */
    private $direction;

    /**
     * @var null|array|\Zrone\Pipline\Collection
     */
    private $destination;

    private $destinationOrigin;

    public function getRadar()
    {
        return $this->radar;
    }

    public function setRadar($radar): Rocket
    {
        $this->radar = $radar;

        return $this;
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function setParams(array $params): Rocket
    {
        $this->params = $params;

        return $this;
    }

    public function mergeParams(array $params): Rocket
    {
        $this->params = array_merge($this->params, $params);

        return $this;
    }

    public function getPayload()
    {
        return $this->payload;
    }

    public function setPayload($payload): Rocket
    {
        $this->payload = $payload;

        return $this;
    }

    public function mergePayload(array $payload): Rocket
    {
        if (empty($this->payload)) {
            $this->payload = new Collection();
        }

        $this->payload = $this->payload->merge($payload);

        return $this;
    }

    public function getDirection(): ?string
    {
        return $this->direction;
    }

    public function setDirection(?string $direction): Rocket
    {
        $this->direction = $direction;

        return $this;
    }

    public function getDestination()
    {
        return $this->destination;
    }

    public function setDestination($destination): Rocket
    {
        $this->destination = $destination;

        return $this;
    }

    public function getDestinationOrigin()
    {
        return $this->destinationOrigin;
    }

    public function setDestinationOrigin($destinationOrigin): Rocket
    {
        $this->destinationOrigin = $destinationOrigin;

        return $this;
    }
}
