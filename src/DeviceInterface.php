<?php

/**
 * @author  : Korotkov Danila <dankorot@gmail.com>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

interface DeviceInterface
{
    /**
     * @param string $type
     */
    public function execute(string $type): void;
}
