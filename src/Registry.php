<?php

declare(strict_types=1);

/**
 * @author  : Korotkov Danila <dankorot@gmail.com>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

class Registry implements RegistryInterface
{
    /**
     * @var DeviceInterface
     */
    private $device;
    /**
     * @var array
     */
    private $commandsRegistry = [];

    /**
     * CommandRegistry constructor.
     * @param DeviceInterface $device
     */
    public function __construct(DeviceInterface $device)
    {
        $this->device = $device;
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

    /**
     * @param string $type
     */
    public function execute(string $type): void
    {
        if (!array_key_exists($type, $this->commandsRegistry)) {
            throw new \InvalidArgumentException('Type does not exist in the Chain');
        }

        $this->getCommandsRegistry($type)->execute($type, $this->getDevice());
    }

    /**
     * @return DeviceInterface
     */
    public function getDevice(): DeviceInterface
    {
        return $this->device;
    }

    /**
     * @param string|null $key
     * @return array|mixed
     */
    public function getCommandsRegistry(string $key = null)
    {
        if (isset($key)) {
            if (array_key_exists($key, $this->commandsRegistry)) {
                return $this->commandsRegistry[$key];
            }

            throw new \InvalidArgumentException('Wrong argument');
        }

        return $this->commandsRegistry;
    }
}
