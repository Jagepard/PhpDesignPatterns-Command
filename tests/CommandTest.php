<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Command\Tests;

use Behavioral\Command\Lamp;
use Behavioral\Command\ToggleCommand;
use Behavioral\Command\TurnOnCommand;
use Behavioral\Command\TurnOffCommand;
use Behavioral\Command\Registry;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class CommandTest
 * @package Behavioral\Command\Tests
 */
class CommandTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var Registry
     */
    protected $registry;

    protected function setUp(): void
    {
        $this->registry = new Registry(new Lamp());
        $this->registry->setCommand(new TurnOnCommand(), 'on');
        $this->registry->setCommand(new TurnOffCommand(), 'off');
        $this->registry->setCommand(new ToggleCommand(), 'toggle');
    }

    public function testExecute(): void
    {
        ob_start();
        $this->registry->execute('on');
        $on = ob_get_clean();
        $this->assertEquals($on, sprintf("The Light turns %s \n", 'on'));

        ob_start();
        $this->registry->execute('off');
        $off = ob_get_clean();
        $this->assertEquals($off, sprintf("The Light turns %s \n", 'off'));

        ob_start();
        $this->registry->execute('toggle');
        $toggle = ob_get_clean();
        $this->assertEquals($toggle, sprintf("The Light turns %s \n", 'on'));

        ob_start();
        $this->registry->execute('toggle');
        $toggle = ob_get_clean();
        $this->assertEquals($toggle, sprintf("The Light turns %s \n", 'off'));
    }
}