<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

class TurnOffCommand implements CommandInterface
{
    /**
     * Command execution
     * ------------------
     * Выполнение команды
     *
     * @return void
     */
    public function execute(): void
    {
        print("The Light turns off \n");
    }
}
