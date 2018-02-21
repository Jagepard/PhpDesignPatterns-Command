<?php
/**
 * Date: 21.02.18
 * Time: 16:49
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Command;

/**
 * Interface InterfaceDevice
 * @package Behavioral\Command
 */
interface InterfaceDevice
{

    public function turnOn();
    public function turnOff();
}