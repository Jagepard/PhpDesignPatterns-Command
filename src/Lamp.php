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
    private $commandsRegistry = [];

    /**
     * @param string $type
     */
    public function execute(string $type): void
    {
        if (!array_key_exists($type, $this->commandsRegistry)) {
            throw new \InvalidArgumentException('Type does not exist in the Registry');
        }

        $this->commandsRegistry[$type]->execute();
    }

    /**
     * @param string           $type
     * @param CommandInterface $command
     */
    public function setCommand(string $type, CommandInterface $command): void
    {
        if (array_key_exists($type, $this->commandsRegistry)) {
            throw new \InvalidArgumentException('Command already exists');
        }

        $this->commandsRegistry[$type] = $command;
    }
}
