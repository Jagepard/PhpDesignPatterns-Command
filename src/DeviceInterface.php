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
    /**
     * @param TypeInterface $type
     */
    public function execute(TypeInterface $type): void;
}
