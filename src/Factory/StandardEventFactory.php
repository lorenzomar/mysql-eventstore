<?php

/**
 * This file is part of the MySqlEventStore package.
 *
 * (c) Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 */

namespace MySqlEventStore\Factory;

use MySqlEventStore\Event;
use Ramsey\Uuid\Uuid;

/**
 * Class StandardEventFactory
 *
 * @package MySqlEventStore
 * @author  Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 * @link    https://github.com/lorenzomar/mysql-eventstore
 */
class StandardEventFactory implements EventFactoryInterface
{
    public function make($name, $streamId, $streamCategory, array $payload = [], array $meta = [])
    {
        return new Event(Uuid::uuid1(), $name, $streamId, $streamCategory, $payload, $meta);
    }
}