<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

/**
 * Interface CommandInterface
 * @package Behavioral\Command
 */
interface CommandInterface
{
    /**
     * @param DeviceInterface $device
     * @param TypeInterface   $type
     */
    public function execute(DeviceInterface $device, TypeInterface $type): void;
}
