<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

class TurnOnCommand implements CommandInterface
{
    public function execute(): void
    {
        print("The Light turns on \n");
    }
}
