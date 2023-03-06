<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

class ToggleCommand implements CommandInterface
{
    private int $toggle = 1;

    /**
     * Switches from one command to another
     * -------------------------------------
     * Переключает с одной команды на другую
     *
     * @return void
     */
    public function execute(): void
    {
        $command = ($this->toggle % 2) ? new TurnOnCommand() : new TurnOffCommand();
        $this->toggle++;
        $command->execute();
    }
}
