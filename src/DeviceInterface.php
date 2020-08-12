<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

interface DeviceInterface
{
    public function execute(string $commandName): void;
    public function setCommand(string $commandName, CommandInterface $command): void;
}
