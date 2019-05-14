<?php

declare(strict_types=1);

/**
 * @author  : Korotkov Danila <dankorot@gmail.com>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

class Lamp implements DeviceInterface
{
    /**
     * @param string $type
     */
    public function execute(string $type): void
    {
        printf("The Light turns %s \n", $type);
    }
}
