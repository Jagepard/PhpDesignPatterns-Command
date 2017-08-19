<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Command;

/**
 * Class TurnOnCommand
 * @package Behavioral\Command
 */
class TurnOnCommand extends CommandInterface
{

    public function execute(): void
    {
        $this->getLamp()->turnOn();
    }
}
