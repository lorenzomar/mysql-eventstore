<?php

/**
 * This file is part of the EventStore package.
 *
 * (c) Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 */

namespace EventStore;

use MySqlEventStore\Event;

/**
 * Interface EventEmitterInterface.
 *
 * @package EventStore
 * @author  Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 * @link    https://github.com/lorenzomar/eventstore
 */
interface EventEmitterInterface
{
    /**
     * raise.
     *
     * @param Event $event
     */
    public function raise(Event $event);

    /**
     * releaseEvents.
     *
     * @return Event[]
     */
    public function releaseEvents();
}