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
class TurnOnCommand implements InterfaceCommand
{

    /**
     * @param InterfaceDevice $device
     */
    public function execute(InterfaceDevice $device)
    {
        $device->turnOn();
    }
}
