<?php

/**
 * This file is part of the MySqlEventStore package.
 *
 * (c) Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 */

namespace MySqlEventStore;

use Ramsey\Uuid\UuidInterface;

/**
 * Class Event
 *
 * @package MySqlEventStore
 * @author  Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 * @link    https://github.com/lorenzomar/mysql-eventstore
 */
class Event
{
    /**
     * @var int autoincrement int
     */
    private $id;

    /**
     * @var UuidInterface
     */
    private $uuid;

    /**
     * @var \DateTimeInterface
     */
    private $occurredOn;

    /**
     * @var string
     */
    private $streamId;

    /**
     * @var string
     */
    private $streamCategory;

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $payload;

    /**
     * @var array
     */
    private $meta;

    public function __construct(
        UuidInterface $uuid,
        $name,
        $streamId,
        $streamCategory,
        array $payload = [],
        array $meta = []
    ) {
        $microseconds = number_format(microtime(true), 6, '.', '');

        $this->uuid           = $uuid;
        $this->occurredOn     = \DateTimeImmutable::createFromFormat('U.u', $microseconds);
        $this->name           = $name;
        $this->streamId       = $streamId;
        $this->streamCategory = $streamCategory;
        $this->payload        = $payload;
        $this->meta           = $meta;
    }

    /**
     * id.
     *
     * @return int
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * uuid.
     *
     * @return UuidInterface
     */
    public function uuid()
    {
        return $this->uuid;
    }

    /**
     * occurredOn.
     *
     * @return \DateTimeInterface
     */
    public function occurredOn()
    {
        return $this->occurredOn;
    }

    /**
     * streamId.
     *
     * @return string
     */
    public function streamId()
    {
        return $this->streamId;
    }

    /**
     * streamCategory.
     *
     * @return string
     */
    public function streamCategory()
    {
        return $this->streamCategory;
    }

    /**
     * name.
     *
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * payload.
     *
     * @return array
     */
    public function payload()
    {
        return $this->payload;
    }

    /**
     * meta.
     *
     * @return array
     */
    public function meta()
    {
        return $this->meta;
    }
}