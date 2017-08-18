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
    protected $registry = [];

    /**
     * @param CommandInterface $command
     * @param                  $type
     */
    public function setRegistry(CommandInterface $command, string $type): void
    {
        $this->registry[$type] = $command;
    }

    /**
     * @param string $type
     *
     * @return CommandInterface
     */
    public function getRegistry(string $type)
    {
        if (!isset($this->registry[$type])) {
            print 'Cannot find command ' . $type;
        } else {
            return $this->registry[$type];
        }
    }
}