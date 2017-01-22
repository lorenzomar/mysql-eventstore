<?php

/**
 * This file is part of the MySqlEventStore package.
 *
 * (c) Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 */

namespace MySqlEventStore\Factory;

/**
 * Interface EventFactoryAwareInterface.
 *
 * @package MySqlEventStore
 * @author  Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 * @link    https://github.com/lorenzomar/mysql-eventstore
 */
interface EventFactoryAwareInterface
{
    /**
     * setEventFactory.
     *
     * @param EventFactoryInterface $eventFactory
     */
    public static function setEventFactory(EventFactoryInterface $eventFactory);

    /**
     * getEventFactory
     *
     * @return null|EventFactoryInterface
     */
    public static function getEventFactory();

    /**
     * hasEventFactory.
     *
     * @return bool
     */
    public static function hasEventFactory();
}