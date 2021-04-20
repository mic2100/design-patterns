<?php

namespace Mic2100\DesignPatterns\Singletons;

/**
 * Class SimpleSingleton
 *
 * Singletons are extremely useful if you one want to instantiate the class once
 * In addition to many other purposes these can be used for connections to db, cache & mail servers
 *
 * @package Mic2100\DesignPatterns\Singletons
 */
class SimpleSingleton
{
    /**
     * @var SimpleSingleton|null
     */
    private static ?SimpleSingleton $instance = null;

    /**
     * @var float
     */
    private float $time;

    /**
     * SimpleSingleton constructor
     *
     * This cannot be instantiated without calling the getInstance method
     */
    private function __construct()
    {
        $this->time = microtime(true);
    }

    /**
     * @return float
     */
    public function getTime(): float
    {
        return $this->time;
    }

    /**
     * @return static
     */
    public static function getInstance(): self
    {
        if (self::$instance == null) {
            self::$instance = new SimpleSingleton;
        }

        return self::$instance;
    }
}