<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

/**
 * Class TurnOffCommand
 * @package Behavioral\Command
 */
class TurnOffCommand implements CommandInterface
{
    /**
     * @param DeviceInterface $device
     */
    public function execute(DeviceInterface $device): void
    {
        $device->turnOff();
    }
}
