<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

interface DeviceInterface
{
    /**
     * @param  string           $name
     * @param  CommandInterface $command
     * @return void
     */
    public function setCommand(string $name, CommandInterface $command): void;

    /**
     * @param  string $name
     * @return void
     */
    public function execute(string $name): void;
}
