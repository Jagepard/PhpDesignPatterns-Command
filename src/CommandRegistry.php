<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Command;

/**
 * Class CommandRegistry
 * @package Behavioral\Command
 */
class CommandRegistry
{

    /**
     * @var array
     */
    protected $commandsRegistry = [];

    /**
     * @var InterfaceDevice
     */
    protected $device;

    /**
     * CommandRegistry constructor.
     * @param InterfaceDevice $device
     */
    public function __construct(InterfaceDevice $device)
    {
        $this->device = $device;
    }

    /**
     * @return InterfaceDevice
     */
    public function getDevice(): InterfaceDevice
    {
        return $this->device;
    }

    /**
     * @param InterfaceCommand $command
     * @param string           $type
     */
    public function setCommand(InterfaceCommand $command, string $type): void
    {
        $this->commandsRegistry[$type] = $command;
    }

    /**
     * @param string $type
     * @return mixed
     */
    public function getCommand(string $type)
    {
        if (isset($this->commandsRegistry[$type])) {
            return $this->commandsRegistry[$type]->execute($this->getDevice());
        } else {
            print 'Cannot find command ' . $type;
        }
    }
}
