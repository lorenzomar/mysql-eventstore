<?php

/**
 * This file is part of the MySqlEventStore package.
 *
 * (c) Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 */

namespace MySqlEventStore\Repository;

use MySqlEventStore\Event;
use Ramsey\Uuid\UuidInterface;

/**
 * Interface RepositoryInterface
 *
 * @package MySqlEventStore
 * @author  Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 * @link    https://github.com/lorenzomar/mysql-eventstore
 */
interface RepositoryInterface
{
    /**
     * add.
     *
     * @param Event|Event[] $events
     */
    public function append($events);

    /**
     * getByUuid.
     *
     * @param UuidInterface $id
     * @param mixed         $default Default value in case of not found id
     *
     * @return mixed|Event
     */
    public function getByUuid(UuidInterface $id, $default = null);

    /**
     * getById.
     *
     * @param int   $id
     * @param mixed $default
     *
     * @return mixed|Event
     */
    public function getById($id, $default = null);
}