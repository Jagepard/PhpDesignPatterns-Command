<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

class TurnOffCommand implements CommandInterface
{
    private function getMessage(): void
    {
        echo "💡 OFF\n";
    }

    private function getStatus(): bool
    {
        return false;
    }

    public function execute(DeviceInterface $device): void
    {
        $this->getMessage();
        $device->setLightStatus($this->getStatus());
    }
}
