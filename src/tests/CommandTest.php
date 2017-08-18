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

    protected $lamp;

    protected $registry;

    protected function setUp(): void
    {
        $this->lamp     = new \Behavioral\Command\Lamp();
        $this->registry = new \Behavioral\Command\CommandRegistry();

        $this->registry->setRegistry(new \Behavioral\Command\TurnOnCommand($this->lamp), 'ON');
        $this->registry->setRegistry(new \Behavioral\Command\TurnOffCommand($this->lamp), 'OFF');
        $this->registry->setRegistry(new \Behavioral\Command\ToggleCommand($this->lamp), 'TOGGLE');
    }

    public function testCommandRegistry(): void
    {
        ob_start();
        $this->assertNull($this->getRegistry()->getRegistry('FALE'));
        $error = ob_get_clean();
        $this->assertEquals($error, 'Cannot find command FALE');

        $this->assertInstanceOf(\Behavioral\Command\CommandInterface::class, $this->getRegistry()->getRegistry('ON'));
        $this->assertInstanceOf(\Behavioral\Command\CommandInterface::class, $this->getRegistry()->getRegistry('OFF'));
        $this->assertInstanceOf(\Behavioral\Command\CommandInterface::class, $this->getRegistry()->getRegistry('TOGGLE'));
    }

    public function testExecute(): void
    {
        ob_start();
        $this->assertNull($this->getRegistry()->getRegistry('ON')->execute());
        $on = ob_get_clean();
        $this->assertEquals($on, "The Light turns on \n");

        ob_start();
        $this->assertNull($this->getRegistry()->getRegistry('OFF')->execute());
        $off = ob_get_clean();
        $this->assertEquals($off, "The Light turns off \n");

        ob_start();
        $this->assertNull($this->getRegistry()->getRegistry('TOGGLE')->execute());
        $toggle = ob_get_clean();
        $this->assertEquals($toggle, "The Light turns on \n");

        ob_start();
        $this->assertNull($this->getRegistry()->getRegistry('TOGGLE')->execute());
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