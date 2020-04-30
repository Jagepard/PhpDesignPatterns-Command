<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command\Tests;

use Behavioral\Command\{
    Lamp,
    ToggleCommand,
    TurnOnCommand,
    TurnOffCommand,
    DeviceInterface
};
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class CommandTest extends PHPUnit_Framework_TestCase
{
    private DeviceInterface $device;

    protected function setUp(): void
    {
        $this->device = new Lamp();
        $this->device->setCommand("on", new TurnOnCommand());
        $this->device->setCommand("off", new TurnOffCommand());
        $this->device->setCommand("toggle", new ToggleCommand());
    }

    public function testExecute(): void
    {
        ob_start();
        $this->device->execute("on");
        $on = ob_get_clean();
        $this->assertEquals($on, sprintf("The Light turns %s \n", "on"));

        ob_start();
        $this->device->execute("off");
        $off = ob_get_clean();
        $this->assertEquals($off, sprintf("The Light turns %s \n", "off"));

        ob_start();
        $this->device->execute("toggle");
        $toggle = ob_get_clean();
        $this->assertEquals($toggle, sprintf("The Light turns %s \n", "on"));

        ob_start();
        $this->device->execute("toggle");
        $toggle = ob_get_clean();
        $this->assertEquals($toggle, sprintf("The Light turns %s \n", "off"));
    }
}
