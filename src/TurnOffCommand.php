<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Command;

/**
 * Class TurnOffCommand
 * @package Behavioral\Command
 */
class TurnOffCommand extends CommandInterface
{

    /**
     * @return mixed|void
     */
    public function execute()
    {
        $this->getLamp()->turnOff();
    }
}