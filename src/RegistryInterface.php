<?php

/**
 * @author  : Korotkov Danila <dankorot@gmail.com>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

interface RegistryInterface
{
    /**
     * @param string           $type
     * @param CommandInterface $command
     */
    public function setCommand(string $type, CommandInterface $command): void;

    /**
     * @param string $type
     */
    public function execute(string $type): void;
}
