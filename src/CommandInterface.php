<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

interface CommandInterface
{
    /**
     * @return void
     */
    public function execute(): void;
}
