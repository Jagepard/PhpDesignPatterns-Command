<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Command;

/**
 * Class ToggleCommand
 * @package Behavioral\Command
 */
class ToggleCommand
{
    /**
     * @return int
     */
    public function getToggle(): int
    {
        return $this->toggle;
    }

    /**
     * @param int $toggle
     */
    public function setToggle(int $toggle)
    {
        $this->toggle = $toggle;
    }

    /**
     * @var int
     */
    protected $toggle = 1;

    /**
     * @param InterfaceDevice $device
     */
    public function execute(InterfaceDevice $device)
    {
        if ($this->getToggle() % 2) {
            $this->setToggle($this->getToggle() + 1);
            $device->turnOn();
        } else {
            $this->setToggle($this->getToggle() + 1);
            $device->turnOff();
        }
    }
}
