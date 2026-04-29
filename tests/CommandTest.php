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
        $this->assertEquals("💡 ON\n", $on);
        $this->assertTrue($this->device->getLightStatus());

        ob_start();
        $this->device->execute("off");
        $off = ob_get_clean();
        $this->assertEquals("💡 OFF\n", $off);
        $this->assertFalse($this->device->getLightStatus());

        ob_start();
        $this->device->execute("toggle");
        $toggle = ob_get_clean();
        $this->assertEquals("💡 ON\n", $toggle);
        $this->assertTrue($this->device->getLightStatus());

        ob_start();
        $this->device->execute("toggle");
        $toggle = ob_get_clean();
        $this->assertEquals("💡 OFF\n", $toggle);
        $this->assertFalse($this->device->getLightStatus());
    }
}
