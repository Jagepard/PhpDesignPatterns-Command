<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

/**
 * Class Registry
 * @package Behavioral\Command
 */
class Registry
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
     * @param CommandInterface $command
     * @param string           $name
     */
    public function setCommand(CommandInterface $command, string $name): void
    {
        $this->commandsRegistry[$name] = $command;
    }

    /**
     * @param string $name
     */
    public function execute(string $name): void
    {
        if (isset($this->commandsRegistry[$name])) {
            $this->commandsRegistry[$name]->execute($this->device);
        }
    }
}
