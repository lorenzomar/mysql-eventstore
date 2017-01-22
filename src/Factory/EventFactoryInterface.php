<?php

/**
 * This file is part of the MySqlEventStore package.
 *
 * (c) Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 */

namespace MySqlEventStore\Factory;

use MySqlEventStore\Event;

/**
 * Interface EventFactoryInterface.
 *
 * @package MySqlEventStore
 * @author  Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 * @link    https://github.com/lorenzomar/mysql-eventstore
 */
interface EventFactoryInterface
{
    /**
     * make.
     *
     * @param string $name
     * @param string $streamId
     * @param string $streamCategory
     * @param array  $payload
     * @param array  $meta
     *
     * @return Event
     */
    public function make($name, $streamId, $streamCategory, array $payload = [], array $meta = []);
}