<?php

namespace Mic2100\DesignPatterns\ValueObjects;

/**
 * Class SimpleValueObject
 *
 * These are a little like entities but generally they don't contain any identification
 *
 * @package Mic2100\DesignPatterns\ValueObjects
 */
class SimpleValueObject
{
    /**
     * @param float $width
     * @param float $height
     */
    public function __construct(
        private float $width,
        private float $height
    ) {

    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @return float
     */
    public function getArea(): float
    {
        return $this->getWidth() * $this->getHeight();
    }
}