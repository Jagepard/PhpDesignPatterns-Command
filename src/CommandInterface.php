<?php

/**
 * @author  : Korotkov Danila <dankorot@gmail.com>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

interface CommandInterface
{
    /**
     * @param DeviceInterface $device
     * @param TypeInterface   $type
     */
    public function execute(DeviceInterface $device, TypeInterface $type): void;
}
