<?php

namespace Mic2100\DesignPatterns\Entities;

/**
 * Class SimpleEntity
 *
 * An entity is supposed to represent an identifiable object.
 * Quite often these are used in ORM system to show the rows in the a database table.
 * These usually contain a primary or unique key.
 *
 * @package Mic2100\DesignPatterns\Entities
 */
class SimpleEntity
{
    /**
     * @param int $entityId
     * @param string $entityName
     */
    public function __construct(
        public int $entityId,
        public string $entityName
    ) {
    }

    /**
     * Gets the entity ID
     *
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->entityId;
    }

    /**
     * Gets the entity name
     *
     * @return string
     */
    public function getEntityName(): string
    {
        return $this->entityName;
    }
}
