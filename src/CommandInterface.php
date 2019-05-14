<?php

/**
 * @author  : Korotkov Danila <dankorot@gmail.com>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

interface CommandInterface
{
    /**
     * @param string          $type
     * @param DeviceInterface $device
     */
    public function execute(string $type, DeviceInterface $device): void;
}
