<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

/**
 * Class CommandRegistry
 * @package Behavioral\Command
 */
class CommandRegistry
{

    /**
     * @var DeviceInterface
     */
    protected $device;
    /**
     * @var array
     */
    protected $commandsRegistry = [];

    /**
     * CommandRegistry constructor.
     * @param DeviceInterface $device
     */
    public function __construct(DeviceInterface $device)
    {
        $this->device = $device;
    }

    /**
     * @return DeviceInterface
     */
    public function getDevice(): DeviceInterface
    {
        return $this->device;
    }

    /**
     * @param CommandInterface $command
     * @param string           $type
     */
    public function setCommand(CommandInterface $command, string $type): void
    {
        $this->commandsRegistry[$type] = $command;
    }

    /**
     * @param string $type
     */
    public function getCommand(string $type): void
    {
        if (isset($this->commandsRegistry[$type])) {
            $this->commandsRegistry[$type]->execute($this->getDevice());
        }
    }
}
