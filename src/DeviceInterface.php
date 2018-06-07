<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

/**
 * Interface DeviceInterface
 * @package Behavioral\Command
 */
interface DeviceInterface
{

    public function turnOn(): void;

    public function turnOff(): void;
}
