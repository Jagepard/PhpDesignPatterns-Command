<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

interface DeviceInterface
{
    /**
     * @param string $type
     */
    public function execute(string $type): void;

    /**
     * @param string           $type
     * @param CommandInterface $command
     */
    public function setCommand(string $type, CommandInterface $command): void;
}
