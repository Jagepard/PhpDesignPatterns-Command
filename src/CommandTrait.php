<?php

/**
 * @author  : Korotkov Danila <dankorot@gmail.com>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

trait CommandTrait
{
    /**
     * @param string          $type
     * @param DeviceInterface $device
     */
    public function execute(string $type, DeviceInterface $device): void
    {
        $device->execute($type);
    }
}
