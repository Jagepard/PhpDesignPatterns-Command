<?php

declare(strict_types=1);

/**
 * @author  : Korotkov Danila <dankorot@gmail.com>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command\Tests;

use Behavioral\Command\CommandType;
use Behavioral\Command\Lamp;
use Behavioral\Command\ToggleCommand;
use Behavioral\Command\TurnOnCommand;
use Behavioral\Command\TurnOffCommand;
use Behavioral\Command\Registry;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class CommandTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Registry
     */
    private $registry;

    protected function setUp(): void
    {
        $this->registry = new Registry(new Lamp());
        $this->getRegistry()->setCommand(new TurnOnCommand(), new CommandType('on'));
        $this->getRegistry()->setCommand(new TurnOffCommand(), new CommandType('off'));
        $this->getRegistry()->setCommand(new ToggleCommand(), new CommandType('toggle'));
    }

    public function testExecute(): void
    {
        ob_start();
        $this->getRegistry()->execute(new CommandType('on'));
        $on = ob_get_clean();
        $this->assertEquals($on, sprintf("The Light turns %s \n", 'on'));

        ob_start();
        $this->getRegistry()->execute(new CommandType('off'));
        $off = ob_get_clean();
        $this->assertEquals($off, sprintf("The Light turns %s \n", 'off'));

        ob_start();
        $this->getRegistry()->execute(new CommandType('toggle'));
        $toggle = ob_get_clean();
        $this->assertEquals($toggle, sprintf("The Light turns %s \n", 'on'));

        ob_start();
        $this->getRegistry()->execute(new CommandType('toggle'));
        $toggle = ob_get_clean();
        $this->assertEquals($toggle, sprintf("The Light turns %s \n", 'off'));
    }

    /**
     * @return Registry
     */
    public function getRegistry(): Registry
    {
        return $this->registry;
    }
}
