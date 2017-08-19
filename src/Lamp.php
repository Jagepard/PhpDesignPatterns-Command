<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Command;

/**
 * Class Lamp
 * @package Behavioral\Command
 */
class Lamp
{

    public function turnOn()
    {
        print "The Light turns on \n";
    }

    public function turnOff()
    {
        print "The Light turns off \n";
    }
}
