<?php

/**
 * This file is part of the MySqlEventStore package.
 *
 * (c) Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 */

namespace MySqlEventStore\Factory;

/**
 * Trait EventFactoryTrait
 *
 * @package MySqlEventStore
 * @author  Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 * @link    https://github.com/lorenzomar/mysql-eventstore
 */
trait EventFactoryTrait
{
    /**
     * @var null|EventFactoryInterface
     */
    protected static $eventFactory;

    public static function setEventFactory(EventFactoryInterface $eventFactory)
    {
        static::$eventFactory = $eventFactory;
    }

    public static function getEventFactory()
    {
        return static::$eventFactory;
    }

    public static function hasEventFactory()
    {
        return static::$eventFactory instanceof EventFactoryInterface;
    }
}