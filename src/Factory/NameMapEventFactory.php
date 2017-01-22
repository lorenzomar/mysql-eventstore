<?php

/**
 * This file is part of the MySqlEventStore package.
 *
 * (c) Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 */

namespace MySqlEventStore\Factory;

/**
 * Class NameMapEventFactory
 *
 * @package MySqlEventStore
 * @author  Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 * @link    https://github.com/lorenzomar/mysql-eventstore
 */
class NameMapEventFactory implements EventFactoryInterface
{
    /**
     * @var array
     */
    protected $map;

    public function __construct(array $map)
    {
        $this->map = $map;
    }

    /**
     * @inheritdoc
     *
     * @throws \RuntimeException
     */
    public function make($name, $streamId, $streamCategory, array $payload = [], array $meta = [])
    {
        if (!isset($this->map[$name])) {
            throw new \RuntimeException("No factory found for event named '$name'");
        }

        if (is_callable($this->map[$name])) {
            return $this->map[$name]($name, $streamId, $streamCategory, $payload, $meta);
        } elseif (method_exists($this, $this->map[$name])) {
            return $this->{$this->map[$name]}($name, $streamId, $streamCategory, $payload, $meta);
        } else {
            throw new \RuntimeException("Found factory is neither a method of the class nor a valid callable.");
        }

    }
}