<?php

/**
 * This file is part of the MySqlEventStore package.
 *
 * (c) Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 */

namespace MySqlEventStore;

/**
 * Trait EventEmitterTrait
 *
 * @package MySqlEventStore
 * @author  Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 * @link    https://github.com/lorenzomar/mysql-eventstore
 */
trait EventEmitterTrait
{
    /**
     * @var Event[]
     */
    protected $pendingEvents = [];

    /**
     * raise.
     *
     * @param Event $event
     */
    protected function raise(Event $event)
    {
        $this->pendingEvents[] = $event;
    }

    /**
     * releaseEvents.
     *
     * @return Event[]
     */
    public function releaseEvents()
    {
        $events              = $this->pendingEvents;
        $this->pendingEvents = [];

        return $events;
    }
}