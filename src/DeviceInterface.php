<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

interface DeviceInterface
{
    /**
     * @param  string $commandName
     * @return void
     */
    public function execute(string $commandName): void;

    /**
     * @param  string           $commandName
     * @param  CommandInterface $command
     * @return void
     */
    public function setCommand(string $commandName, CommandInterface $command): void;
}
