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
     * Command registry
     * ----------------
     * Реестр команд
     *
     * @var array
     */
    private array $commands = [];

    /**
     * Executes a specific command from the registry
     * ---------------------------------------------
     * Исполняет определенную команду из реестра
     *
     * @param  string $commandName
     * @return void
     */
    public function execute(string $commandName): void
    {
        if (!array_key_exists($commandName, $this->commands)) {
            throw new \InvalidArgumentException("Command $commandName does not exist in the registry");
        }

        $this->commands[$commandName]->execute();
    }

    /**
     * Adds a command to the registry
     * ------------------------------
     * Добавляет команду в реестр
     * 
     * @param string $commandName
     * @param CommandInterface $command
     */
    public function setCommand(string $commandName, CommandInterface $command): void
    {
        if (array_key_exists($commandName, $this->commands)) {
            throw new \InvalidArgumentException("Command $commandName already exists");
        }

        $this->commands[$commandName] = $command;
    }
}
