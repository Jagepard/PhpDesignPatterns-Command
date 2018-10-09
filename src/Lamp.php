<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

/**
 * Class Lamp
 * @package Behavioral\Command
 */
class Lamp implements DeviceInterface
{
    public function turnOn(): void
    {
        $this->execute('on');
    }

    public function turnOff(): void
    {
        $this->execute('off');
    }

    /**
     * @param string $status
     */
    protected function execute(string $status): void
    {
        printf("The Light turns %s \n", $status);
    }
}
