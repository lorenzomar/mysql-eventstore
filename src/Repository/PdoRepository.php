<?php

/**
 * This file is part of the MySqlEventStore package.
 *
 * (c) Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 */

namespace MySqlEventStore\Repository;

use MySqlEventStore\EventHydrator;
use Ramsey\Uuid\UuidInterface;
use Zend\Hydrator\HydratorInterface;

/**
 * Class PdoRepository
 *
 * @package MySqlEventStore
 * @author  Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 * @link    https://github.com/lorenzomar/mysql-eventstore
 */
class PdoRepository implements RepositoryInterface
{
    /**
     * @var \PDO
     */
    private $pdo;

    /**
     * @var EventHydrator
     */
    private $hydrator;

    /**
     * @var string
     */
    private $tableName;

    public function __construct(\PDO $pdo, $tableName, HydratorInterface $hydrator = null)
    {
        $this->pdo       = $pdo;
        $this->tableName = $tableName;
        $this->hydrator  = ($hydrator === null) ? new EventHydrator() : $hydrator;
    }

    public function append($events)
    {
        // TODO: Implement append() method.
    }

    public function getByUuid(UuidInterface $id, $default = null)
    {
        // TODO: Implement getByUuid() method.
    }

    public function getById($id, $default = null)
    {
        // TODO: Implement getById() method.
    }
}