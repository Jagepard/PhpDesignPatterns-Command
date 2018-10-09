<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

/**
 * Class ToggleCommand
 * @package Behavioral\Command
 */
class ToggleCommand implements CommandInterface
{
    /**
     * @var int
     */
    protected $toggle = 1;

    /**
     * @param DeviceInterface $device
     */
    public function execute(DeviceInterface $device): void
    {
        ($this->toggle % 2) ? $device->turnOn() : $device->turnOff();
        $this->toggle++;
    }
}
