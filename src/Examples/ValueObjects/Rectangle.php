<?php

namespace Mic2100\DesignPatterns\Examples\ValueObjects;

/**
 * Class Rectangle
 *
 * @package Mic2100\DesignPatterns\ValueObjects
 */
class Rectangle
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
     * Gets the area of the rectangle
     *
     * @return float
     */
    public function getArea(): float
    {
        return $this->getWidth() * $this->getHeight();
    }

    /**
     * Gets the perimeter of the rectangle
     *
     * @return float
     */
    public function getPerimeter(): float
    {
        return ($this->getWidth() + $this->getHeight()) * 2;
    }
}
