<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

/**
 * Class TurnOnCommand
 * @package Behavioral\Command
 */
class TurnOnCommand implements CommandInterface
{
    /**
     * @param DeviceInterface $device
     */
    public function execute(DeviceInterface $device): void
    {
        $device->turnOn();
    }
}
