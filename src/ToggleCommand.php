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
class ToggleCommand extends CommandInterface
{

    /**
     * @var int
     */
    protected $toggle = 1;

    /**
     * @return int
     */
    public function getToggle()
    {
        return $this->toggle;
    }

    /**
     * @param $toggle
     */
    public function setToggle($toggle)
    {
        $this->toggle = $toggle;
    }

    /**
     * @return mixed|void
     */
    public function execute()
    {
        if ($this->getToggle() % 2) {
            $this->setToggle($this->getToggle() + 1);
            $this->getLamp()->turnOn();
        } else {
            $this->setToggle($this->getToggle() + 1);
            $this->getLamp()->turnOff();
        }
    }
}