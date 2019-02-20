<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

/**
 * Trait CommandTrait
 * @package Behavioral\Command
 */
trait CommandTrait
{
    /**
     * @param DeviceInterface $device
     * @param TypeInterface   $type
     */
    public function execute(DeviceInterface $device, TypeInterface $type): void
    {
        $device->execute($type);
    }
}
