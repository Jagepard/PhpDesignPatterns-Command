<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class CommandTest extends PHPUnit_Framework_TestCase
{

    protected $registry;

    protected function setUp(): void
    {
        $this->registry = new \Behavioral\Command\CommandRegistry(new \Behavioral\Command\Lamp());

        $this->registry->setCommand(new \Behavioral\Command\TurnOnCommand(), 'ON');
        $this->registry->setCommand(new \Behavioral\Command\TurnOffCommand(), 'OFF');
        $this->registry->setCommand(new \Behavioral\Command\ToggleCommand(), 'TOGGLE');
    }

    public function testCommandRegistry(): void
    {
        ob_start();
        $this->assertNull($this->getRegistry()->getCommand('FALE'));
        $error = ob_get_clean();
        $this->assertEquals($error, 'Cannot find command FALE');
    }

    public function testExecute(): void
    {
        ob_start();
        $this->assertNull($this->getRegistry()->getCommand('ON'));
        $on = ob_get_clean();
        $this->assertEquals($on, "The Light turns on \n");

        ob_start();
        $this->assertNull($this->getRegistry()->getCommand('OFF'));
        $off = ob_get_clean();
        $this->assertEquals($off, "The Light turns off \n");

        ob_start();
        $this->assertNull($this->getRegistry()->getCommand('TOGGLE'));
        $toggle = ob_get_clean();
        $this->assertEquals($toggle, "The Light turns on \n");

        ob_start();
        $this->assertNull($this->getRegistry()->getCommand('TOGGLE'));
        $toggle = ob_get_clean();
        $this->assertEquals($toggle, "The Light turns off \n");
    }

    /**
     * @return mixed
     */
    public function getRegistry(): \Behavioral\Command\CommandRegistry
    {
        return $this->registry;
    }
}