<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

class Lamp implements DeviceInterface
{
    /**
     * @var array
     */
    private $commands = [];

    /**
     * @param  string  $commandName
     */
    public function execute(string $commandName): void
    {
        if (!array_key_exists($commandName, $this->commands)) {
            throw new \InvalidArgumentException('Command does not exist in the registry');
        }

        $this->commands[$commandName]->execute();
    }

    /**
     * @param  string  $commandName
     * @param  CommandInterface  $command
     */
    public function setCommand(string $commandName, CommandInterface $command): void
    {
        if (array_key_exists($commandName, $this->commands)) {
            throw new \InvalidArgumentException('Command already exists');
        }

        $this->commands[$commandName] = $command;
    }
}
