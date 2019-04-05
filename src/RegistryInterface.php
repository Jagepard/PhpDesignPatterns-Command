<?php

/**
 * @author  : Korotkov Danila <dankorot@gmail.com>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

interface RegistryInterface
{
    /**
     * @param CommandInterface $command
     * @param TypeInterface    $type
     */
    public function setCommand(CommandInterface $command, TypeInterface $type): void;

    /**
     * @param TypeInterface $type
     */
    public function execute(TypeInterface $type): void;
}
