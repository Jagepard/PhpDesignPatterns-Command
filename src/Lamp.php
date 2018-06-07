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
        printf("The Light turns %s \n", 'on');
    }

    public function turnOff(): void
    {
        printf("The Light turns %s \n", 'off');
    }
}
