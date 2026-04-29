<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

class TurnOnCommand implements CommandInterface
{
    private function getMessage(): void
    {
        echo "💡 ON\n";
    }

    private function getStatus(): bool
    {
        return true;
    }

    public function execute(DeviceInterface $device): void
    {
        $this->getMessage();
        $device->setLightStatus($this->getStatus());
    }
}
