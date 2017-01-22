<?php

/**
 * This file is part of the MySqlEventStore package.
 *
 * (c) Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 */

namespace MySqlEventStore;

use Zend\Hydrator\NamingStrategy\ArrayMapNamingStrategy;
use Zend\Hydrator\Strategy\SerializableStrategy;
use ZendHydratorUtilities\Reflection;
use ZendHydratorUtilities\Strategy\DateTimeFormatterStrategy;
use ZendHydratorUtilities\Strategy\UuidStrategy;

/**
 * Class EventHydrator
 *
 * @package MySqlEventStore
 * @author  Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 * @link    https://github.com/lorenzomar/mysql-eventstore
 */
class EventHydrator extends Reflection
{
    public function __construct()
    {
        $namingStrategy = new ArrayMapNamingStrategy([
            'occurredOn'     => 'occurred_on',
            'streamId'       => 'stream_id',
            'streamCategory' => 'stream_category',
        ]);

        $strategies = [
            'uuid'        => new UuidStrategy(),
            'occurred_on' => new DateTimeFormatterStrategy('Y-m-d H:i:s.u', new \DateTimeZone("UTC")),
            'payload'     => new SerializableStrategy('json'),
            'meta'        => new SerializableStrategy('json'),
            'occurredOn'  => new DateTimeFormatterStrategy('Y-m-d H:i:s.u', new \DateTimeZone("UTC")),
        ];

        parent::__construct($namingStrategy, $strategies);
    }
}