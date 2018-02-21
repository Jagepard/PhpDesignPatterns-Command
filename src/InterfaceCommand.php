<?php
/**
 * Date: 21.02.18
 * Time: 23:45
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Command;


/**
 * Interface InterfaceCommand
 * @package Behavioral\Command
 */
interface InterfaceCommand
{

    /**
     * @param InterfaceDevice $device
     * @return mixed
     */
    public function execute(InterfaceDevice $device);
}