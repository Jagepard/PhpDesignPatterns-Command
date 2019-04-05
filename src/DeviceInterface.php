<?php

/**
 * @author  : Korotkov Danila <dankorot@gmail.com>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

interface DeviceInterface
{
    /**
     * @param TypeInterface $type
     */
    public function execute(TypeInterface $type): void;
}
